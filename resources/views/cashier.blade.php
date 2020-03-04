@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<table class="table table-dark">
    <tr>
        <td>ID</td>
        <td>Menu ID</td>
        <td>Order ID</td>
        <td>Nama Makanan</td>
        <td>Qty</td>
        <td>Harga</td>
    </tr>
    @foreach ($detail as $d)
    <tr>
        <td>{{$d->detail_id}}</td>
        <td>{{$d->menu_id}}</td>
        <td>{{$d->order_id}}</td>
        <td>{{$d->Menu->nama_menu}}</td>
        <td>{{$d->qty}}</td>
        <td>{{$d->price}}</td>
    </tr>
    @endforeach
</table>
@endsection