<<<<<<< HEAD
<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelCabang;

class CabangData extends Controller
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

    public function simpan()
    {
        
        $kodecabang = $this->request->getVar('');
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
                return redirect()->to('cabang/formtambah');
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->cabang->insert([
                    'kodecabang' => $kodecabang,
                    'namacabang' => $namacabang,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                return redirect()->to('cabangdata');
            }
    }

    // public function formedit($kodecabang)
    // {
    //     $rowData = $this->cabang->find($kodecabang);

    //     if ($rowData) {
    //         $data=[
    //             'kodecabang' => $kodecabang,
    //             'namacabang' => $rowData['namacabang']
    //         ];
    //         return view('admin-super/cabang/formedit',$data);
    //     }else{
    //         exit('Data tidak ditemukan');
    //     }
    // }

    // public function updatedata()
    // {
    //     $kodecabang = $this->request->getVar('kodecabang');
    //     $namacabang = $this->request->getVar('namacabang');
    //     $validation = \Config\Services::validation();
    //     $valid = $this->validate([
    //         'kodecabang' => [
    //             'rules' => 'required',
    //             'label' => 'nama kategori',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ]
    //         ]);

    //         if (!$valid){
    //             $pesan = [
    //                 'errorkodecabang' => $validation->getError()
    //             ];

    //             session()->setFlashdata($pesan);
    //             return redirect()->to('cabang/formedit'.$kodecabang);
    //         } else{
    //             $tgl = date("d/m/Y h:i:s");
    //             $user = session()->get('username');
    //             $this->cabang->update($kodecabang,[
    //                 'namacabang' => $namacabang,
    //                 'createdby' => $user
    //             ]);
    //             return redirect()->to('cabang');
    //         }

    // }

    // public function hapus($kodecabang)
    // {
    //     $rowData = $this->cabang->find($kodecabang);

    //     if ($rowData) {
    //         $this->cabang->delete($kodecabang);
    //         return redirect()->to('cabang/index');
    //     }else{
    //         exit('Data tidak ditemukan');
    //     }

    // }

    
=======
<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelCabang;

class CabangData extends Controller
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

    public function simpan()
    {
        
        $kodecabang = $this->request->getVar('');
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
                return redirect()->to('cabang/formtambah');
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->cabang->insert([
                    'kodecabang' => $kodecabang,
                    'namacabang' => $namacabang,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                return redirect()->to('cabangdata');
            }
    }

    // public function formedit($kodecabang)
    // {
    //     $rowData = $this->cabang->find($kodecabang);

    //     if ($rowData) {
    //         $data=[
    //             'kodecabang' => $kodecabang,
    //             'namacabang' => $rowData['namacabang']
    //         ];
    //         return view('admin-super/cabang/formedit',$data);
    //     }else{
    //         exit('Data tidak ditemukan');
    //     }
    // }

    // public function updatedata()
    // {
    //     $kodecabang = $this->request->getVar('kodecabang');
    //     $namacabang = $this->request->getVar('namacabang');
    //     $validation = \Config\Services::validation();
    //     $valid = $this->validate([
    //         'kodecabang' => [
    //             'rules' => 'required',
    //             'label' => 'nama kategori',
    //             'errors' => [
    //                 'required' => '{field} Tidak boleh kosong'
    //             ]
    //         ]
    //         ]);

    //         if (!$valid){
    //             $pesan = [
    //                 'errorkodecabang' => $validation->getError()
    //             ];

    //             session()->setFlashdata($pesan);
    //             return redirect()->to('cabang/formedit'.$kodecabang);
    //         } else{
    //             $tgl = date("d/m/Y h:i:s");
    //             $user = session()->get('username');
    //             $this->cabang->update($kodecabang,[
    //                 'namacabang' => $namacabang,
    //                 'createdby' => $user
    //             ]);
    //             return redirect()->to('cabang');
    //         }

    // }

    // public function hapus($kodecabang)
    // {
    //     $rowData = $this->cabang->find($kodecabang);

    //     if ($rowData) {
    //         $this->cabang->delete($kodecabang);
    //         return redirect()->to('cabang/index');
    //     }else{
    //         exit('Data tidak ditemukan');
    //     }

    // }

    
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}