<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'nama_product','harga_satuan'
    ];

    static function list_product(){
        $data=product::all();
        return $data;
    }

    static function tambah_product($nama_product,$harga_satuan){
        product::create([
            'nama_product'=>$nama_product,
            'harga_satuan'=>$harga_satuan
        ]);
    }

    static function detail_product($id_product){
        $data=product::where('id_product',$id_product)->first();
        return $data;
    }
}
