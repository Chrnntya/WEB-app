<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStokBarang extends Model
{
    protected $table = 'tbldatastok';
    protected $primaryKey = 'kodestok';
    protected $allowedFields = [
        'kodestok', 'jenisstok','statusstok','lokasi','keterangan','ispublish','createdby','createddate','terjual'
    ];

    
}