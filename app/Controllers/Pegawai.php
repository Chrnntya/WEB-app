<?php

namespace App\Controllers;

class Pegawai extends BaseController
{
    public function index()
    {
        return view('pegawai/index');
    }
    public function stokin()
    {
        return view('pegawai/stokin');
    }
    public function penjualan()
    {
        //return view('layouts/super-admin/header');
        return view('pegawai/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        return view('pegawai/stokbarang');
    }
}
