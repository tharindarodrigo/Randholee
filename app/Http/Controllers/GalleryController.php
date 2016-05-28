<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use App\GalleryImages;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery_images = GalleryImage::all();
        return view('control-panel.gallery-images.index', compact('gallery_images'));
    }

    public function store(Request $request, $width = null, $height = null)
    {

        $image = Input::file('image');
        $img = Image::make($image);
        $h = $img->height();
        $w = $img->width();

        if ($w >= $h) {
            if (ceil($w / 2) >= 400) {
                $w = 400;
            } else {
                $w /= 2;
            }
            $h = null;

        } else {
            if (ceil($h / 2) >= 400) {
                $h = 400;
            } else {
                $h /= 2;
            }

            $w = null;
        }

        $gallery_image = new GalleryImage();
        $gallery_image->title = $request->get('title');

        if ($gallery_image->save()) {
            $img->save(public_path() . '/images/gallery/large/' . $gallery_image->id . '.jpg')
                ->resize($w, $h, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/gallery/thumb/' . $gallery_image->id . '.jpg');

            return redirect()->back();
        }

        $request->session()->flash('global', 'There was an error while saving');

    }

    public function destroy(Request $request, $id)
    {
        try {
            $menu_item = GalleryImage::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        if ($menu_item->delete()) {
            if (file_exists(public_path() . '/images/gallery/large/' . $id . '.jpg')) {
                unlink(public_path() . '/images/gallery/large/' . $id . '.jpg');
            }
            if (file_exists(public_path() . '/images/gallery/thumb/' . $id . '.jpg')) {
                unlink(public_path() . '/images/gallery/thumb/' . $id . '.jpg');
            }

            $request->session()->flash('global', "Record deleted successfully");

        }

        return redirect()->back();
    }
}
