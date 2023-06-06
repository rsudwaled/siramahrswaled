<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public $baseurl = "http://simrs.rsudwaled.id/siramah/api/";

    public function cekPasien(Request $request)
    {
        # code...
        $url = $this->baseurl . 'cekPasien';
    }
}
