<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = "tbluser";
    protected $primaryKey = "userid";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'pass', 'name','email','namalengkap','cabang','akses','isaktif','createdby'];
}
