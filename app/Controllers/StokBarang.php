<<<<<<< HEAD
<?php

namespace App\Controllers;
use App\Models\ModelStokBarang;
class StokBarang extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
    }

    public function index()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('admin-super/showroom/viewstokbarang',$data);
    }
    
    public function formtambah()
    {
        $data = [
            
            'tampilstok' => $this->stokbarang->CreateCode()
        ];
        return view('admin-super/showroom/formtambah',$data);
    }

    public function simpandata()
    {
        
        $kodestok = $this->request->getVar('kodestok');
        $jenisstok = $this->request->getVar('jenisstok');
        $statusstok = $this->request->getVar('statusstok');
        $lokasi = $this->request->getVar('lokasi');
        $keterangan = $this->request->getVar('keterangan');
        $ispublish = $this->request->getVar('ispublish');
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
                return redirect()->to('stokbarang/formtambah');
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $kode = 
                $this->stokbarang->insert([
                    'kodestok' => $kodestok,
                    'jenisstok' => $jenisstok,
                    'statusstok' => $statusstok,
                    'lokasi' => $lokasi,
                    'keterangan' => $keterangan,
                    'ispublish' => $ispublish,
                    'createdby' => $user,
                    'createddate' => $tgl,
                    'terjual' => $terjual
                ]);
                return redirect()->to('stokbarang');
            }
    }

    public function formedit($kodestok)
    {
        $rowData = $this->stokbarang->find($kodestok);

        if ($rowData) {
            $data=[
                'kodestok' => $kodestok,
                'jenisstok' => $rowData['jenisstok'],
                'statusstok' => $rowData['statusstok'],
                'lokasi' => $rowData['lokasi'],
                'keterangan' => $rowData['keterangan'],
                'ispublish' => $rowData['ispublish'],
                'terjual' => $rowData['terjual']
            ];
            return view('admin-super/showroom/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updatedata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $jenisstok = $this->request->getVar('jenisstok');
        $statusstok = $this->request->getVar('statusstok');
        $lokasi = $this->request->getVar('lokasi');
        $keterangan = $this->request->getVar('keterangan');
        $ispublish = $this->request->getVar('ispublish');
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
                return redirect()->to('stokbarang/formedit'.$kodestok);
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->stokbarang->update($kodestok,[
                    'jenisstok' => $jenisstok,
                    'statusstok' => $statusstok,
                    'lokasi' => $lokasi,
                    'keterangan' => $keterangan,
                    'ispublish' => $ispublish,
                    'terjual' => $terjual
                ]);
                return redirect()->to('stokbarang');
            }

    }

    public function hapus($kodestok)
    {
        $rowData = $this->stokbarang->find($kodestok);

        if ($rowData) {
            $this->stokbarang->delete($kodestok);
            return redirect()->to('stokbarang/index');
        }else{
            exit('Data tidak ditemukan');
        }

    }
    
}
=======
<?php

namespace App\Controllers;
use App\Models\ModelStokBarang;
class StokBarang extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
    }

    public function index()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('admin-super/showroom/viewstokbarang',$data);
    }
    
    public function formtambah()
    {
        
        return view('admin-super/showroom/formtambah');
    }

    public function simpandata()
    {
        
        $kodestok = $this->request->getVar('kodestok');
        $jenisstok = $this->request->getVar('jenisstok');
        $statusstok = $this->request->getVar('statusstok');
        $lokasi = $this->request->getVar('lokasi');
        $keterangan = $this->request->getVar('keterangan');
        $ispublish = $this->request->getVar('ispublish');
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
                return redirect()->to('stokbarang/formtambah');
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->stokbarang->insert([
                    'kodestok' => $kodestok,
                    'jenisstok' => $jenisstok,
                    'statusstok' => $statusstok,
                    'lokasi' => $lokasi,
                    'keterangan' => $keterangan,
                    'ispublish' => $ispublish,
                    'createdby' => $user,
                    'createddate' => $tgl,
                    'terjual' => $terjual
                ]);
                return redirect()->to('stokbarang');
            }
    }

    public function formedit($kodestok)
    {
        $rowData = $this->stokbarang->find($kodestok);

        if ($rowData) {
            $data=[
                'kodestok' => $kodestok,
                'jenisstok' => $rowData['jenisstok'],
                'statusstok' => $rowData['statusstok'],
                'lokasi' => $rowData['lokasi'],
                'keterangan' => $rowData['keterangan'],
                'ispublish' => $rowData['ispublish'],
                'terjual' => $rowData['terjual']
            ];
            return view('admin-super/showroom/formedit',$data);
        }else{
            exit('Data tidak ditemukan');
        }
    }

    public function updatedata()
    {
        $kodestok = $this->request->getVar('kodestok');
        $jenisstok = $this->request->getVar('jenisstok');
        $statusstok = $this->request->getVar('statusstok');
        $lokasi = $this->request->getVar('lokasi');
        $keterangan = $this->request->getVar('keterangan');
        $ispublish = $this->request->getVar('ispublish');
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
                return redirect()->to('stokbarang/formedit'.$kodestok);
            } else{
                $tgl = date("d/m/Y h:i:s");
                $user = session()->get('username');
                $this->stokbarang->update($kodestok,[
                    'jenisstok' => $jenisstok,
                    'statusstok' => $statusstok,
                    'lokasi' => $lokasi,
                    'keterangan' => $keterangan,
                    'ispublish' => $ispublish,
                    'terjual' => $terjual
                ]);
                return redirect()->to('stokbarang');
            }

    }

    public function hapus($kodestok)
    {
        $rowData = $this->stokbarang->find($kodestok);

        if ($rowData) {
            $this->stokbarang->delete($kodestok);
            return redirect()->to('stokbarang/index');
        }else{
            exit('Data tidak ditemukan');
        }

    }
    
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
