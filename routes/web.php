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

Route::get('/', function () {
    return view('beken/dashboard');
});

Route::get('label', function () {
    return view('beken/label');
});

Route::get('obat', function () {
    return view('beken/obat');
});

Route::get('stok', function () {
    return view('beken/stok');
});

Route::get('etiket', 'EtiketController@index');


Route::get('print','PrintController@generatePDF');


Route::get('templet','PrintController@templet');


Route::get('obat', 'ObatController@dataObat');

Route::post('tambahObat', 'ObatController@tambahObat')->name('tambahObat');

Route::get('stok', 'ObatController@stokObat');