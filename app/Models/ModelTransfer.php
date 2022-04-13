<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransfer extends Model
{
    protected $table = 'tbldatatransfer';
    protected $primaryKey = 'nobukti';
    protected $allowedFields = [
        'nobukti',
         'statustransfer',
          'lokasitujuan',
          'tglterima',
          'tglkirim',
          'namasupir',
          'ditransferoleh',
          'diterimaoleh',
          'keterangan',
          'kodestok',
          'createdby',
          'createddate'
    ];

    public function tampildata()
    {
        $data = $this->table('tbldatatransfer')->join('tbldatastok','tbldatastok.kodestok=tbldatatransfer.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')->get()->getResultArray();
        return $data;
        
    }
    public function tampildata_in()
    {
        $data = $this->table('tbldatatransfer')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatatransfer.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('statustransfer','DRAFT')
        ->orderBy('tglkirim')
        ->get()->getResultArray();
        return $data;
        
    }
    public function tampildata_out()
    {
        $data = $this->table('tbldatatransfer')
        ->join('tbldatastok','tbldatastok.kodestok=tbldatatransfer.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')
        ->where('statustransfer','DRAFT')
        ->get()->getResultArray();
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

}
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransfer extends Model
{
    protected $table = 'tbldatatransfer';
    protected $primaryKey = 'nobukti';
    protected $allowedFields = [
        'nobukti',
         'statustransfer',
          'lokasitujuan',
          'tglkirim',
          'tglkirim',
          'namasupir',
          'ditransferoleh',
          'diterimaoleh',
          'keterangan',
          'kodestok',
          'createdby',
          'createddate'
    ];

    public function tampildata()
    {
        $data = $this->table('tbldatatransfer')->join('tbldatastok','tbldatastok.kodestok=tbldatatransfer.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')->get()->getResultArray();
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

}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
