<<<<<<< HEAD
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

    public function CreateCode()
    {
        $data = $this->table('tbldatastok')
        ->selectMax('kodestok')
        ->get()->getResultArray();
        return $data;  
    }

    
=======
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

    
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}