<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelStokBarang;
use App\Models\ModelTransfer;

class TransferOut extends BaseController
{
    public function __construct()
    {
        $this->transferOut = new ModelTransfer();
        $this->dataStok = new ModelStokBarang();
    }
    public function index()
    {
        $data = [
            
            'tampilstok' => $this->transferOut->tampildata()
        ];
        return view('admin-super/transferout/viewtransferout',$data);
    }

    public function formtambah()
    {
        $data = [
            'tampildata' => $this->dataStok->findAll()
        ];
        return view('admin-super/transferout/formtambah',$data);
    }

    public function simpandata()
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
                return redirect()->to('transferout/formtambah');
            } else{
                $tgl = date("Y-m-d h:m:s");
                $tglkirim = date("Y-m-d");
                $user = session()->get('username');
                $no = "TRF";
                $status = "DRAFT";
                $this->transferOut->insert([
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
                return redirect()->to('transferout');
            }
    }
}
=======
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelStokBarang;
use App\Models\ModelTransfer;

class TransferOut extends BaseController
{
    public function __construct()
    {
        $this->transferOut = new ModelTransfer();
        $this->dataStok = new ModelStokBarang();
    }
    public function index()
    {
        $data = [
            
            'tampilstok' => $this->transferOut->tampildata()
        ];
        return view('admin-super/transferout/viewtransferout',$data);
    }

    public function formtambah()
    {
        $data = [
            'tampildata' => $this->dataStok->findAll()
        ];
        return view('admin-super/transferout/formtambah',$data);
    }

    public function simpandata()
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
                return redirect()->to('transferout/formtambah');
            } else{
                $tgl = date("Y-m-d h:i:s");
                $tglkirim = date("Y-m-d");
                $user = session()->get('username');
                $no = "TRF";
                $status = "DRAFT";
                $this->transferOut->insert([
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
                return redirect()->to('transferout');
            }
    }
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
