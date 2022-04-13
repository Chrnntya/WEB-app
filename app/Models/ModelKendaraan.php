<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKendaraan extends Model
{
    protected $table = 'tbldatakendaraan';
    // protected $primaryKey = 'kodecabang';
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
    
}
