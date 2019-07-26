<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtiketController extends Controller
{
    public function index() {

        return view('etiket');
    }
}
