<?php

namespace App\Controllers;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('admin-super/index');
    }
    public function cabang()
    {
        return view('admin-super/cabang');
    }
    public function databarang()
    {
        //return view('layouts/super-admin/header');
        return view('admin-super/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        return view('admin-super/stokbarang');
    }
}
