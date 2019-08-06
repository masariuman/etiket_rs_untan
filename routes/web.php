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


Route::get('print','PrintController@generatePDF')->name('cetak');

Route::get('cetak/{data}','PrintController@cetak')->name('toAnotherController');

Route::get('templet','PrintController@templet');

Route::get('stok', 'ObatController@stokObat');

Route::get('obat', 'ObatController@dataObat');

Route::post('tambah_obat', 'ObatController@tambahObat')->name('tambahObat');
Route::post('edit_obat/{id}', 'ObatController@editObat')->name('editObat');
Route::post('hapus_obat/{id}', 'ObatControlker@hapusObat')->name('hapusObat');

Route::post('tambah_label', 'LabelController@tambahLabel')->name('tambahLabel');

