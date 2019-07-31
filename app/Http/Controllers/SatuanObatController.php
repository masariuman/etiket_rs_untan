<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuanObatController extends Controller
{
    public function dataSatuanObat() {
        $satuanobats = \DB::table('satuan_obat')->get();

        return view('beken.satuanobat', compact('satuanobats'));

    }

    public function tambahSatuanObat(Request $request) {
        $tambahsatuanobat = \DB::table('satuan_obat')->insert([
            'nama_satuan_obat' => $request->nama_satuan_obat,
        ]);

        return back();
    }
}
