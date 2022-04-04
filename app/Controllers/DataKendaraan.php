<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKendaraan;
use App\Models\ModelStokBarang;
use App\Models\ModelTipeKendaraan;

class DataKendaraan extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelKendaraan();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilstok' => $this->stokbarang->getDataStok()
        ];
        return view('admin-super/datakendaraan/formtambah',$data);
    }
    public function formtambah()
    {
        $this->kodestok = new ModelStokBarang();
        $this->kodetipe = new ModelTipeKendaraan();
        $data = [
            'tampildata' => $this->kodestok->findAll(),
            'tampiltipe' => $this->kodetipe->findAll()
        ];
        return view('admin-super/datakendaraan/formtambah',$data);
    }

    public function simpandata()
    {
        
        $kodestok = $this->request->getVar('kodestok');
        $kodetipe = $this->request->getVar('kodetipe');
        $norangka = $this->request->getVar('norangka');
        $nomesin = $this->request->getVar('nomesin');
        $tahunkendaraan = $this->request->getVar('tahunkendaraan');
        $warna = $this->request->getVar('warna');
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
                return true;
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->stokbarang->insert([
                    'kodestok' => $kodestok,
                    'kodetipe' => $kodetipe,
                    'nomesin' => $nomesin,
                    'norangka' => $norangka,
                    'tahunkendaraan' => $tahunkendaraan,
                    'warna' => $warna,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                return redirect()->to('stokbarang');
            }
    }
}
