<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPameran extends Model
{
    protected $table = 'tbldatapameran';
    // protected $primaryKey = 'kodecabang';
    protected $allowedFields = [
        'nobukti',
        'cabang',
        'tglawalpameran',
        'tglakhirpameran',
        'namasupir',
        'dibuatoleh',
        'dikonfirmasioleh',
        'isconfirmed',
        'kodestok',
        'keterangan',
        'createdby',
        'createddate'
          
    ];

    public function tampildata()
    {
        $data = $this->table('tbldatapameran')->join('tbldatastok','tbldatastok.kodestok=tbldatapameran.kodestok')->get()->getResultArray();
        return $data;
        
    }
    

    public function CreateCode()
    {
        $data = $this->table('tbldatapameran')
        ->selectMax('nobukti')
        ->get()->getResultArray();
        return $data;  
    }
    
}
