<?php

namespace App\Http\Controllers;

use App\MenuCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class MenuCategoriesController extends Controller
{
    public function index()
    {
//        dd('hello');
        $menu_categories = MenuCategory::all();
        return view('control-panel.menu-categories.index', compact('menu_categories'));
    }


    public function store(Request $request)
    {
//        dd($request);
        $menu_category = new MenuCategory();
        //$this->validator();
        $menu_category->menu_category = $request['menu_category'];
        $menu_category->save();



        return redirect()->back();
    }

    public function edit($id)
    {
        $menu_category = MenuCategory::find($id);
        $menu_categories = MenuCategory::all();
        return view('control-panel.menu-categories.edit', compact('menu_category', 'menu_categories'));
    }

    public function update(Request $request, $id)
    {
        $menu_category = MenuCategory::find($id);
        $menu_category->menu_category = $request['menu_category'];
        $menu_category->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = MenuCategory::findOrFail($id);
        $category->delete();

        return redirect()->back();
    }

    private function getMenuCategories()
    {
        return $menu_categories = MenuCategory::all();
    }
}
