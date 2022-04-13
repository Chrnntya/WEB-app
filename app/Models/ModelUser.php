<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'tbluser';

    public function getUser()
    {
        return $this->findAll();
    }
}