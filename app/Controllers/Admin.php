<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\ModelCabang;
use App\Models\ModelLogin;
use App\Models\ModelProfil;
use App\Models\ModelStokBarang;
use App\Models\ModelTransfer;
use App\Models\ModelUser;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
        $this->datauser = new ModelProfil();
        $this->datacabang = new ModelCabang();
        $this->transferIn = new ModelTransfer();

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
        if (!$valid) {
            $pesan = [
                'errorkodecabang' => $validation->getError()
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('admin/formtambah');
        }else{
            $tgl = date("d/m/Y h:i:s");
            $user = session()->get('username');
            $this->datacabang->insert([
                'kodecabang' => $kodecabang,
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
            'tampilstok' => $this->transferIn->tampildata_in()
        ];
        return view('admin/transferin/viewstokin',$data);
    }
    public function stokout()
    {
        $data = [
            'tampilstok' => $this->transferIn->tampildata_out()
        ];
        return view('admin/transferout/viewtransferout',$data);
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
        return redirect()->to('admin/stokin');

    }

    //membuat stok out
    public function tambah_transferout()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('admin/transferout/formtambah',$data);
    }
    //simpan data stok out
    public function simpan_stokout()
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
                return redirect()->to('admin/transferout/formtambah');
            } else{
                $tgl = date("Y-m-d h:i:s");
                $tglkirim = date("Y-m-d");
                $user = session()->get('username');
                $no = "TRF";
                $status = "DRAFT";
                $this->transferIn->insert([
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
                return redirect()->to('admin/stokout');
            }
    }











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
=======
<?php

namespace App\Controllers;

use App\Models\ModelStokBarang;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
    }
    public function index()
    {
        return view('admin/index');
    }
    public function cabang()
    {
        return view('admin/cabang');
    }
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
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
