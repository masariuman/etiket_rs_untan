<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerJamController extends Controller
{
    public function dataPerJam() {
        $perjams = \DB::table('per_jam')->get();

        return view('beken.perjam', compact('perjams'));
    }

    public function tambahPerjam(Request $request) {
        $tambahperjam = \DB::table('per_jam')->insert([
            'nama_per_jam' => $request->nama_per_jam,
        ]);

        return back();
    }
}
