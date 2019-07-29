<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use DB;

class ObatController extends Controller
{
    public function dataObat() {
        
        $obats = DB::table('obat')->get();

        return view('beken.obat', compact('obats'));
    }


    public function tambahObat(Request $request) {

        $tambahObat = DB::table('obat')->insert([
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
        ]);

        // $tambahObat->save();

        return $tambahObat;
    }

    public function stokObat() {
        
        $obats = DB::table('obat')->get();

        return view('beken.stok', compact('obats'));
    }



}
