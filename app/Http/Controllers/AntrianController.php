<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function daftar(Request $request)
    {
        return view('daftar');
    }
}
