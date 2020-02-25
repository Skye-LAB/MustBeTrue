@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<div class="container">
    <div class="row col" id="proj">
        <label for="">Nama Menu</label>
        <span>{{$pesanan['nama_menu']}}</span>
        <label for="hrg">Harga Satuan :</label>
        <span>{{$pesanan['harga']}}</span>
        <label for="qty">Qty</label>
        <span>{{$pesanan['qty']}}</span>
        <label for="">total price</label>
        <span>Rp.{{$pesanan['total']}}</span>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{asset('js/transaksi.js')}}"></script>
@endsection