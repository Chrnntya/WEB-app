<?php

namespace App\Controllers;

use App\Models\ModelStokBarang;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->stokbarang = new ModelStokBarang();
    }
    public function index()
    {
        return view('admin/index');
    }
    public function cabang()
    {
        return view('admin/cabang');
    }
    public function databarang()
    {
        //return view('layouts/super-admin/header');
        return view('admin/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        $data = [
            'tampildata' => $this->stokbarang->findAll()
        ];
        return view('admin/showroom/viewstokbarang',$data);
    }
}
