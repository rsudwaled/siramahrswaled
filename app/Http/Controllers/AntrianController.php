<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AntrianController extends Controller
{
    public function daftar(Request $request)
    {

        // $res = Http::get($url);
        // $polikliniks = json_decode($res->body())->response ;
        return view('daftar', compact(['request']));
    }
    public function check_antrian(Request $request)
    {
        // $url = "http://sim.rsudwaled.id/siramah/api/poliklinik_aktif";
        // $res = Http::get($url);
        // $polikliniks = json_decode($res->body())->response ;
        return view('check_antrian', compact(['request']));
    }

}
