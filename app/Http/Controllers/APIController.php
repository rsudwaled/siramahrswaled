<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public $baseurl = "http://103.158.96.141/siramah/api/";

    public function cari_pasien(Request $request)
    {
        $url = $this->baseurl . 'cari_pasien?search=' . $request->search;
        $res = Http::get($url);
        return json_decode($res);
    }
    public function poliklinik_aktif(Request $request)
    {
        $url = $this->baseurl . 'poliklinik_aktif';
        $res = Http::get($url);
        return json_decode($res);
    }
    public function cari_jadwal_dokter(Request $request)
    {
        $url = $this->baseurl . 'cari_jadwal_dokter';
        $res = Http::get($url, [
            'kodepoli' => $request->kodepoli,
            'tanggal' => $request->tanggal,
        ]);
        return json_decode($res);
    }
    public function ambil_antrian(Request $request)
    {
        $url = $this->baseurl . 'antrian/ambil_antrian';
        $res = Http::post($url, $request->all());
        return json_decode($res);
    }
    public function batal_antrian(Request $request)
    {
        $url = $this->baseurl . 'antrian/batal_antrian';
        $res = Http::post($url, $request->all());
        return json_decode($res);
    }
    public function rujukan_peserta(Request $request)
    {
        $rujukans = null;
        $url = $this->baseurl . 'vclaim/rujukan_peserta';
        $res = Http::get($url, $request->all());
        $res  = (json_decode($res));
        $code = $res->metadata->code;
        if ($code == 200) {
            $rujukanx = $res->response->rujukan;
            foreach ($rujukanx as $item) {
                if (Carbon::parse($item->tglKunjungan)->diffInDays(now()) < 90) {
                    $rujukans[] = $item;
                }
            }
            if ($rujukans) {
                $response = [
                    'response' => $rujukans,
                    'metadata' => [
                        'message' => 'OK',
                        'code' => 200,
                    ],
                ];
                return json_decode(json_encode($response));
            }
        } else {
            return $res;
        }
    }
    public function rujukan_rs_peserta(Request $request)
    {
        $url = $this->baseurl . 'vclaim/rujukan_rs_peserta';
        $res = Http::get($url, $request->all());
        $res  = (json_decode($res));
        $code = $res->metadata->code;
        if ($code == 200) {
            $rujukanx = $res->response->rujukan;
            foreach ($rujukanx as $item) {
                if (Carbon::parse($item->tglKunjungan)->diffInDays(now()) < 90) {
                    $rujukans[] = $item;
                }
            }
            if ($rujukans) {
                $response = [
                    'response' => $rujukans,
                    'metadata' => [
                        'message' => 'OK',
                        'code' => 200,
                    ],
                ];
                return json_decode(json_encode($response));
            }
        } else {
            return $res;
        }
    }
    public function suratkontrol_peserta(Request $request)
    {
        $url = $this->baseurl . 'vclaim/suratkontrol_peserta';
        $res = Http::get($url, $request->all());
        return json_decode($res);
    }
}
