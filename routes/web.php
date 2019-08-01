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


Route::get('print','PrintController@generatePDF');

Route::get('templet','PrintController@templet');

Route::get('label', 'LabelController@dataLabel')->name('label');
Route::post('tambah_label', 'LabelController@tambahLabel')->name('tambahLabel');

Route::get('obat', 'ObatController@dataObat')->name('obat');
Route::post('tambah_obat', 'ObatController@tambahObat')->name('tambahObat');
Route::post('edit_obat/{id}', 'ObatController@editObat')->name('editObat');
Route::post('hapus_obat/{id}', 'ObatControlker@hapusObat')->name('hapusObat');

Route::get('rutepemberian', 'RutePemberianController@dataRutePemberian')->name('rutePemberian');
Route::post('tambah_rutepemberian', 'RutePemberianController@tambahRutePemberian')->name('tambahRutePemberian');

Route::get('satuanobat', 'SatuanObatController@dataSatuanObat')->name('satuanObat');
Route::post('tambah_satuanobat', 'SatuanObatController@tambahSatuanObat')->name('tambahSatuanObat');

Route::get('perjam', 'PerJamController@dataPerJam')->name('perJam');
Route::post('tambah_perjam', 'PerJamController@tambahPerJam')->name('tambahPerJam');

Route::get('maxpemberian', 'MaxPemberianController@dataMaxPemberian')->name('maxPemberian');
Route::post('tambah_maxpemberian', 'MaxPemberianController@tambahMaxPemberian')->name('tambahMaxPemberian');

Route::get('aturanminum', 'AturanMinumController@dataAturanMinum')->name('aturanMinum');
Route::post('tambah_aturanminum', 'AturanMinumController@tambahAturanMinum')->name('tambahAturanMinum');
Route::post('edit_aturanminum', 'AturanMinumController@editAturanMinum')->name('editAturanMinum');
Route::post('hapus_aturanminum', 'AturanMinumController@hapusAturanMinum')->name('hapusAturanMinum');

