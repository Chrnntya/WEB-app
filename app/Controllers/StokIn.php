<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelStokBarang;
use App\Models\ModelStokIn;
use App\Models\ModelTransfer;

class StokIn extends BaseController
{
    public function __construct()
    {
        $this->stokIn = new ModelStokIn();
        $this->kodeStok = new ModelStokBarang();
    }
    public function index()
    {
        $data = [
            'tampilstok' => $this->stokIn->findAll()
        ];
        return view('admin-super/stok-in/viewstokin',$data);
    }
    public function formtambah()
    {
        $data = [
            
            'tampilkode' => $this->stokIn->CreateCode()
        ];
        
        return view('admin-super/stok-in/formtambah',$data);
    }
    public function simpandata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $kodebuku = $this->request->getVar('kodebuku');
        $nobuku = $this->request->getVar('nobuku');
        $nodo = $this->request->getVar('nodo');
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
                return redirect()->to('stokin/formtambah');
            } else{
                $tgl = date("Y-m-d h:m:s");
                $user = session()->get('username');
                $status = "DRAFT";
                $this->stokIn->insert([
                    'kodestok' => $kodestok,
                    'kodebuku' => $kodebuku,
                    'nobuku' => $nobuku,
                    'nodo' => $nodo,
                    'tgldo' => $tgldo,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                
                return redirect()->to('stokin/index');
            }
    }


    #edit dan delete data
    public function formedit($kodestok)
    {
        $rowData = $this->stokIn->find($kodestok);

        if ($rowData) {
            $data=[
                'kodestok' => $kodestok,
                'tgldatang' => $rowData['tgldatang']
            ];
            return view('admin-super/stok-in/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }
    public function updatedata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $tgldatang = $this->request->getVar('tgldatang');
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
                    'errorkodecabang' => $validation->getError()
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('stok-in/formedit'.$kodestok);
            } else{
                $this->stokIn->update($kodestok,[
                    'tgldatang' => $tgldatang ]);
                return redirect()->to('stokin');
            }
    }



    public function hapus($kodestok)
    {
        $rowData = $this->stokIn->find($kodestok);

        if ($rowData) {
            $this->stokIn->delete($kodestok);
            return redirect()->to('stokin');
        }else{
            exit('Data tidak ditemukan');
        }
    }
}
