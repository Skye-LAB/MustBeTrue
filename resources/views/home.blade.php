@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<div class="container">
    <div class="row col">
        @foreach($menu as $m)
        <div class="card col-lg-5 col-md-6 col-sm-12 mr-2 mb-4 mx-auto">
            <div class="row no-gutters">
                <div class="col-md-4 my-auto">
                    <img src="https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Mybox_20190904.png"
                        class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body menu">
                        <h5 menu="{{$m->id}}" class="card-title">{{$m->nama_menu}}</h5>
                        <h6 class="text-muted card-subtitle mb-2">Harga: {{$m->harga}}</h6>
                        <button class="btn-order btn btn-primary">Order</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>
    $('.menu').click(function (e) {
        let id = this.firstChild.nextSibling.getAttribute('menu');
        console.log(id );
        
        $.ajax({
            type: "post",
            url: `order/ajax/${id}`,
            data: {
                '_token' : "{{csrf_token()}}"
            },
            dataType: "json",
            success: function (response) {
                swal({
                  icon: 'success',
                  title: 'Peringatan!!',
                  text: 'Orderan sudah masuk cart, Silahkan Mengisi qty',
                  button: 'Oke'
                });
            },
            error: function (response) {
                swal(response.statusText)
              }
            
        });
        });
</script>
@endsection