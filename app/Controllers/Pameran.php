<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCabang;
use App\Models\ModelHistoryStok;
use App\Models\ModelKendaraan;
use App\Models\ModelPameran;
use App\Models\ModelStokBarang;
use App\Models\ModelTransfer;
use CodeIgniter\HTTP\Request;

class Pameran extends BaseController
{
    public function __construct()
    {
        $this->transfer = new ModelTransfer();
        $this->dataStok = new ModelStokBarang();
        $this->historyStok = new ModelHistoryStok();
        $this->dataPameran = new ModelPameran();
        $this->dataCabang = new ModelCabang();
        $this->dataKendaraan = new ModelKendaraan();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->dataPameran->tampildata()
        ];
        return view('admin-super/pameran/viewspameran',$data);
    }
    public function formtambah()
    {
        $data = [
            'tampilcabang' => $this->dataCabang->findAll(),
            'tampildata' => $this->dataStok->findAll(),
            'tampiltipe' => $this->dataKendaraan->tampilTipeKendaraan(),
            'tampilkode' => $this->dataPameran->createCode()
        ];
        //dd($data);
        return view('admin-super/pameran/formtambah',$data);
    }

    public function simpandata()
    {
        $cabang = $this->request->getVar('cabang');
        $kodestok = $this->request->getVar('kodestok');
        $nobukti = $this->request->getVar('nobukti');
        $tglawalpameran = $this->request->getVar('tglawalpameran');
        $tglakhirpameran = $this->request->getVar('tglakhirpameran');
        $namasupir = $this->request->getVar('namasupir');
        $keterangan = $this->request->getVar('keterangan');
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
                return redirect()->to('pameran/formtambah');
            } else{
                $tgl = date("Y-m-d h:m:s");
                $user = session()->get('username');
                $this->dataPameran->insert([
                    'cabang' => $cabang,
                    'kodestok' => $kodestok,
                    'nobukti' => $nobukti,
                    'tglawalpameran' => $tglawalpameran,
                    'tglakhirpameran' => $tglakhirpameran,
                    'namasupir' => $namasupir,
                    'keterangan' => $keterangan,
                    'dibuatoleh' => $user,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                return redirect()->to('pameran/index');
            }
    }
}
