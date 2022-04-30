<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCabang;
use App\Models\ModelKendaraan;
use App\Models\ModelStokBarang;
use App\Models\ModelStokIn;
use App\Models\ModelStokOut;

class StokOut extends BaseController
{
    public function __construct()
    {
        $this->stokOut = new ModelStokOut();
        $this->cabang = new ModelCabang();
        $this->stokBarang = new ModelStokBarang();
        $this->stokKendaraan = new ModelKendaraan();
    }
    public function index()
    {
        $data = [
            'tampilstok' => $this->stokOut->tampildata()
        ];
        return view('admin-super/stok-out/viewstokout',$data);
    }
    public function formtambah()
    {
        $data = [
            'kodestok' => $this->stokKendaraan->tampilStok()
        ];
        
        return view('admin-super/stok-out/formtambah',$data);
    }
    public function simpandata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $nospk = $this->request->getVar('nospk');
        $namasales = $this->request->getVar('namasales');
        $namakonsumen = $this->request->getVar('namakonsumen');
        $tgldo = $this->request->getVar('tgldo');
        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'kodestok' => [
                'rules' => 'required',
                'label' => 'nama kategori',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ]
            ]);

            if (!$valid){
                $pesan = [
                    'errorKodeStok' => $validation->getError()
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('stokout/formtambah');
            } else{
                $tgl = date("Y-m-d h:m:s");
                $user = session()->get('username');
                $this->stokOut->insert([
                    'kodestok' => $kodestok,
                    'nospk' => $nospk,
                    'namasales' => $namasales,
                    'namakonsumen' => $namakonsumen,
                    'tgldo' => $tgldo,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                
                return redirect()->to('stokout/index');
            }
    }
}
