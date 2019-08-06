<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Label;

class LabelController extends Controller
{
    public function index() {

    }

    public function tambahLabel(Request $request) {

        // $mr = \DB::table('labels')->where('mr')->first();
    foreach($request->rows as $rows) {
            $tambahLabel = \DB::table('labels')->insert([
                'mr' => $request->mr,
                'nama' => $request->nama,
                'obat' => $rows['obat'],
                'indikasi' => $rows['indikasi'],
                'rute_pemberian' => $rows['rute_pemberian'],
                'aturan_pakai' => $rows['aturan_pakai'],
                'aturan_pakai2' => $rows['aturan_pakai2'],
                'aturan_pakai3' => $rows['aturan_pakai3'],
                'sebelum_sesudah' => $rows['sebelum_sesudah'],
                'maksimal' => $rows['maksimal'],
                'ed' => $rows['ed'],
                'jumlah' => $rows['jumlah'],
                'bentukobat' => $rows['bentukobat'],
                'nomor_urut_input' => $request->input('mr', $request->mr),
            ]);
            // dd($rows['obat']);
        }
        // $label = Label::where('id',1)->get();
        // $count = count($label);
        // $data = ['title' => 'Welcome to belajarphp.net'];
        // $label = $request;
        // $data['label'] = $label;
        // $data['count'] = $count;
        // $data['today'] = date('d/m/Y');

        // $pdf = PDF::loadView('print', $data)->setPaper([0,0,141.732,170.079], 'landscape');
        // return $pdf->stream();
            // dd($request);
            // return view('print', $data);
            return redirect()->route('cetak');

        // return back();

    }
}
