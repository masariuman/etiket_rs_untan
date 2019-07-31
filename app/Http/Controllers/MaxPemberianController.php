<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxPemberianController extends Controller
{
    public function dataMaxPemberian() {
        $maxpemberians = \DB::table('max_pemberian')->get();

        return view('beken.maxpemberian', compact('maxpemberians'));
    }

    public function tambahMaxPemberian(Request $request) {
        $tambahmaxpemberian = \DB::table('max_pemberian')->insert([
            'nama_max_pemberian' => $request->nama_max_pemberian,
        ]);

        return back();
    }
}
