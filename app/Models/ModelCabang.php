<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCabang extends Model
{
    protected $table = 'tblcabang';
    protected $primaryKey = 'kodecabang';
    protected $allowedFields = ['kodecabang', 'namacabang', 'createdby','createddate'];
}