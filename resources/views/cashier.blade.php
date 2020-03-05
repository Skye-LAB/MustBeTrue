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
                            <label class="input-group-text" for="inputGroupSelect01">Order ID</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
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
                    <tbody>
                        @foreach ($order as $o)
                        <tr>
                        <td>{{$loop->iteration}}</td>  
                        <td>{{}} </td>  
                        <td>{{}} </td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
              <div class="row">
                  <div class="col-lg-4 mx-auto">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend ">
                              <label class="input-group-text" for="inputGroupSelect01">Payment Type</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                              <option value="Credit Card">Credit Card</option>
                              <option value="Cash">Cash</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 mx-auto">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend ">
                              <label class="input-group-text" for="inputGroupSelect01">Bank</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
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
                          <input type="text" class="form-control" placeholder="0xxx-xxxx-xxxx">
                      </div>
                  </div>
              </div>
            </div>
            <center>
                <button class="btn btn-primary mx-auto" type="submit">Save</button>
            </center>
        </div>
    </div>
</div>
@endsection
