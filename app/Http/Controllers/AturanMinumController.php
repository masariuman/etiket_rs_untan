<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AturanMinumController extends Controller
{
    public function dataAturanMinum() {
        $aturanminums = \DB::table('aturan_minum')->get();

        return view('beken.aturanminum', compact('aturanminums'));
    }

    public function tambahAturanMinum(Request $request) {
        $tambahaturanminum = \DB::table('aturan_minum')->insert([
            'nama_aturan_minum' => $request->nama_aturan_minum,
        ]);

        return back();
    }
}
