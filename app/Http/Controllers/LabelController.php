<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Label;

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






//
    public function dataLabelObatLuar() {

        $obat = \DB::table('obat')->get();
        $rutepemberian = \DB::table('rute_pemberian')->get();
        $satuanobat = \DB::table('satuan_obat')->get();
        $perjam = \DB::table('per_jam')->get();
        $maxpemberian = \DB::table('max_pemberian')->get();
        $aturanminum = \DB::table('aturan_minum')->get();

        return view('beken.labelobatluar', compact('obat', 'rutepemberian', 'satuanobat', 'perjam', 'maxpemberian', 'aturanminum'));

    }


    public function tambahLabelObatLuar(Request $request) {




    foreach($request->rows as $rows) {
            $tambahLabel = \DB::table('label_obat_luar')->insert([
                'mr' => $request->mr,
                'nama' => $request->nama,
                'obat' => $rows['obat'],
                'indikasi' => $rows['indikasi'],
                'rute_pemberian' => $rows['rute_pemberian'],
                'x_sehari' => $rows['x_sehari'],
                'per_jam' => $rows['per_jam'],
                'note_x' => $rows['note_x'],
                'note' => $rows['note'],
                'ed' => $rows['ed'],
                'jumlah' => $rows['jumlah'],
                'jumlah_jenis' => $rows['jumlah_jenis'],
                'nomor_urut_input' => $request->input('mr', $request->mr),
            ]);

        }

            return redirect()->route('cetak_biru');

        // return back();


    }
}
