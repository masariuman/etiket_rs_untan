<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class LabelController extends Controller
{
    public function dataLabel() {

        $obats = \DB::table('obat')->get();
        $rutepemberians = \DB::table('rute_pemberian')->get();
        $satuanobats = \DB::table('satuan_obat')->get();
        $perjams = \DB::table('per_jam')->get();
        $maxpemberians = \DB::table('max_pemberian')->get();
        $aturanminums = \DB::table('aturan_minum')->get();

        return view('beken.label', compact('obats', 'rutepemberians', 'satuanobats', 'perjams', 'maxpemberians', 'aturanminums'));

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
