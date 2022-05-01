<?php

namespace App\Controllers;

use App\Models\ModelAdmin;
use App\Models\ModelCabang;
use App\Models\ModelKendaraan;
use App\Models\ModelLogin;
use App\Models\ModelPameran;
use App\Models\ModelProfil;
use App\Models\ModelStokBarang;
use App\Models\ModelStokIn;
use App\Models\ModelStokOut;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
        $this->datauser = new ModelProfil();
        $this->datacabang = new ModelCabang();
        $this->datatransfer = new ModelAdmin();
        $this->datapameran = new ModelPameran();
        $this->dataKendaraan = new ModelKendaraan();
        $this->dataStokOut = new ModelStokOut();
        $this->dataStokIn = new ModelStokIn();

    }
    public function index()
    {
        $dataprofil = new ModelProfil();
        $data['tampildata'] = $dataprofil->where('userid',session()->get('userid'))->findAll();
        return view('admin/index',$data);
    }

    //view profil admin
    public function profil_admin()
    {
        $dataprofil = new ModelProfil();
        $data['tampildata'] = $dataprofil->where('userid',session()->get('userid'))->findAll();
        return view('admin/profil/index',$data);
    }

    //edit profil
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
            return view('admin/profil/formedit',$data);
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
        return redirect()->to('admin/profil_admin');

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
         return redirect()->to('admin/profil_admin');
 
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
             return view('admin/profil/formchange',$data);
         }else{
             exit('Data tidak ditemukan');
         }
     } 

    //data cabang
    public function cabang()
    {
        $data = [
            'tampildata' => $this->datacabang->findAll()
        ];
        return view('admin/cabangdata/viewscabang',$data);
    }
    public function formtambah()
    {
        return view('admin/cabangdata/formtambah');
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
        $rowData = $this->datacabang->find($kodecabang);
        $rowDatas = $this->datacabang->find($namacabang);
        if (($rowData&&$rowDatas)>0) {
            $pesan = [
                'errorkodecabang' => "data sudah ada"
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('admin/formtambah');
        }else{
            $tgl = date("d/m/Y h:i:s");
            $user = session()->get('username');
            $kodecb = "CB";
            $this->datacabang->insert([
                'kodecabang' => $kodecb.$kodecabang,
                'namacabang' => $namacabang,
                'createdby' => $user,
                'createddate' => $tgl
                ]);
            return redirect()->to('admin/cabang');
        }
    }
    public function edit_cabang($kodecabang)
    {
        $rowData = $this->datacabang->find($kodecabang);

        if ($rowData) {
            $data=[
                'kodecabang' => $kodecabang,
                'namacabang' => $rowData['namacabang']
            ];
            return view('admin/cabangdata/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }
    public function update_cabang()
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
                return redirect()->to('admin/formedit'.$kodecabang);
            } else{
                // $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->datacabang->update($kodecabang,[
                    'namacabang' => $namacabang,
                    'createdby' => $user

                ]);
                return redirect()->to('admin/cabang');
            }
    }
    public function hapus_cabang($kodecabang)
    {
        $rowData = $this->datacabang->find($kodecabang);

        if ($rowData) {
            $this->datacabang->delete($kodecabang);
            return redirect()->to('admin/cabang');
        }else{
            exit('Data tidak ditemukan');
        }
    }

    //data stok In dan Out
    public function stokin()
    {
        $data = [
            'tampilstok' => $this->dataStokIn->findAll()
        ];
        return view('admin/stok-in/viewstokin',$data);
    }
    
    //update transfer stok in
    public function updateTransferStok()
    {
        $nobukti = $this->request->getVar('nobukti');
        $statustransfer = $this->request->getVar('statustransfer');
        $diterimaoleh = $this->request->getVar('diterimaoleh');
        $tglterima = date('Y-m-d');
        $this->datatransfer->update($nobukti,[
            'statustransfer' => $statustransfer,
            'diterimaoleh' => $diterimaoleh,
            'tglterima' => $tglterima
        ]);
        return redirect()->to('admin/stokin');

    }

    //membuat stok out
    public function stokout()
    {
        $data = [
            'tampilstok' => $this->dataStokOut->tampildata()
        ];
        return view('admin/stok-out/viewtransferout',$data);
    }
    public function tambah_transferout()
    {
        $data = [
            'kodestok' => $this->dataKendaraan->tampilStok()
        ];
        return view('admin/stok-out/formtambah',$data);
    }
    //simpan data stok out
    public function simpan_stokout()
    {
        $kodestok = $this->request->getVar('kodestok');
        $nospk = $this->request->getVar('nospk');
        $namasales = $this->request->getVar('namasales');
        $namakonsumen = $this->request->getVar('namakonsumen');
        $tgldo = $this->request->getVar('tgldo');
        $terjual = $this->request->getVar('terjual');
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
                $this->dataStokOut->insert([
                    'kodestok' => $kodestok,
                    'nospk' => $nospk,
                    'namasales' => $namasales,
                    'namakonsumen' => $namakonsumen,
                    'tgldo' => $tgldo,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                $this->stokbarang->update($kodestok,[
                    'terjual' => $terjual
                ]);
                
                return redirect()->to('admin/stokout');
            }
    }
    //pameran
    //membuat sview pameran
    public function pameran()
    {
        $data = [
            'tampildata' => $this->datapameran->tampilPameran()
        ];
        return view('admin/showroom/viewspameran',$data);
    }
    //update pameran
    public function updatePameran()
    {
        $nobukti = $this->request->getVar('nobukti');
        $dikonfirmasioleh = $this->request->getVar('dikonfirmasioleh');
        $isconfirmed = $this->request->getVar('isconfirmed');

        $this->datapameran->update($nobukti,[
            'dikonfirmasioleh' => $dikonfirmasioleh,
            'isconfirmed' => $isconfirmed
        ]);
        return redirect()->to('admin/pameran');

    }

    //membuat sview pameran
    public function publish()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilNotPublish(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Belum Publish</h1>",
            'btnpublish' => "#modal",
            'btn' => "1"
        ];
        return view('admin/showroom/viewspublish',$data);
    }
    public function notpublish()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilpublish' => $this->dataKendaraan->tampilPublish(),
            'title' => "<h1 style='color:black;'>Data Unit Yang Sudah Publish</h1>",
            'btnpublish' => "#modal2",
            'btn' => "2"
        ];
        return view('admin/showroom/viewspublish',$data);
    }
    //update publish
    public function updatePublish()
    {
        $nobukti = $this->request->getVar('kodestok');
        $ispublish = $this->request->getVar('ispublish');
        $createdby = $this->request->getVar('createdby');

        $this->stokbarang->update($nobukti,[
            'ispublish' => $ispublish,
            'createdby' => $createdby
        ]);
        if ($ispublish==1) {
            return redirect()->to('admin/publish');
        }
        elseif ($ispublish==0) {
            return redirect()->to('admin/notpublish');
        }

    }

    //data barang
    public function databarang()
    {
        //return view('layouts/super-admin/header');
        return view('admin/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('admin/showroom/viewstokbarang',$data);
    }

    //data user
    public function dataadmin()
    {
        $product = new ModelLogin();
        $data['tampil_admin'] = $product->where('akses','2')->findAll();
        return view('admin/user/v_dataadmin',$data);
    }
    public function datapegawai()
    {
        $product = new ModelLogin();
        $dataProduct['tampil_pegawai'] = $product->where('akses','3')->findAll();
        return view('admin/user/v_datapegawai',$dataProduct);
    }
}
