<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHistoryStok extends Model
{
    protected $table = 'tblhistoristok';
    protected $allowedFields = ['tglhistori', 'keterangan', 'kodestok','nobukti','createdby','createddate'];
}