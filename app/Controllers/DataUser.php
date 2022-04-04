<?php

namespace App\Controllers;

use App\Models\ModelUser;

class DataUser extends BaseController
{
    public function index()
    {
        $SA = new ModelUser();
        $dataSA = $SA->getUser();
        return view('admin-super/v_datasuperadmin', compact('dataSA'));
    }
    public function dataadmin()
    {
        return view('admin-super/v_dataadmin');
    }
    public function datapegawai()
    {
        //return view('layouts/super-admin/header');
        return view('admin-super/v_datapegawai');
       // return view('layouts/super-admin/footer');
    }

}
