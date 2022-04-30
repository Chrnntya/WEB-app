<?php

namespace App\Controllers;

use App\Models\ModelProfil;
use App\Models\ModelStokBarang;
use App\Models\ModelStokOut;
use App\Models\ModelTransfer;
use App\Models\ModelUser;

class Pegawai extends BaseController
{
    public function __construct()
    {
        $this->datauser = new ModelProfil();
        $this->stokbarang = new ModelStokBarang();
        $this->transferIn = new ModelTransfer();
        $this->stokOut = new ModelStokOut();
    }
    public function index()
    {
        $dataprofil = new ModelProfil();
        $data['tampildata'] = $dataprofil->where('userid',session()->get('userid'))->findAll();
        return view('pegawai/index',$data);
    }
    public function stokin()
    {
        
        $data = [
            
            'tampilstok' => $this->transferIn->tampildata_in()
        ];
        return view('pegawai/transferin/viewstokin',$data);
    }
    public function penjualan()
    {
        //return view('layouts/super-admin/header');
        return view('pegawai/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('pegawai/showroom/viewstokbarang',$data);
    }
    public function profilPegawai()
    {
        $dataprofil = new ModelProfil();
        $data['tampildata'] = $dataprofil->where('userid',session()->get('userid'))->findAll();
        return view('pegawai/profil/index',$data);
    }

    public function formedit($userid)
    {
        $rowData = $this->datauser->find($userid);

        if ($rowData) {
            $data=[
                'userid' => $userid,
                'username' => $rowData['username'],
                'email' => $rowData['email'],
                'namalengkap' => $rowData['namalengkap'],
                'cabang' => $rowData['cabang'],
                'akses' => $rowData['akses'],
                'isaktif' => $rowData['isaktif']
            ];
            return view('pegawai/profil/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updateprofil()
    {
        $userid = $this->request->getVar('userid');
        $username= $this->request->getVar('username');
        $namalengkap = $this->request->getVar('namalengkap');
        $cabang = $this->request->getVar('cabang');
        $email = $this->request->getVar('email');
        $isaktif = $this->request->getVar('isaktif');
        $this->datauser->update($userid,[
            'username' => $username,
            'namalengkap' => $namalengkap,
            'cabang' => $cabang,
            'email' => $email,
            'isaktif' => $isaktif
        ]);
        return redirect()->to('pegawai/profilpegawai');

    }

    //fungsi edit password
    public function updatepass()
    {
        $userid = $this->request->getVar('userid');
        $pass = $this->request->getVar('pass');
        $tgl = date("Y-m-d");
        $user = session()->get('username');
        $this->datauser->update($userid,[
            'pass' => password_hash($pass,PASSWORD_BCRYPT),
            'createdby' => $user,
            'created_at' => $tgl
        ]);
        return redirect()->to('pegawai/profilpegawai');

    }

    public function formchange($userid)
    {
        $rowData = $this->datauser->find($userid);

        if ($rowData) {
            $data=[
                'userid' => $userid,
                'username' => $rowData['username'],
                'pass' => $rowData['pass']
            ];
            return view('pegawai/profil/formchange',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    } 

    //update status stok
    public function updateStatusStok()
    {
        $kodestok = $this->request->getVar('kodestok');
        $statusstok = $this->request->getVar('statusstok');
        $tgl = date("Y-m-d");
        $this->stokbarang->update($kodestok,[
            'statusstok' => $statusstok
        ]);
        return redirect()->to('pegawai/stokbarang');

    }

    //update transfer stok in
    public function updateTransferStok()
    {
        $nobukti = $this->request->getVar('nobukti');
        $statustransfer = $this->request->getVar('statustransfer');
        $diterimaoleh = $this->request->getVar('diterimaoleh');
        $tglterima = date('Y-m-d');
        $this->transferIn->update($nobukti,[
            'statustransfer' => $statustransfer,
            'diterimaoleh' => $diterimaoleh,
            'tglterima' => $tglterima
        ]);
        return redirect()->to('pegawai/stokin');

    }

    //stok out
    public function stokout()
    {
        $data = [
            
            'tampilstok' => $this->stokOut->tampildata()
        ];
        return view('pegawai/stok-out/viewstokout',$data);
    }
    public function formtambah_out()
    {
        $data = [
            'kodestok' => $this->stokbarang->findAll()
        ];
        
        return view('pegawai/stok-out/formtambah',$data);
    }
    public function simpandata_out()
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
                return redirect()->to('pegawai/formtambah_out');
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
                
                return redirect()->to('pegawai/stokout');
            }
    }

}
