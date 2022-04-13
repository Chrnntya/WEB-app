<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTipeKendaraan extends Model
{
    protected $table = 'tbltipekendaraan';
    protected $primaryKey = 'kodetipe';
    protected $allowedFields = [
        'kodetipe', 'merks','tipekendaraan','subtipe','transmisi','isdiscontinued','createdby','createddate'
    ];

    public function CreateCode()
    {
        $data = $this->table('tbltipekendaraan')
        ->selectMax('kodetipe')
        ->get()->getResultArray();
        return $data;  
    }

    
}