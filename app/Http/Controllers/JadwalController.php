<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal_rawat_jalan(Request $request)
    {
        $antrian = null;
        if ($request->kodebooking) {
            $url = "http://103.158.96.141/siramah/api/cekKodebooking?kodebooking=" . $request->kodebooking;
            $res = Http::get($url);
            if ($res->successful()) {
                $res = json_decode($res->body());
                $message = $res->metadata->message;

                if ($res->metadata->code == 200) {
                    $antrian = $res->response;
                    Alert::success('Success','Kodebooking berhasil ditemukan');
                }else{
                    Alert::error('Error',$message);
                }
            }
        }
        return view('check_antrian', compact(['request', 'antrian']));
    }

}
