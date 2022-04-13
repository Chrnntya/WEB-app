<<<<<<< HEAD
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
=======
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
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
