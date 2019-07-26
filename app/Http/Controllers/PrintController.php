<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Label;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function generatePDF()

    {
        $label = Label::all();
        // $data = ['title' => 'Welcome to belajarphp.net'];
        $data['label'] = $label;
        $data['today'] = date('d/m/Y');

        $pdf = PDF::loadView('print', $data);
        return $pdf->stream();
        // return $pdf->download('laporan-pdf.pdf');
    }


    public function templet()

    {
        $label = Label::all();
        $data = ['title' => 'Welcome to belajarphp.net'];
        $data['label'] = $label;
        $data['today'] = date('d/m/Y');

        $pdf = PDF::loadView('print', $data);
        // return $pdf->stream();
        return view('print', $data);
        // return $pdf->download('laporan-pdf.pdf');
    }
}
