@extends('layout.layout1')
@section('title','Quản lý tài khoản')
@section('main-container')
    <div class="row mt-3">
        <div class="col-md-6">
            <label for=""><b>Tên tài khoản</b></label>
            <input type="text" class="form-control" id='username' placeholder="Tên tài khoản">
        </div>
        <div class="col-md-6">
            <label for=""><b>Email người dùng </b></label>
            <input type="text" class="form-control" id='email' placeholder="Email tài khoản">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <button id="addUserBtn" class="btn btn-success disabled">Thêm tài khoản</button>
        </div>
    </div>
@endsection
