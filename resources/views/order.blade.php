@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<div class="container">
    <div class="row col">
        <label for="">Nama Menu</label>
        <span id="nama">{{$pesanan->nama_menu}}</span>
        <label for="hrg">Harga Satuan :</label>
        <span id="hrg">{{$pesanan->harga}}</span>
        <label for="qty">Qty</label>
        <input type="text" placeholder="Qty" id="qty" name="qty" required>
        <label for="">total price</label>
        <span id="total">Rp.{{$pesanan->harga}}</span>
        <button id="btn" type="button">Order</button>
    </div>
</div>
@endsection
