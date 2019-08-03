<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuanObatController extends Controller
{
    public function dataSatuanObat() {
        $satuanobat = \DB::table('satuan_obat')->get();

        return view('beken.satuanobat', compact('satuanobat'));

    }

    public function tambahSatuanObat(Request $request) {
        $tambahsatuanobat = \DB::table('satuan_obat')->insert([
            'nama_satuan_obat' => $request->nama_satuan_obat,
        ]);

        \Session::flash('Berhasil', 'Data satuan obat berhasil ditambahkan');

        return back();
    }

    public function editSatuanObat(Request $request, $id) {
        $editsatuanobat = \DB::table('satuan_obat')->where('id', $id)->update([
            'nama_satuan_obat' =>$request->nama_satuan_obat,
        ]);

        \Session::flash('Berhasil', 'Data satuan obat berhasil diubah');

        return back();
    }

    public function hapusSatuanObat(Request $request, $id) {
        $hapussatuanobat = \DB::table('satuan_obat')->where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data satuan obat berhasil dihapus');

        return back();
    }
}
