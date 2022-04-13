<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    protected $table            = 'tbluser';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'username',
        'pass',
        'email',
        'namalengkap',
        'cabang',
        'akses',
        'isaktif',
        'createdby',
        'created_at',
        'updated_at'
    ];

    
}
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    protected $table            = 'tbluser';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'username',
        'pass',
        'email',
        'namalengkap',
        'cabang',
        'akses',
        'isaktif',
        'createdby',
        'created_at',
        'updated_at'
    ];

    
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
