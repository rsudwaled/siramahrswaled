<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

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
        $url = "http://103.158.96.141/siramah/api/cekKodebooking?kodebooking=" . $request->kodebooking;
        $res = Http::get($url);
        $antrian = null;
        if ($res->successful()) {
            $res = json_decode($res->body());
            if ($res->metadata->code == 200) {
                $antrian = $res->response;
                Alert::success('Success','Kodebooking berhasil ditemukan');
            } else {
                Alert::success('Success','Kodebooking berhasil ditemukan');

            }
        } else {
            Alert::success('Success','Kodebooking berhasil ditemukan');

        }
        return view('check_antrian', compact(['request', 'antrian']));
    }
}
