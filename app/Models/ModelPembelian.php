<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPembelian extends Model
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
        $data = $this->table('tbldatapembelian')->join('tbldatastok','tbldatastok.kodestok=tbldatapembelian.kodestok')->get()->getResultArray();
        return $data;
        
    }
    
    
}
