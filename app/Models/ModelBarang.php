<<<<<<< HEAD
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
=======
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
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}