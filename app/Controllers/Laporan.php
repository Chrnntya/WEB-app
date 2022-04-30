<?php

namespace App\Controllers;

use App\Models\ModelKendaraan;
use App\Models\ModelStokBarang;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
        $this->dataKendaraan = new ModelKendaraan();
    }

    public function index()
    {
        return view('admin-super/laporan/index');
    }
    public function rekapitulasi()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilRekap(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Sedang Publish</h1>",
            'btnpublish' => "#modal",
            'btn' => "1"
        ];
        return view('admin-super/laporan/rekapitulasi',$data);
    }
    public function rekapitulasi_stok()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilTerjual(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Terjual</h1>",
            'btnpublish' => "#modal2",
            'btn' => "2"
        ];
        return view('admin-super/laporan/rekapitulasi',$data);
    }
    
    
}
