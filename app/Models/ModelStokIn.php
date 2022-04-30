<?php
namespace App\Models;
use CodeIgniter\Model;
class ModelStokIn extends Model
{
    protected $table = 'tbldatapembelian';
    protected $primaryKey = 'kodestok';
    protected $allowedFields = [
        'kodestok',
         'kodebuku',
          'nobuku',
          'nodo',
          'tgldo',
          'tgldatang',
          'createdby',
          'createddate'
    ];

    public function tampildata()
    {
        $data = $this->table('tbldatapembelian')->join('tbldatastok','tbldatastok.kodestok=tbldatapembelian.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')->get()->getResultArray();
        return $data;
        
    }
    public function tampildatastok()
    {
        $data = $this->table('tbldatatpembelian')->get()->getResultArray();
        return $data;
        
    }

    public function getTransfer()
    {
        $this->join('tbltipekendaraan', 'tbltipekendaraan.kodetipe = tbldatakendaraan.kodetipe', 'LEFT');
        $this->join('tbldatastok', 'tbldatastok.kodestok = tbldatatransfer.kodestok', 'LEFT');
        $this->select('tbltipekendaraan.*');
        $this->select('tbldatastok.*');
        $this->select('tbldatatransfer.*');
        $this->orderBy('tbldatatransfer.nobukti');
        $result = $this->findAll();
    
        echo $this->db->getLastQuery();
    
        return $result;
    }

    public function CreateCode()
    {
        $data = $this->table('tbldatastok')
        ->selectMax('kodestok')
        ->get()->getResultArray();
        return $data;  
    }

}
