<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutePemberianController extends Controller
{
    public function dataRutePemberian() {
        $rutepemberians = \DB::table('rute_pemberian')->get();

        return view('beken.rutepemberian', compact('rutepemberians'));
    }

    public function tambahRutePemberian(Request $request) {
        $tambahrutepemberian = \DB::table('rute_pemberian')->insert([
            'nama_rute_pemberian' => $request->nama_rute_pemberian,
        ]);

        return back();
    }
}
