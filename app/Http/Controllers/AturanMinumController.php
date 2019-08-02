<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AturanMinumController extends Controller
{
    public function dataAturanMinum() {
        $aturanminum = \DB::table('aturan_minum')->get();

        return view('beken.aturanminum', compact('aturanminum'));
    }

    public function tambahAturanMinum(Request $request) {
        $tambahaturanminum = \DB::table('aturan_minum')->insert([
            'nama_aturan_minum' => $request->nama_aturan_minum,
        ]);

        return back();
    }

    public function editAturanMinum(Request $request, $id) {
        $editaturanminum = \DB::table('aturan_minum')->where('id', $id)->update([
            'nama_aturan_minum' => $request->nama_aturan_minum,
        ]);

        return back();
    }

    public function hapusAturanMinum(Request $request, $id) {
        $hapusaturanminum = \DB::table('aturan_minum')->where('id', $id)->delete();

        return back();
    }
}
