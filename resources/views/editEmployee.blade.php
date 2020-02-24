@extends('layouts.app')

@section('isi')
<a class="btn btn-primary action-button mr-1" role="button" href="#" data-toggle="modal" data-target="#editEmp">Edit</a>
<div class="modal fade" role="dialog" tabindex="-1" id="editEmp">
    <div class="modal-dialog" role="document">
        <form action="{{ url('admin/employee/'.$employee->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4><button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <ion-icon name="mail"></ion-icon>
                            </span></div><input class="form-control" type="text" placeholder="Nama Employee"
                            name="nama_employee">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <ion-icon name="lock-closed"></ion-icon>
                            </span></div><input class="form-control" type="text" placeholder="email" name="email">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <ion-icon name="lock-closed"></ion-icon>
                            </span></div><input class="form-control" type="password" placeholder="Password"
                            name="password">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <ion-icon name="lock-closed"></ion-icon>
                            </span></div><input class="form-control" type="text" placeholder="position" name="position">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Submit</button></div>
                </div>
        </form>
    </div>
</div>
@endsection