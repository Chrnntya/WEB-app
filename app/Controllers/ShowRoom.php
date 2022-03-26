<?php

namespace App\Controllers;

class ShowRoom extends BaseController
{
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
    
}
