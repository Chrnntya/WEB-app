<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTipeKendaraan;

class TipeKendaraan extends BaseController
{
    public function __construct()
    {
        $this->tipebarang = new ModelTipeKendaraan();
    }

    public function index()
    {
        $data = [
            'tampildata' => $this->tipebarang->findAll()
        ];
        return view('admin-super/tipe/viewtipekendaraan',$data);
    }

    public function formtambah()
    {
        $data = [
            
            'tampiltipe' => $this->tipebarang->CreateCode()
        ];
        
        return view('admin-super/tipe/formtambah',$data);
    }

    public function simpandata()
    {
        
        $kodetipe = $this->request->getVar('kodetipe');
        $merks = $this->request->getVar('merks');
        $tipekendaraan = $this->request->getVar('tipekendaraan');
        $subtipe = $this->request->getVar('subtipe');
        $transmisi = $this->request->getVar('transmisi');
        $isdiscontinued = $this->request->getVar('isdiscontinued');

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'kodetipe' => [
                'rules' => 'required',
                'label' => 'nama kategori',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ]
            ]);

            if (!$valid){
                $pesan = [
                    'errorkodetipe' => $validation->getError()
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('tipekendaraan/formtambah');
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->tipebarang->insert([
                    'kodetipe' => $kodetipe,
                    'merks' => $merks,
                    'tipekendaraan' => $tipekendaraan,
                    'subtipe' => $subtipe,
                    'transmisi' => $transmisi,
                    'isdiscontinued' => $isdiscontinued,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                return redirect()->to('tipekendaraan');
            }
    }

    public function formedit($kodetipe)
    {
        $rowData = $this->tipebarang->find($kodetipe);

        if ($rowData) {
            $data=[
                'kodetipe' => $kodetipe,
                'merks' => $rowData['merks'],
                'tipekendaraan' => $rowData['tipekendaraan'],
                'subtipe' => $rowData['subtipe'],
                'transmisi' => $rowData['transmisi'],
                'isdiscontinued' => $rowData['isdiscontinued']
            ];
            return view('admin-super/tipe/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updatedata()
    {
        $kodetipe = $this->request->getVar('kodetipe');
        $merks = $this->request->getVar('merks');
        $tipekendaraan = $this->request->getVar('tipekendaraan');
        $subtipe = $this->request->getVar('subtipe');
        $transmisi = $this->request->getVar('transmisi');
        $isdiscontinued = $this->request->getVar('isdiscontinued');
        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'kodetipe' => [
                'rules' => 'required',
                'label' => 'nama kategori',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ]
            ]);

            if (!$valid){
                $pesan = [
                    'errorkodetipe' => $validation->getError()
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('tipekendaraan/formedit'.$kodetipe);
            } else{
                // $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->tipebarang->update($kodetipe,[
                    'merks' => $merks,
                    'tipekendaraan' => $tipekendaraan,
                    'subtipe' => $subtipe,
                    'transmisi' => $transmisi,
                    'isdiscontinued' => $isdiscontinued,
                    'createdby' => $user,
                ]);
                return redirect()->to('tipekendaraan');
            }

    }

    public function hapus($kodetipe)
    {
        $rowData = $this->tipebarang->find($kodetipe);

        if ($rowData) {
            $this->tipebarang->delete($kodetipe);
            return redirect()->to('tipekendaraan/index');
        }else{
            exit('Data tidak ditemukan');
        }

    }
}
