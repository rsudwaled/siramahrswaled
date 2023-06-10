<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{
    public function jadwal_rawat_jalan(Request $request)
    {
        $jadwals = null;
        if ($request->hari) {
            $url = "http://103.158.96.141/siramah/api/jadwal_by_hari?hari=" . $request->hari;
            $res = Http::get($url);
            if ($res->successful()) {
                $res = json_decode($res->body());
                $message = $res->metadata->message;
                if ($res->metadata->code == 200) {
                    $jadwals = $res->response;
                    Alert::success('Success', 'Jadwal dokter berhasil ditemukan');
                } else {
                    Alert::error('Error', $message);
                }
            }
        }
        return view('jadwal_rawat_jalan', compact(['request', 'jadwals']));
    }
}
