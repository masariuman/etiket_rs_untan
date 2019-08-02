<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerJamController extends Controller
{
    public function dataPerJam() {
        $perjam = \DB::table('per_jam')->get();

        return view('beken.perjam', compact('perjam'));
    }

    public function tambahPerJam(Request $request) {
        $tambahperjam = \DB::table('per_jam')->insert([
            'nama_per_jam' => $request->nama_per_jam,
        ]);

        return back();
    }

    public function editPerJam(Request $request, $id) {
        $editPerJam = \DB::table('per_jam')->where('id', $id)->update([
            'nama_per_jam' => $request->nama_per_jam,
        ]);

        return back();

    }

    public function hapusPerJam(Request $request, $id) {
        $hapusPerJam = \DB::table('per_jam')->where('id', $id)->delete();

        return back();
    }
}
