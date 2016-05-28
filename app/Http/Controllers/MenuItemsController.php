<?php

namespace App\Http\Controllers;

use App\MenuItem;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class MenuItemsController extends Controller
{

    private $messages;

    public function __construct()
    {
        $this->messages = [];
    }

    public function index()
    {
        $menu_items = MenuItem::all();
        return view('control-panel.menu-items.index', compact('menu_items'));
    }

    public function store(Request $request)
    {

        $menu_item = new MenuItem();
        $menu_item->menu_category_id = $request->get('menu_category_id');
        $menu_item->item = $request->get('item');
        $menu_item->description = $request->get('description');
        $menu_item->price = $request->get('price');

        if ($menu_item->save()) {
            if ($image = Input::file('image')) {
                Image::make($image)
                    ->resize(100, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path() . '/images/menu/' . $menu_item->id . '.jpg');
            }
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        try {
            $menu_item = MenuItem::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect()->back();
        }
        $menu_items = MenuItem::all();
        return view('control-panel.menu-items.edit', compact('menu_item', 'menu_items'));
    }

    public function update(Request $request, $id)
    {
        $menu_item = MenuItem::find($id);
        $menu_item->item = $request->get('item');
        $menu_item->menu_category_id = $request->get('menu_category_id');
        $menu_item->description = $request->get('description');
        $menu_item->price = $request->get('price');

        if ($menu_item->update()) {
            if ($image = Input::file('image')) {
                Image::make($image)
                    ->resize(100, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path() . '/images/menu/' . $menu_item->id . '.jpg');
            }
        }

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $menu_item = MenuItem::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        if ($menu_item->delete()) {
            if (file_exists(public_path() . '/images/menu/' . $id . '.jpg')) {
                unlink(public_path() . '/images/menu/' . $id . '.jpg');
            }

            $request->session()->flash('global', "Record deleted successfully");

        }

        return redirect()->back();
    }
}
