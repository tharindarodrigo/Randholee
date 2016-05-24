<?php

namespace App\Http\Controllers;

use App\MenuItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Image;

class MenuItemsController extends Controller
{
    public function index()
    {
        $menu_items = MenuItem::all();
//        dd($menu_items);
        return view('control-panel.menu-items.index', compact('menu_items'));
    }

    public function store(Request $request)
    {
        $menu_item = new MenuItem();
        //$this->validator();
        $menu_item->menu_category_id = $request['menu_category_id'];
        $menu_item->item = $request['item'];
        $menu_item->description = $request['description'];
        $menu_item->price = $request['price'];
        $image = new Image();

        if ($menu_item->save()) {
            $image->make($request->file('image'))->save(public_path().'/images/menu/item.jpg');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $menu_item = MenuItem::find($id);
        $menu_items = MenuItem::all();
        return view('control-panel.menu-items.edit', compact('menu_item', 'menu_items'));
    }

    public function update(Request $request, $id)
    {
        $menu_item = MenuItem::find($id);
        $menu_item->item = $request['item'];
        $menu_item->menu_category_id = $request['menu_category_id'];
        $menu_item->description = $request['description'];
        $menu_item->price = $request['price'];


        $menu_item->update();

        return redirect()->back();
    }
}
