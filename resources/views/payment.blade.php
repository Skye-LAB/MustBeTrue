@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<div class="container">
    <div class="row col">
        <label for="">Nama Menu</label>
        <span>{{$pesanan['nama_menu']}}</span>
        <label for="hrg">Harga Satuan :</label>
        <span>{{$pesanan['harga']}}</span>
        <label for="qty">Qty</label>
        <span>{{$pesanan['qty']}}</span>
        <label for="">total price</label>
        <span>Rp.{{$pesanan['total']}}</span>
    </div>
    <div class="row col">
        <h2>Payment</h2>
        
    </div>
</div>
@endsection