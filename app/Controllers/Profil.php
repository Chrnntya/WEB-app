<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;
use App\Models\ModelProfil;

class Profil extends BaseController
{
    public function __construct()
    {
        $this->datauser = new ModelProfil();
    }
    public function index()
    {
        $dataprofil = new ModelLogin();

        $data['tampildata'] = $dataprofil->where('userid',session()->get('userid'))->findAll();
        return view('admin-super/profil/index',$data);
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
            return view('admin-super/profil/formedit',$data);
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
        return redirect()->to('profil');

    }

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
        return redirect()->to('profil');

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
            return view('admin-super/profil/formchange',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    
}
=======
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProfil;

class Profil extends BaseController
{
    public function __construct()
    {
        $this->datauser = new ModelProfil();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->datauser->findAll()
        ];
        return view('admin-super/profil/index',$data);
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
            return view('admin-super/profil/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

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
        return redirect()->to('profil');

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
            return view('admin-super/profil/formchange',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
