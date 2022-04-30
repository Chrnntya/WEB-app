<?php

namespace App\Controllers;

use App\Models\ModelCabang;
use App\Models\ModelKendaraan;
use App\Models\ModelPembelian;
use App\Models\ModelStokBarang;
use App\Models\ModelTipeKendaraan;
use App\Models\ModelTransfer;

class Publish extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
        $this->dataKendaraan = new ModelKendaraan();
    }

    public function index()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilNotPublish(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Belum Publish</h1>",
            'btnpublish' => "#modal",
            'btn' => "1"
        ];
        return view('admin-super/showroom/viewspublish',$data);
    }
    public function publish_view()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilPublish(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Sudah Publish</h1>",
            'btnpublish' => "#modal2",
            'btn' => "2"
        ];
        return view('admin-super/showroom/viewspublish',$data);
    }
    //update transfer stok in
    public function updateStok()
    {
        $nobukti = $this->request->getVar('kodestok');
        $ispublish = $this->request->getVar('ispublish');
        $createdby = $this->request->getVar('createdby');

        $this->stokbarang->update($nobukti,[
            'ispublish' => $ispublish,
            'createdby' => $createdby
        ]);
        return redirect()->to('publish/index');

    }

    
}
