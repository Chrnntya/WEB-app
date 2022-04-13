<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCabang extends Model
{
    protected $table = 'tbltipekendaraan';

    public function getTipeKendaraan()
    {
        return $this->findAll();
    }
}