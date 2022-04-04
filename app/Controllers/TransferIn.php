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
