@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('paymentCss')
  <link rel="stylesheet" href="/css/paymentCss.css">
@endsection

@section('isi')
    <div class="container">
        <div class="row col">
            <div class="card col-lg-12 mx-auto">
                <div class="row no-gutters">
                    <div class="col-lg-2 my-auto ">
                        <img src="https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Mybox_20190904.png"
                            class="card-img">
                    </div>
                    <div class="col-lg-10">
                        <div class="card-body">
                          <h5 class="card-title">{{$pesanan['nama_menu']}}</h5>
                          <h6 class="text-muted card-subtitle mb-2">Harga: Rp {{$pesanan['harga']}}</h6>
                            <div class="row">
                              <div class="col">
                                <div class="def-number-input number-input safari_only">
                                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"> <ion-icon name="remove"></ion-icon> </button>
                                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"> <ion-icon name="add"></ion-icon> </button>
                                </div
                              </div>
                              <div class="col">
                                <h6 class="text-muted text-right mb-2">Total Harga: Rp {{$pesanan['total']}}</h6>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{asset('js/transaksi.js')}}"></script>
@endsection
