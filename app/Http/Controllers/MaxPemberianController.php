<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxPemberianController extends Controller
{
    public function dataMaxPemberian() {
        $maxpemberian = \DB::table('max_pemberian')->get();

        return view('beken.maxpemberian', compact('maxpemberian'));
    }

    public function tambahMaxPemberian(Request $request) {
        $tambahmaxpemberian = \DB::table('max_pemberian')->insert([
            'nama_max_pemberian' => $request->nama_max_pemberian,
        ]);

        return back();
    }

    public function editMaxPemberian(Request $request, $id) {
        $editmaxpemberian = \DB::table('max_pemberian')->where('id', $id)->update([
            'nama_max_pemberian' => $request->nama_max_pemberian,
        ]);

        return back();
    }

    public function hapusMaxPemberian(Request $request, $id) {
        $hapusmaxpemberian = \DB::table('max_pemberian')->where('id', $id)->delete();

        return back();
    }
}
