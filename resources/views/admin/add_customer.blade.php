@extends('admin_layout')
@section('admin_content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">khách hàng</span></div>
                    <div class="card-body">
                        <form action="postaddcustomer" method="post" enctype="multipart/form-data" class="row g-3" style="padding:20px 20px;">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên khách hàng</label>
                                <input type="text" name="Name" class="form-control" id="Name">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" name="Email" class="form-control" id="Email">
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="text" name="Phone" class="form-control" id="Phone">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input type="text" name="Username" class="form-control" id="Username">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="Password" class="form-control" id="Password">
                            </div>
                            <label for="inputAddress" class="form-label">Avatar</label>
                            <div class="input-group mb-3">

                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" name="Avatar" class="form-control" id="Avatar">
                            </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="status">
                                <label class="form-check-label" for="gridCheck">
                                    Khóa
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Thêm khách hàng</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
