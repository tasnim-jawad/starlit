<?php

/*
|--------------------------------------------------------------------------
| frontend Routes
|--------------------------------------------------------------------------
|
*/
use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/../app/Modules/Routes/FrontendRoutes.php';

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

require_once __DIR__ . '/../app/Modules/Routes/BackendRoutes.php';

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
*/

require_once __DIR__ . '/test.php';
/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => '',
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/', 'FrontendController\HomeController@index')->name('home');
    Route::get('/about', 'FrontendController\AboutController@index')->name('about');

    Route::get('/properties', 'FrontendController\PropertiesController@index')->name('properties');
    Route::get('/properties/luxury', 'FrontendController\PropertiesController@luxury')->name('properties.luxury');
    Route::get('/properties/comercial', 'FrontendController\PropertiesController@comercial')->name('properties.comercial');
    Route::get('/properties/classic', 'FrontendController\PropertiesController@classic')->name('properties.classic');
    Route::get('/properties/wellness', 'FrontendController\PropertiesController@wellness')->name('properties.wellness');
    Route::get('/properties/onging', 'FrontendController\PropertiesController@ongoing')->name('properties.ongoing');
    Route::get('/properties/upcoming', 'FrontendController\PropertiesController@upcoming')->name('properties.upcoming');
    Route::get('/properties/completed', 'FrontendController\PropertiesController@completed')->name('properties.completed');
    Route::get('/properties/details', 'FrontendController\PropertiesController@details')->name('properties_details');

    Route::get('/gallery', 'FrontendController\GalleryController@index')->name('gallery');
    Route::get('/gallery/image', 'FrontendController\GalleryController@image')->name('gallery.image');
    Route::get('/gallery/video', 'FrontendController\GalleryController@video')->name('gallery.video');

    Route::get('/news', 'FrontendController\NewsController@index')->name('news');
    Route::get('/news/details', 'FrontendController\NewsController@news_details')->name('news_details');

    Route::get('/contact', 'FrontendController\ContactController@index')->name('contact');
});
