@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('paymentCss')
<link rel="stylesheet" href="/css/paymentCss.css">
@endsection

@section('isi')
<div class="container">
  <div class="row col">
    @foreach ($pesanan as $key)
    <div class="card col-lg-12 mx-auto">
      <div class="row no-gutters">
        <div class="col-lg-2 my-auto ">
          <img src="https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Mybox_20190904.png" class="card-img">
        </div>
        <div class="col-lg-10">
          <div class="card-body">
            <h5 class="card-title">{{$key->menu->nama_menu}}</h5>
            <h6 class="text-muted card-subtitle mb-2">Harga: Rp {{$key['price']}}</h6>
            <div class="row">
              <div class="col">
                <div class="def-number-input number-input safari_only">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">
                    <ion-icon name="remove"></ion-icon>
                  </button>
                  <input class="quantity" min="1" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                    <ion-icon name="add"></ion-icon>
                  </button>
                </div>
              </div>
              <div class="col">
                <h6 class="text-muted text-right mb-2" id="subtot"></h6>
              </div>
            </div>
            <button id="btn" class="btn btn-success">Order</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection

@section('js')
{{-- <script>
  let qty = $('.quantity')

  setInterval(function (){
    if(qty.val() < 1){

      qty.val(1)
    }
    let harga = "{{$pesanan['harga']}}" * qty.val();
    $('#subtot').text(`Rp.${harga}`);
  }, 50);
$(document).on('click','#btn',function () {
  $.ajax({
    type: "post",
    url: "{{url('order/ajax/'.$pesanan->id)}}",
    data:{
      '_token': "{{csrf_token()}}",
    },
    dataType: "json",
    success: function (response) {
      swal()
    }
  });
});

$('#subtot').append('<span>aaa</span>')

</script> --}}
@endsection
