@extends('layout')
@section('judul','product')
@section('content')
<table cellpadding="10" border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>&nbsp;</th>
    </tr>
    <?php $no=1; ?>
    @foreach($product as $pro)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$pro->nama_product}}</td>
        <td>{{$pro->harga_satuan}}</td>
        <td>
            <a href="{{url('/cart/tambah/'.$pro->id_product)}}">tambah ke keranjang</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection

