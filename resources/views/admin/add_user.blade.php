@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">Người dùng</span></div>
                    <div class="card-body">
                        <form action="postadduser" enctype="multipart/form-data" class="row g-3" style="padding:20px 20px;">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên người dùng</label>
                                <input type="text" name="Name" class="form-control" id="Name">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" name="UserEmail" class="form-control" id="UserEmail">
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="text" name="UserPhone" class="form-control" id="UserPhone">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input type="text" name="UserName" class="form-control" id="UserName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="UserPass" class="form-control" id="UserPass">
                            </div>
                            <label for="inputAddress" class="form-label">Avatar</label>
                            <div class="input-group mb-3">


                                <input type="file" name="UserAvatar" class="form-control" id="UserAvatar">
                            </div>


                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Quyền</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Thêm user</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
