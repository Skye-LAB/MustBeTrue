@extends('layouts.app')

@section('title', 'Chef | Foody')

@section('isi')
{{-- <table class="table table-dark">
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
</table> --}}

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <label class="input-group-text" for="inputGroupSelect01">Order ID</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Menu</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <select class="custom-select" id="">
                                <option selected value="pending">Pending</option>
                                <option value="cooking">Cooking</option>
                                <option value="cooked">Cooked</option>
                                <option value="delivery">Delivery</option>
                            </select>
                          </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <center>
                <button class="btn btn-primary mx-auto" type="submit">Save</button>
            </center> --}}
        </div>
    </div>
</div>
@endsection
