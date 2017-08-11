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
    $home_contents = \App\HomeContent::all();
    $gallery_images = \App\GalleryImage::all();
    $about = \App\About::findorFail(1);
    $contact = \App\contact::findorFail(1);

    return view('index', compact
    (
        'menu_categories',
        'home_contents',
        'gallery_images',
        'about',
        'contact'
    ));
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'control-panel'], function () {

    Route::get('/', function () {
        return view('control-panel.welcome');
    });


    Route::resource('/about-us', 'AboutController');
    Route::resource('/contact', 'ContactsController');
    Route::resource('menu-categories', 'MenuCategoriesController');
    Route::resource('menu-items', 'MenuItemsController');
    Route::resource('home-contents', 'HomeContentsController');
    Route::resource('gallery-images', 'GalleryController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
