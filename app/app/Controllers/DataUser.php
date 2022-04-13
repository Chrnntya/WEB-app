<?php

namespace App\Controllers;

class DataUser extends BaseController
{
    public function index()
    {
        return view('admin-super/v_datasuperadmin');
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
