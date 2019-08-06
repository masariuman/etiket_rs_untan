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

// Route::get('/', function () {
//     return view('beken/dashboard');
// });


Route::get('print','PrintController@generatePDF')->name('cetak');

Route::get('cetak/{data}','PrintController@cetak')->name('toAnotherController');

Route::get('templet','PrintController@templet');

Route::get('/', 'LabelController@dataLabel')->name('label');
Route::get('labelobatluar', 'LabelController@dataLabelObatLuar')->name('labelObatLuar');
Route::post('tambah_label', 'LabelController@tambahLabel')->name('tambahLabel');
Route::post('tambah_label_obat_luar', 'LabelController@tambahLabelObatLuar')->name('tambahLabelObatLuar');

Route::get('obat', 'ObatController@dataObat')->name('obat');
Route::post('tambah_obat', 'ObatController@tambahObat')->name('tambahObat');
Route::patch('edit_obat/{id}', 'ObatController@editObat')->name('editObat');
Route::delete('hapus_obat/{id}', 'ObatController@hapusObat')->name('hapusObat');

Route::get('rutepemberian', 'RutePemberianController@dataRutePemberian')->name('rutePemberian');
Route::post('tambah_rutepemberian', 'RutePemberianController@tambahRutePemberian')->name('tambahRutePemberian');
Route::patch('edit_rutepemberian/{id}', 'RutePemberianController@hapusRutePemberian')->name('editRutePemberian');
Route::delete('hapus_rutepemberian/{id}', 'RutePemberianController@hapusRutePemberian')->name('hapusRutePemberian');

Route::get('satuanobat', 'SatuanObatController@dataSatuanObat')->name('satuanObat');
Route::post('tambah_satuanobat', 'SatuanObatController@tambahSatuanObat')->name('tambahSatuanObat');
Route::patch('edit_satuanobat/{id}', 'SatuanObatController@editSatuanObat')->name('editSatuanObat');
Route::delete('hapus_satuanobat/{id}', 'SatuanObatController@hapusSatuanObat')->name('hapusSatuanObat');

Route::get('perjam', 'PerJamController@dataPerJam')->name('perJam');
Route::post('tambah_perjam', 'PerJamController@tambahPerJam')->name('tambahPerJam');
Route::patch('edit_perjam/{id}', 'PerJamController@editPerjam')->name('editPerJam');
Route::delete('hapus_perjam/{id}', 'PerJamController@hapusPerJam')->name('hapusPerJam');

Route::get('maxpemberian', 'MaxPemberianController@dataMaxPemberian')->name('maxPemberian');
Route::post('tambah_maxpemberian', 'MaxPemberianController@tambahMaxPemberian')->name('tambahMaxPemberian');
Route::patch('edit_maxpemberian/{id}', 'MaxPemberianController@editMaxPemberian')->name('editMaxPemberian');
Route::delete('hapus_maxpemberian/{id}', 'MaxPemberianController@hapusMaxPemberian')->name('hapusMaxPemberian');

Route::get('aturanminum', 'AturanMinumController@dataAturanMinum')->name('aturanMinum');
Route::post('tambah_aturanminum', 'AturanMinumController@tambahAturanMinum')->name('tambahAturanMinum');
Route::patch('edit_aturanminum/{id}', 'AturanMinumController@editAturanMinum')->name('editAturanMinum');
Route::delete('hapus_aturanminum/{id}', 'AturanMinumController@hapusAturanMinum')->name('hapusAturanMinum');

