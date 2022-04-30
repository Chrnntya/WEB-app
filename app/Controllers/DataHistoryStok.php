<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelHistoryStok;

class DataHistoryStok extends BaseController
{
    public function __construct()
    {
        $this->historyStok = new ModelHistoryStok();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->historyStok->findAll()
        ];
        return view('admin-super/history-stok/viewshistory',$data);
    }
}
