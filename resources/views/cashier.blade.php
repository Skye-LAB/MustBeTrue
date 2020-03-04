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
                                      <th>Harga</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                      <center>
                        <button class="btn btn-primary mx-auto" type="submit">Save</button>
                      </center>
                  </div>
              </div>
          </div>
@endsection
