<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\HomeController@index');
Route::get('/news', 'Frontend\NewController@index');
Route::get('/news/detail', 'Frontend\NewController@detail');
Route::get('/product', 'Frontend\ProductController@index');
Route::get('/garden', 'Frontend\GargenController@index');
Route::get('/about-us', 'Frontend\AboutusController@index');
Route::get('/contact', 'Frontend\ContactController@index');
Route::get('/career', 'Frontend\CareerController@index');



// admin

Route::prefix('_admin')->name('admin.')->group(function () {
    Route::get('login', 'Backend\AuthController@index')->name('login');
    Route::post('login', 'Backend\AuthController@post')->name('login');

    Route::resource('news', 'Backend\ArticalController');

    Route::get('test', function () {
            return view('backend.test');
    });
});







