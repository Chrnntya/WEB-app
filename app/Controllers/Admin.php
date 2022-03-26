<?php

namespace App\Controllers;

class Admin extends BaseController
{
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
        return view('admin/stokbarang');
    }
}
