<?php

namespace App\Controllers;

use App\Models\ModelPameran;

class ShowRoom extends BaseController
{
    public function __construct()
    {
        $this->dataPameran = new ModelPameran();
    }
    public function index()
    {
        return view('admin-super/showroom/index');
    }
    public function transfer()
    {
        return view('admin-super/showroom/transfer');
    }
    public function publish()
    {
        //return view('layouts/super-admin/header');
        return view('admin-super/showroom/publish');
       // return view('layouts/super-admin/footer');
    }

    public function pameran()
    {
        $data = [
            'tampildata' => $this->dataPameran->findAll()
        ];
        return view('admin-super/pameran/viewspameran',$data);
    }
    
}
