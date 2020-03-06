@extends('layouts.app')


@section('title', 'Cashier | Foody')

@section('isi')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <label class="input-group-text" for="order">Order ID</label>
                        </div>
                        <select class="custom-select" id="order">
                            @foreach ($order as $o)

                            <option value="{{$o->order_id}}">{{$o->order_id}}</option>
                            @endforeach
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
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody id="dataOrder">
                    </tbody>
                </table>
                <span id="tot"></span>
            </div>
            <div class="col">
                <form action="{{ url('input/payment') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend ">
                                    <label class="input-group-text" for="payment">Payment Type</label>
                                </div>
                                <select class="custom-select" id="payment" name="payment">
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="credit">
                        <div class="row">
                            <div class="col-lg-4 mx-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <label class="input-group-text" for="inputGroupSelect01">Bank</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="bank">
                                        <option selected value="BNI">BNI</option>
                                        <option value="BRI">BRI</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mx-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <label class="input-group-text" for="inputGroupSelect01">Card Number</label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="0xxx-xxxx-xxxx"
                                        name="card_number">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <center>
                <button class="btn btn-primary mx-auto" type="submit">Save</button>
            </center>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    let price =0
                    setInterval(()=>{
                        $('#tot').text(`Rp.${price}`)
                    },500)
    function getFromOrder() { 
        $.ajax({
                type: "post",
                url: `get/order/${order.val()}`,
                data: {
                    '_token' : "{{csrf_token()}}"
                },
                dataType: "json",
                success: function (response) {
                    let data = ''
                    response.forEach(element => {
                    data += `<tr>
                                                <td>${element['detail_id']}</td>
                                                <td>${element['menu_id']}</td>
                                                <td>${element['qty']}</td>
                                                <td>${element['qty']*element['price']}</td>
                                            </tr>`
                    price += element['price']
                    });
                    if (data == data) {
                        
                    $('#dataOrder').html(data)
                    }else{
                        data = ''
                    }
                }
            });
     }
    let order = $('#order')
    $(document).ready(function () {
       getFromOrder() 
        if ($('#payment').val()=='Cash') {
        $('.credit').hide()
            
        }
    $('#order').on('change',function () { 
       getFromOrder() 
            
        });
    });
    $('#payment').on('change', function () {
        if ($('#payment').val()=='Cash') {
        $('.credit').hide()
            
        }else{
        $('.credit').show()

        }
    });
</script>
@endsection