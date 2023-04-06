@extends('layout')
@section('judul','list cart')
@section('content')

@if(empty($cart)|| count($cart)==0)
<a href="{{url('/')}}">Beli Product</a>
    tidak ada peoduct di cart
@else


<table cellpadding="10" border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>jumlah</th>
        <th>Sub Total</th>
        <th>&nbsp;</th>
    </tr>
    <?php $no=1;
        $grandTotal=0;
    ?>
    @foreach($cart as $ct=>$val)
    <?php $subTotal=$val['harga_satuan']* $val['jumlah'] ?>
    <tr>
        <td>{{$no++}}</td>
        <td>{{$val['nama_product']}}</td>
        <td>{{$val['harga_satuan']}}</td>
        <td>{{$val['jumlah']}}</td>
        <td>{{$subTotal}}</td>
        <td>
            <a href="{{url('/cart/hapus/'.$ct)}}">batal{{$ct}}</a>
        </td>
    </tr>
    <?php $grandTotal+=$subTotal ?>
    @endforeach
    <tr>
        <th colspan="4"> Grand Total</th>
        <th colspan="2">Rp. {{$grandTotal}}</th>
        <th&nbsp;</th>
    </tr>
</table>
<a href="{{url('/tambah/transaksi')}}">Beli</a>
@endif
@endsection

