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
