<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ObatController extends Controller
{
    public function dataObat() {
        
        $obat = \DB::table('obat')->get();

        return view('beken.obat', compact('obat'));
    }


    public function tambahObat(Request $request) {

        $tambahobat = \DB::table('obat')->insert([
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
        ]);

     return back();
    }

    public function editObat(Request $request, $id) {

        $editobat = \DB::table('obat')->where('id', $id)->update([
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
        ]);

     return back();
    }

    public function hapusObat(Request $request, $id) {

       $hapusobat = \DB::table('obat')->where('id', $id)->delete();

       return back();
    }


    public function stokObat() {
        
        $obats = \DB::table('obat')->get();

        return view('beken.stok', compact('obats'));
    }



}
