<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelHistoryStok;
use App\Models\ModelStokBarang;
use App\Models\ModelTransfer;

class Transfer extends BaseController
{
    public function __construct()
    {
        $this->transfer = new ModelTransfer();
        $this->dataStok = new ModelStokBarang();
        $this->historyStok = new ModelHistoryStok();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->transfer->tampildata()
        ];
        return view('admin-super/transfer/viewstransfer',$data);
    }
    public function formtambah()
    {
        $data = [
            'tampildata' => $this->dataStok->findAll()
        ];
        return view('admin-super/transfer/formtambah',$data);
    }

    public function simpandata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $nobukti = $this->request->getVar('nobukti');
        $lokasitujuan = $this->request->getVar('lokasitujuan');
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
                return redirect()->to('transfer/formtambah');
            } else{
                $tgl = date("Y-m-d h:m:s");
                $tglkirim = date("Y-m-d");
                $user = session()->get('username');
                $no = "TRF";
                $status = "DRAFT";
                $this->transfer->insert([
                    'kodestok' => $kodestok,
                    'statustransfer' => $status,
                    'nobukti' => $no.$nobukti,
                    'lokasitujuan' => $lokasitujuan,
                    'tglkirim' => $tglkirim,
                    'namasupir' => $namasupir,
                    'keterangan' => $keterangan,
                    'ditransferoleh' => $user,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                
                $this->historyStok->insert([
                    'tglhistori' => $tglkirim,
                    'keterangan' => $keterangan,
                    'kodestok' => $kodestok,
                    'nobukti' => $no.$nobukti,
                    'createdby' => $user,
                    'createddate' => $tgl

                ]);
                return redirect()->to('transfer/index');
            }
    }
}
