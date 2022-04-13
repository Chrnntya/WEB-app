<<<<<<< HEAD
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
=======
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
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
}