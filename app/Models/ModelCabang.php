<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCabang extends Model
{
    protected $table = 'tblcabang';
    protected $primaryKey = 'kodecabang';
    protected $allowedFields = ['kodecabang', 'namacabang', 'createdby','createddate'];
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCabang extends Model
{
    protected $table = 'tblcabang';
    protected $primaryKey = 'kodecabang';
    protected $allowedFields = ['kodecabang', 'namacabang', 'createdby','createddate'];
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}