<<<<<<< HEAD
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

    
=======
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

    
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}