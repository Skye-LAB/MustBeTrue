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
                    <div class="card-body">
                        <h5 class="card-title">{{$m->nama_menu}}</h5>
                        <h6 class="text-muted card-subtitle mb-2">{{$m->harga}}</h6>
                        <form action="{{ url('order/'.$m->id) }}" method="GET">
                            <button class="btn-order" type="submit">order</button>
                        </form>
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
    $('.btn-order').click(function (e) { 
        e.preventDefault();
        console.log($('.btn-order').attr('id'););
        
    });
</script>
@endsection