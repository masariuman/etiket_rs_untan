<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutePemberianController extends Controller
{
    public function dataRutePemberian() {
        $rutepemberian = \DB::table('rute_pemberian')->get();

        return view('beken.rutepemberian', compact('rutepemberian'));
    }

    public function tambahRutePemberian(Request $request) {
        $tambahrutepemberian = \DB::table('rute_pemberian')->insert([
            'nama_rute_pemberian' => $request->nama_rute_pemberian,
        ]);

        return back();
    }

    public function editRutePemberian(Request $request, $id) {
        $editrutepemberian = \DB::table('rute_pemberian')->where('id', $id)->update([
            'nama_rute_pemberian' => $request->nama_rute_pemberian,
        ]);

        return back();
    }

    public function hapusRutePemberian(Request $request, $id) {
        $hapusrutepemberian = \DB::table('rute_pemberian')->where('id', $id)->delete(); 

        return back();
    }
}
