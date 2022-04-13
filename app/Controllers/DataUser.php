<?php

namespace App\Controllers;

use App\Models\ModelCabang;
use App\Models\ModelLogin;
use App\Models\ModelProfil;
use App\Models\ModelUser;

class DataUser extends BaseController
{
    public function __construct()
    {
        $this->datacabang = new ModelCabang();
        $this->datauser = new ModelLogin();
        $this->data_user = new ModelProfil();
    }
    public function index()
    {
        $product = new ModelLogin();
        $data['tampil_pegawai'] = $product->findAll();
        return view('admin-super/user/v_datasuperadmin', $data);
    }
    public function dataadmin()
    {
        $product = new ModelLogin();
        $data['tampil_pegawai'] = $product->where('akses','2')->findAll();
        return view('admin-super/user/v_dataadmin',$data);
    }
    public function datapegawai()
    {
        $product = new ModelLogin();
        $dataProduct['tampil_pegawai'] = $product->where('akses','3')->findAll();
        return view('admin-super/user/v_datapegawai',$dataProduct);
    }

    public function formtambah()
    {
        $data = [
            'tampilcabang' => $this->datacabang->findAll(),
            'tampil_id' => $this->datauser->findAll()
        ];
        return view('admin-super/user/formtambah',$data);
    }
    public function simpandata()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[tbluser.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'pass' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'pass_conf' => [
                'rules' => 'matches[pass]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'namalengkap' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            // return redirect('/register')->back()->withInput();
            return redirect()->to('/datauser/formtambah');
        }
        $tbluser = new ModelLogin();
        $tbluser->insert([
            'userid' => $this->request->getVar('userid'),
            'username' => $this->request->getVar('username'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
            'namalengkap' => $this->request->getVar('namalengkap'),
            'cabang' => $this->request->getVar('cabang'),
            'akses' => $this->request->getVar('akses'),
            'isaktif' => $this->request->getVar('isaktif'),
            'createdby' => $this->request->getVar('createdby')
        ]);
        return redirect()->to('/datauser');
    }

    public function hapus_user($userid)
    {
        $rowData = $this->datauser->find($userid);

        if ($rowData) {
            $this->datauser->delete($userid);
            return redirect()->to('datauser/index');
        }else{
            exit('Data tidak ditemukan');
        }

    }


    public function formedit($userid)
    {
        $rowData = $this->data_user->find($userid);

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
            return view('admin-super/user/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updatedata()
    {
        $userid = $this->request->getVar('userid');
        $username= $this->request->getVar('username');
        $namalengkap = $this->request->getVar('namalengkap');
        $cabang = $this->request->getVar('cabang');
        $email = $this->request->getVar('email');
        $akses = $this->request->getVar('akses');
        $isaktif = $this->request->getVar('isaktif');
        $this->datauser->update($userid,[
            'username' => $username,
            'namalengkap' => $namalengkap,
            'cabang' => $cabang,
            'email' => $email,
            'akses' => $akses,
            'isaktif' => $isaktif
        ]);
        return redirect()->to('datauser');

    }
    

}
