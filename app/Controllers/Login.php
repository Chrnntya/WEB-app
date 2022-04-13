<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        return view('login_page');
    }

    public function process()
    {
        $users = new ModelLogin();
        $username = $this->request->getVar('username');
        $pass = $this->request->getVar('pass');
        $dataUser = $users->where([
            'username' => $username,
            
        ])->first();
        if ($dataUser) {
            if (password_verify($pass, $dataUser->pass)) {
                session()->set([
                    'username' => $dataUser->username,
                    'userid' => $dataUser->userid,
                    'cabang' => $dataUser->cabang,
                    'pass' => $dataUser->pass,
                    'akses' => $dataUser->akses,
                    'logged_in' => TRUE
                ]);
                //cek role dari session
                //cek role dari session
                if($this->session->get('akses') == 1){
                    return redirect()->to('superadmin');
                }
                elseif($this->session->get('akses') == 2){
                    return redirect()->to('admin');
                }
                elseif($this->session->get('akses') == 3){
                    return redirect()->to('pegawai');
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
=======
<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        return view('login_page');
    }

    public function process()
    {
        $users = new ModelLogin();
        $username = $this->request->getVar('username');
        $pass = $this->request->getVar('pass');
        $dataUser = $users->where([
            'username' => $username,
            
        ])->first();
        if ($dataUser) {
            if (password_verify($pass, $dataUser->pass)) {
                session()->set([
                    'username' => $dataUser->username,
                    'userid' => $dataUser->userid,
                    'cabang' => $dataUser->cabang,
                    'pass' => $dataUser->pass,
                    'akses' => $dataUser->akses,
                    'logged_in' => TRUE
                ]);
                //cek role dari session
                //cek role dari session
                if($this->session->get('akses') == 1){
                    return redirect()->to('superadmin');
                }
                elseif($this->session->get('akses') == 2){
                    return redirect()->to('admin');
                }
                elseif($this->session->get('akses') == 3){
                    return redirect()->to('pegawai');
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
