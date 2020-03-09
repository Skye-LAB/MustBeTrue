@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('paymentCss')
<link rel="stylesheet" href="/css/paymentCss.css">
@endsection

@section('isi')
<div class="container">
  <div class="row" style="padding-bottom: 60px">
    @foreach ($pesanan as $key)
    <div class="card col-lg-12 mt-2">
      <div class="row no-gutters">
        <div class="col-lg-2 my-auto ">
          <img src="https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Mybox_20190904.png" class="card-img">
        </div>
        <div class="col-lg-10">
          <div class="card-body">
            <h5 class="card-title">{{$key->menu->nama_menu}}</h5>
            <h6 class="text-muted card-subtitle mb-2 harga">Harga: Rp {{$key['price']}}</h6>
            <div class="row">
              <div class="col">
                <div class="def-number-input number-input safari_only">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">
                    <ion-icon name="remove"></ion-icon>
                  </button>
                  <input class="quantity" min="1" name="quantity" value="{{$key->qty}}" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                    <ion-icon name="add"></ion-icon>
                  </button>
                </div>
              </div>
              <div class="col">
                <h6 class="text-muted text-right mb-2 subtot">Rp.{{$key->price*$key->qty}}</h6>
              </div>
            </div>
            <button class="btn btn-success">Order</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="card col-lg-12 pb-2 pt-2 fixed-bottom">
  <div class="row no-gutters">
    <div class="col-lg-2 my-auto ">
      <span class="">Total
        <h6 class="text-muted mt-2" id="total"></h6>
      </span>
    </div>
    <div class="col-lg-10">
      <div class="card-body">
          <div class="col">
          </div>
          <div class="col">
            <button class="btn btn-success float-right">Order</button>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  setInterval(function () {
  let allSub = $('.subtot').text().split('Rp.');
  let arrSub = allSub.splice(1,allSub.length)
  let tot = 0

  arrSub.forEach(element => {
    tot += parseInt(element);
  });
    $('#total').text(`Rp.${tot}`)
    },70)


  $('.card-body').on('click',function (e) {
    let findPrice = $(this).find('.harga').text().replace(/Harga: Rp./y,'');
    let findQtyVal = $(this).find('.quantity').val();
    let findSubtotOf = $(this).find('.subtot');
    let subTot = findPrice * findQtyVal;
    sessionStorage.setItem('subtot', subTot)

    findSubtotOf.text(`Rp.${sessionStorage.getItem('subtot')}`)

  });

</script>
@endsection
