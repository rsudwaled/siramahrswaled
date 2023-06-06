<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AntrianController extends Controller
{
    public function daftar(Request $request)
    {
        $url = "http://sim.rsudwaled.id/siramah/api/poliklinik_all";
        $res = Http::get($url);
        return view('daftar');
    }
}
