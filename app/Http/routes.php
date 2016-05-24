<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $menu_categories = \App\MenuCategory::all();
    return view('index', compact('menu_categories'));
});

Route::group(['prefix' => 'control-panel'], function () {

    Route::get('/', function () {
        return view('control-panel.welcome');
    });


    Route::resource('/about-us', 'AboutController');
    Route::resource('menu-categories', 'MenuCategoriesController');
    Route::resource('menu-items', 'MenuItemsController');

});