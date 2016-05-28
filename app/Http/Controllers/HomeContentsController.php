<?php

namespace App\Http\Controllers;

use App\HomeContent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class HomeContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_contents = HomeContent::all();
        return view('control-panel.home-contents.index', compact('home_contents'));
    }

    public function store(Request $request)
    {
        $home_content = new HomeContent();
        $home_content->title = $request->get('title');
        $home_content->sub_title = $request->get('sub_title');

        if ($home_content->save()) {
            if ($image = Input::file('slider_image')) {
//                dd($image);
                Image::make($image)
                    ->save(public_path() . '/images/slides/' . $home_content->id . '.jpg');

            }
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $home_content = HomeContent::find($id);
        $home_contents = HomeContent::all();
        return view('control-panel.home-contents.edit', compact('home_content', 'home_contents'));
    }

    public function Update(Request $request, $id)
    {
        try {
            $home_content = HomeContent::find($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('The Item was not found');
            return redirect()->back();
        }

        $home_content->title = $request->get('title');
        $home_content->sub_title = $request->get('sub_title');

        if ($home_content->update()) {
            if ($image = Input::file('slider_image')) {
                Image::make($image)
                    ->save(public_path() . '/images/slides/' . $home_content->id . '.jpg');
            }
        }

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $menu_item = HomeContent::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        if ($menu_item->delete()) {
            if (file_exists(public_path() . '/images/slides/' . $id . '.jpg')) {
                unlink(public_path() . '/images/slides/' . $id . '.jpg');
            }

            $request->session()->flash('global', "Record deleted successfully");

        }

        return redirect()->back();
    }
}
