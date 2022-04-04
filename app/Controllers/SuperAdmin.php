<?php

namespace App\Controllers;

use App\Models\ModelCabang;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('admin-super/index');
    }
    // public function cabang()
    // {
    //     $cabang = new ModelCabang();
    //     $dataCabang = $cabang->getCabang();
    //     return view('admin-super/cabang', compact('dataCabang'));
    // }
    public function databarang()
    {
        //return view('layouts/super-admin/header');
        return view('admin-super/databarang');
       // return view('layouts/super-admin/footer');
    }
    public function stokbarang()
    {
        return view('admin-super/showroom/viewstokbarang');
    }
    
}
