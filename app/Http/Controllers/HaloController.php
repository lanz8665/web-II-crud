<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(){
        $namaLengkap = 'lalan jaelani';

        $data = array(
            'nama' => $namaLengkap,
            'alamat'=> 'Cianjur'
        );
        return view('beranda.halo', $data);
    }
}
