<?php

namespace App\Controllers;

use App\Models\ModelCabang;
use App\Models\ModelKendaraan;
use App\Models\ModelPembelian;
use App\Models\ModelStokBarang;
use App\Models\ModelTipeKendaraan;

class StokBarang extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
        $this->cabang = new ModelCabang();
        $this->tipeKendaraan = new ModelTipeKendaraan();
        $this->Pembelian = new ModelPembelian();
        $this->Kendaraan = new ModelKendaraan();
    }

    public function index()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll(),
            'tampilcabang' => $this->cabang->findAll()
        ];
        return view('admin-super/showroom/viewstokbarang',$data);
    }
    
    public function formtambah()
    {
        $data = [
            
            'tampilkode' => $this->stokbarang->CreateCode(),
            'tampiltipe' => $this->tipeKendaraan->findAll(),
            'tampilcabang' => $this->cabang->findAll()
        ];
        return view('admin-super/showroom/formtambah',$data);
    }

    public function simpandata()
    {
        //tbldatastok
        $kodestok = $this->request->getVar('kodestok');
        $jenisstok = $this->request->getVar('jenisstok');
        $statusstok = $this->request->getVar('statusstok');
        $lokasi = $this->request->getVar('lokasi');
        $keterangan = $this->request->getVar('keterangan');
        $ispublish = $this->request->getVar('ispublish');
        $terjual = $this->request->getVar('terjual');

        //tbldatapembelian
        $kodebuku = $this->request->getVar('kodebuku');
        $nobuku = $this->request->getVar('nobuku');
        $nodo = $this->request->getVar('nodo');
        $tgldo = $this->request->getVar('tgldo');
        $tgldatang = $this->request->getVar('tgldatang');

        //tbldatakendaraan
        $kodetipe = $this->request->getVar('kodetipe');
        $norangka = $this->request->getVar('norangka');
        $nomesin = $this->request->getVar('nomesin');
        $tahunkendaraan = $this->request->getVar('tahunkendaraan');
        $warna = $this->request->getVar('warna');
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
                $tgl = date("Y-m-d h:i:s");
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
                $this->Pembelian->insert([
                    'kodestok' => $kodestok,
                    'kodebuku' => $kodebuku,
                    'nobuku' => $nobuku,
                    'nodo' => $nodo,
                    'tgldo' => $tgldo,
                    'tgldatang' => $tgldatang,
                    'createdby' => $user,
                    'createddate' => $tgl
                ]);
                $this->Kendaraan->insert([
                    'kodestok' => $kodestok,
                    'kodetipe' => $kodetipe,
                    'norangka' => $norangka,
                    'nomesin' => $nomesin,
                    'tahunkendaraan' => $tahunkendaraan,
                    'warna' => $warna,
                    'createdby' => $user,
                    'createddate' => $tgl
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
