<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxPemberianController extends Controller
{
    public function dataMaxPemberian() {
        $maxPemberians = \DB::table('max_pemberian')->get();

        return view('beken.maxpemberian', compact('maxpemberians'));
    }

    public function tambahMaxPemberian(Request $request) {
        $tambahMaxPemberian = \DB::table('max_pemberian')->insert([
            'nama_max_pemberian' => $request->nama_max_pemberian,
        ]);

        return back();
    }

    public function editMaxPemberian(Request $request, $id) {
        $editMaxPemberian = \DB::table('max_pemberian')->where('id', $id)->update([
            'nama_max_pemberian' => $request->nama_max_pemberian,
        ]);

        return back();
    }

    public function hapusMaxPemberian(Request $request, $id) {
        $hapusMaxPemberian = \DB::table('max_pemberian')->where('id', $id)->delete();

        return back();
    }
}
