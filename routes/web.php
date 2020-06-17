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

use App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('gallery', 'GalleryController@index');
Route::post('upload-gambar', 'GalleryController@prosesUpload');

Route::get('/session', 'SessionController@index');
Route::get('/create-session', 'SessionController@createSession');
Route::get('/get-session', 'SessionController@getSession');
Route::get('/delete-session', 'SessionController@deleteSession');


Route::get('/', 'AdminController@login');
Route::post('/login', 'AdminController@prosesLogin');
Route::get('/data-produk', 'AdminController@dataProduk')->middleware('login');
Route::get('/data-kategori', 'AdminController@dataKategori');
Route::get('/logout', 'AdminController@logout');