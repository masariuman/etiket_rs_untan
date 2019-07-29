<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index() {

    }

    public function tambahLabel(Request $request) {

        // $mr = \DB::table('labels')->where('mr')->first();

        $tambahLabel = \DB::table('labels')->insert([
            'mr' => $request->mr,
            'nama' => $request->nama,
            'obat' => $request->obat,
            'indikasi' => $request->indikasi,
            'rute_pemberian' => $request->rute_pemberian,
            'aturan_pakai' => $request->aturan_pakai,
            'aturan_pakai2' => $request->aturan_pakai2,
            'aturan_pakai3' => $request->aturan_pakai3,
            'sebelum_sesudah' => $request->sebelum_sesudah,
            'maksimal' => $request->maksimal,
            'ed' => $request->ed,
            'jumlah' => $request->jumlah,
            'bentukobat' => $request->bentukobat,
            'nomor_urut_input' => $request->input('mr', $request->mr),
        ]);

        return back();

    }
}
