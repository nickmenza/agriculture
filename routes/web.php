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
Route::get('/news/{id}/{name}', 'Frontend\NewController@detail');
Route::get('/product', 'Frontend\ProductController@index');
Route::get('/product/{id}/{name}', 'Frontend\ProductController@detail');

Route::get('/garden', 'Frontend\GargenController@index');
Route::get('/garden/{id}/{name}', 'Frontend\GargenController@detail');

Route::get('/agriculturist', 'Frontend\AgController@index');

Route::get('/location', 'Frontend\LocationController@index');

Route::get('/about-us', 'Frontend\AboutusController@index');
Route::get('/contact', 'Frontend\ContactController@index');
Route::post('/contact', 'Frontend\ContactController@post');

Route::get('/career', 'Frontend\CareerController@index');



// admin

Route::prefix('_admin')->name('admin.')->group(function () {
    Route::get('', function(){
        return redirect('_admin/login');
    });
    Route::get('login', 'Backend\AuthController@index')->name('login');
    Route::post('login', 'Backend\AuthController@post')->name('login');
    Route::get('logout', 'Backend\AuthController@logout')->name('logout');

    Route::group(['middleware' => ['admin']], function() {
        Route::resource('banner', 'Backend\BannerController');
        Route::resource('article', 'Backend\ArticleController');
        Route::resource('products', 'Backend\ProductController');
        Route::resource('location', 'Backend\LocationController');
        Route::resource('career', 'Backend\CareerController');
        Route::resource('contact', 'Backend\ContactController');

        Route::get('test', function () {
                return view('backend.test');
        });
    });
});







