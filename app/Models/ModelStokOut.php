<?php
namespace App\Models;
use CodeIgniter\Model;
class ModelStokOut extends Model
{
    protected $table = 'tbldatapenjualan';
    //protected $primaryKey = 'nobukti';
    protected $allowedFields = [
        'kodestok',
         'nospk',
          'namasales',
          'namakonsumen',
          'tgldo',
          'createdby',
          'createddate'
    ];

    public function tampildata()
    {
        $data = $this->table('tbldatapenjualan')->join('tbldatastok','tbldatastok.kodestok=tbldatapenjualan.kodestok')
        ->join('tbldatakendaraan','tbldatastok.kodestok=tbldatakendaraan.kodestok')->get()->getResultArray();
        return $data;
        
    }

    public function CreateCode()
    {
        $data = $this->table('tbldatastok')
        ->selectMax('kodestok')
        ->get()->getResultArray();
        return $data;  
    }

}
