@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Sửa</strong><span class="small ms-1">khách hàng</span></div>
                    <div class="card-body">
                        <form  action="posteditcustomer" method="post" enctype="multipart/form-data" class="row g-3" style="padding:20px 20px;">
                            @csrf
                            <input type="hidden" value="{{$customer->id}}" name="id">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên khách hàng</label>
                                <input type="text" name="Name" value="{{$customer->Name}}" class="form-control" id="Name">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" name="Email" value="{{$customer->Email}}" class="form-control" id="Email">
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="text" name="Phone" value="{{$customer->Phone}}" class="form-control" id="Phone">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input type="text" name="Username" value="{{$customer->Username}}" class="form-control" id="Username">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="Pass" value="{{$customer->Password}}" class="form-control" id="Pass">
                            </div>
                            <label for="inputAddress" class="form-label">Avatar</label>
                            <div class="input-group mb-3">
                                <img src="./backend/images/customer/{{$customer->Avatar}}" class="rounded mx-auto d-block" style="width: 100px"  alt="{{$customer->Avatar}}">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" name="Avatar" class="form-control" id="Avatar">
                            </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" @if($customer->Status == 1) checked  @endif id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Khóa
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Sửa khách hàng</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
