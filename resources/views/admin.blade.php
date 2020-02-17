@extends('layouts.app')

@section('title', 'Admin | Foody')

@section('isi')
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Menu</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Employee</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Guest</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col">
                        <a class="btn btn-primary action-button mr-1" role="button" href="#" data-toggle="modal" data-target="#addEM">Add Menu</a>
                        <div class="modal fade" role="dialog" tabindex="-1" id="addEM">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Employee</h4><button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="person"></ion-icon>
                                                </span></div><input class="form-control" type="text"
                                                placeholder="Username" name="username">
                                            <div class="input-group-append"></div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="mail"></ion-icon>
                                                </span></div><input class="form-control" type="text" placeholder="Email"
                                                name="email">
                                            <div class="input-group-append"></div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="lock-closed"></ion-icon>
                                                </span></div><input class="form-control" type="text"
                                                placeholder="Password" name="password">
                                            <div class="input-group-append"></div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="call"></ion-icon>
                                                </span></div><input class="form-control" type="text"
                                                placeholder="No. HP" name="hp">
                                            <div class="input-group-append"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary"
                                            type="button">Submit</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Photo</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menu as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->nama_menu}}</td>
                                        <td><img src="{{asset('img/menu/'.$d->photo)}}" alt=""></td>
                                        <td><button class="btn btn-success" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Hapus</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-2">
            <div class="container">
                <div class="row mt-4">
                    <div class="col">
                        <a class="btn btn-primary action-button mr-1" role="button" href="#" data-toggle="modal"
                            data-target="#addMe">Add Employee</a>
                        <div class="modal fade" role="dialog" tabindex="-1" id="addMe">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Employee</h4><button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="person"></ion-icon>
                                                </span></div><input class="form-control" type="text"
                                                placeholder="Username" name="username">
                                            <div class="input-group-append"></div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <ion-icon name="mail"></ion-icon>
                                                </span></div><input class="form-control" type="text" placeholder="Email"
                                                name="email">
                                            <div class="input-group-append"></div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <ion-icon name="document"></ion-icon>
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-primary"
                                            type="button">Submit</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        {{-- <th>Password</th> --}}
                                        <th>No. Hp</th>
                                        <th>Position</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($employee as $k)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$k->nama_employee}}</td>
                                        <td>{{$k->email}}</td>
                                        {{-- <td>{{$k->password}}</td> --}}
                                        <td>{{$k->hp}}</td>
                                        <td>{{$k->position}}</td>
                                        <td><button class="btn btn-success" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Hapus</button></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Position</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($user as $d)
                                      <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$d->username}}</td>
                                          <td>{{$d->email}}</td>
                                          {{-- <td>{{$d->password}}</td> --}}
                                          <td>{{$d->hp}}</td>
                                          <td>{{$d->position}}</td>
                                          <td><button class="btn btn-success" type="button">Edit</button>
                                              <button class="btn btn-danger" type="button">Hapus</button></td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
