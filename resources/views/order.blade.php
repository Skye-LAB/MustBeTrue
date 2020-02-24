@extends('layouts.app')

@section('title', 'Foody | Food Daily')

@section('isi')
<div class="container">
    <div class="row col">
        <label for="">Nama Menu</label>
        <span id="nama">{{$menuPesan->nama_menu}}</span>
        <label for="hrg">Harga Satuan :</label>
        <span id="hrg">{{$menuPesan->harga}}</span>
        <label for="qty">Qty</label>
        <input type="text" placeholder="Qty" id="qty" name="qty" required>
        <label for="">total price</label>
        <span id="total">Rp.{{$menuPesan->harga}}</span>
        <button id="btn" type="button">Order</button>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    const price = $("#hrg").text()
    let count = price, qty;

    $('#qty').keyup(()=>{

    qty = $('#qty').val()

    if ($('#total').text() == "NaN") {
        alert('Yang anda masukkan Bukan digit')
    }else{
     count = price * qty
        $('#total').text(`Rp.${count}`)
    }

    })

    // $.ajax({
    //     type: "post",
    //     url: "/pay",
    //     data: {
    //         nama_menu: $('#nama').text(),
    //         qty : qty,
    //         p
    //     },
    //     dataType: "dataType",
    //     success: function (response) {
            
    //     }
    // });
</script>
@endsection