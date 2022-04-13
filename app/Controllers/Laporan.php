<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        return view('admin-super/laporan/index');
    }
    public function rekapitulasi()
    {
        return view('admin-super/laporan/rekapitulasi');
    }
    
    
}
