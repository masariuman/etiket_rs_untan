<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class LabelController extends Controller
{
    public function dataLabel() {

        $obat = \DB::table('obat')->get();
        $rutepemberian = \DB::table('rute_pemberian')->get();
        $satuanobat = \DB::table('satuan_obat')->get();
        $perjam = \DB::table('per_jam')->get();
        $maxpemberian = \DB::table('max_pemberian')->get();
        $aturanminum = \DB::table('aturan_minum')->get();

        return view('beken.label', compact('obat', 'rutepemberian', 'satuanobat', 'perjam', 'maxpemberian', 'aturanminum'));

    }

    public function tambahLabel(Request $request) {


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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return back();

    }
}
