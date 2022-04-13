<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Register extends BaseController
{
    
    public function index()
    {
        return view('daftar_page');
    }
    public function process()
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
            return redirect()->to('/register');
        }
        $tbluser = new ModelLogin();
        $tbluser->insert([
            'username' => $this->request->getVar('username'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
            'namalengkap' => $this->request->getVar('namalengkap'),
            'cabang' => $this->request->getVar('cabang'),
            'akses' => $this->request->getVar('akses'),
            'isaktif' => $this->request->getVar('isaktif'),
            'createdby' => $this->request->getVar('createdby')
        ]);
        return redirect()->to('/login');
    }
}
=======
<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Register extends BaseController
{
    
    public function index()
    {
        return view('daftar_page');
    }
    public function process()
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
            return redirect()->to('/register');
        }
        $tbluser = new ModelLogin();
        $tbluser->insert([
            'username' => $this->request->getVar('username'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
            'namalengkap' => $this->request->getVar('namalengkap'),
            'cabang' => $this->request->getVar('cabang'),
            'akses' => $this->request->getVar('akses'),
            'isaktif' => $this->request->getVar('isaktif'),
            'createdby' => $this->request->getVar('createdby')
        ]);
        return redirect()->to('/login');
    }
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
