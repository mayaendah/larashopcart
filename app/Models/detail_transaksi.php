<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;
    protected $table='detail_transaksis';
    protected $fillable=[
        'id_header_transaksi','id_product','jumlah'
    ];

    // static function tambah_detail_transaksi($id_header_transaksi,$id_product,$jumlah){
    //     detail_transaksi::create([
    //         'id_header_transaksi'=>$id_header_transaksi,
    //         'id_product'=>$id_product,
    //         'jumlah'=>$jumlah
    //     ]);

    // }
}
