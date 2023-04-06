<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\header_transaksi;
use App\Models\detail_transaksi;

class productController extends Controller
{
    function index(){
        $product=product::list_product();
        return view('product')->with('product',$product);

        // session()->forget('cart');
    }

    function do_tambah_cart($id_product){
        
       $cart=session('cart');
       $product=product::detail_product($id_product);

       $cart[$id_product]=[
        'nama_product'=>$product->nama_product,
        'harga_satuan'=>$product->harga_satuan,
        'jumlah'=>1
       ];

       session(['cart'=>$cart]);

       return redirect('/cart');
    }

    function cart(){
        $cart=session('cart');
        return view('cart')->with('cart',$cart);
    }

    function do_hapus_cart($id_product){
        $cart=session('cart');
        unset($cart[$id_product]);
        session(['cart'=>$cart]);
        return redirect()->back();
    }

    function do_tambah_transaksi(){

        $cart=session('cart');

        $data=header_transaksi::create([
            'tanggal_transaksi'=>date('Y-m-d')
        ]);

        $id_header_transaksi=$data::latest()->first()->id_header_transaksi;
        // dd($id_header_transaksi);

        foreach($cart as $ct=>$val){
            $id_product=$ct;
            $jumlah=$val['jumlah'];
            // detail_transaksi::tambah_detail_transaksi($id_header_transaksi,$id_product,$jumlah);
            detail_transaksi::create([
                'id_header_transaksi'=>$id_header_transaksi,
                'id_product'=>$id_product,
                'jumlah'=>$jumlah
            ]);
        }

        session()->forget('cart');
        return redirect('/cart');
    }
}
