<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKendaraan extends Model
{
    protected $table = 'tbldatakendaraan';
    protected $primaryKey = 'kodetipe';
    protected $allowedFields = [
        'kodetipe',
        'kodestok',
        'norangka',
        'nomesin',
        'tahunkendaraan',
        'warna',
        'createdby',
        'createddate'
          
    ];
    public function tampilTipeKendaraan()
    {
        $data = $this->table('tbldatakendaraan')->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->get()->getResultArray();
        return $data;
    }

    public function tampilPublish()
    {
        $data = $this->table('tbldatakendaraan')
        ->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('ispublish','1')
        ->get()->getResultArray();
        return $data;
    }
    public function tampilStok()
    {
        $data = $this->table('tbldatakendaraan')
        ->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('terjual','0')
        ->get()->getResultArray();
        return $data;
    }
    public function tampilRekap()
    {
        $data = $this->table('tbldatakendaraan')
        ->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('ispublish','1')
        ->get()->getResultArray();
        return $data;
    }
    public function tampilTerjual()
    {
        $data = $this->table('tbldatakendaraan')
        ->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('terjual','1')
        ->get()->getResultArray();
        return $data;
    }
    public function tampilNotPublish()
    {
        $data = $this->table('tbldatakendaraan')
        ->join('tbltipekendaraan','tbltipekendaraan.kodetipe=tbldatakendaraan.kodetipe')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('ispublish','0')
        ->get()->getResultArray();
        return $data;
    }
    
}
