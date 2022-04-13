<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCabang;

class DataCabang extends BaseController
{
    public function __construct()
    {
        $this->cabang = new ModelCabang();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->cabang->findAll()
        ];
        return view('admin-super/cabangdata/viewscabang',$data);
    }

    public function formtambah()
    {
        return view('admin-super/cabangdata/formtambah');
    }

    public function simpandata()
    {
        $kodecabang = $this->request->getVar('kodecabang');
        $namacabang = $this->request->getVar('namacabang');

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'kodecabang' => [
                'rules' => 'required',
                'label' => 'nama kategori',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ]
            ]);
        if (!$valid) {
            $pesan = [
                'errorkodecabang' => $validation->getError()
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('datacabang/formtambah');
        }else{
            $tgl = date("d/m/Y h:i:s");
            $user = session()->get('username');
            $kode = "CB";
            $this->cabang->insert([
                'kodecabang' => $kode.$kodecabang,
                'namacabang' => $namacabang,
                'createdby' => $user,
                'createddate' => $tgl
                ]);
                return redirect()->to('datacabang');
        }
    }

    public function formedit($kodecabang)
    {
        $rowData = $this->cabang->find($kodecabang);

        if ($rowData) {
            $data=[
                'kodecabang' => $kodecabang,
                'namacabang' => $rowData['namacabang']
            ];
            return view('admin-super/cabangdata/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updatedata()
    {
        $kodecabang = $this->request->getVar('kodecabang');
        $namacabang = $this->request->getVar('namacabang');
        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'kodecabang' => [
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
                return redirect()->to('datacabang/formedit'.$kodecabang);
            } else{
                // $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->cabang->update($kodecabang,[
                    'namacabang' => $namacabang,
                    'createdby' => $user

                ]);
                return redirect()->to('datacabang');
            }
    }

    public function hapus($kodecabang)
    {
        $rowData = $this->cabang->find($kodecabang);

        if ($rowData) {
            $this->cabang->delete($kodecabang);
            return redirect()->to('datacabang');
        }else{
            exit('Data tidak ditemukan');
        }
    }
}
