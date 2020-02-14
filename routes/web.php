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

Route::get('/', 'MasterController@master');

/*Kotak saran */
Route::post('/user/saran', 'MasterController@saranUsers');

Route::get('/admin/login', 'AuthController@login')->name("login");
Route::post('/adminlogin', 'AuthController@adminlogin');
Route::get('/logout', 'AuthController@logout');

//Admin
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/kotak/saran', 'DashboardController@kotakSaran')->name('kotak_saran');
    
});

    

/*Controller kategori*/
Route::get('/kategori', 'KategoriController@index')->name("kategori");


/* smartphone */
Route::prefix('/')->group(function(){
    Route::get('/kategori/smartphone', 'SmartphoneController@index')->name("kategori_smartphone");
    Route::post('/post/smartphone', 'SmartphoneController@create');
    Route::get('/smartphone/{id}/detail', 'SmartphoneController@detail')->name("detail.produk");
    Route::get('/smartphone/{id}/delete', 'DashboardController@deleteSmartphone');
});

/* Laptop */
Route::prefix('/')->group(function(){
    Route::get('/kategori/laptop', 'LaptopController@index')->name("kategori_laptop");
    Route::post('/post/laptop', 'LaptopController@create');
    Route::get('/laptop/{id}/detail', 'LaptopController@detail')->name("detail.produk");
    Route::get('/laptop/{id}/delete', 'DashboardController@deleteLaptop');
});


/* Tentang web kami */
Route::get('/tentang', 'TentangController@index')->name('about.page');
