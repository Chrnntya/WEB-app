<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTransfer;

class TransferIn extends BaseController
{
    public function __construct()
    {
        $this->transferIn = new ModelTransfer();
    }
    public function index()
    {
        $data = [
            'tampilstok' => $this->transferIn->tampildata()
        ];
        return view('admin-super/transferin/viewstokin',$data);
    }
}
=======
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTransfer;

class TransferIn extends BaseController
{
    public function __construct()
    {
        $this->transferIn = new ModelTransfer();
    }
    public function index()
    {
        $data = [
            
            'tampilstok' => $this->transferIn->tampildata()
        ];
        return view('admin-super/transferin/viewstokin',$data);
    }
}
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
