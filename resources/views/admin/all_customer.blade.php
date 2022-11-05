@extends('admin_layout')
@section('admin_content')
    @if (Session::has('edit-success'))
        <div class="alert alert-success">
                {!! Session::get('edit-success') !!}         
        </div>
    @elseif (Session::has('delete-success'))
        <div class="alert alert-success">  
                {!! Session::get('delete-success') !!}
        </div>
    @endif
    <div class="toast" data-autohide="false">
        <div class="toast-header">
            <strong class="mr-auto text-primary">Success</strong>
            <small class="text-muted">Just Now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            Thay đổi trạng thái thành công!!!
        </div>
    </div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Khách hàng</span></div>
            <div class="card-body">
            <a href="{{URL::to('/add-customer')}}" class="btn btn-primary active" aria-pressed="true" style="background-color: green; float:right; border: black">Thêm khách hàng</a>
            <div class="col-md-4">
                <input type="text" class="form-control" id="inputZip" placeholder="Tìm kiếm">
            </div>



              <div class="example">

                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                  <table class="table">
                      <thead style="background-color: #C9C4C3 ">
                        <tr>
                          <th>Stt</th>
                          <th>Avatar</th>
                          <th>Tên khách hàng</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>SĐT</th>
                          <th>Khóa tài khoản</th>
                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php
                          $id = 1;
                      @endphp
                      @foreach($customer as $key)
                        <tr>
                          <th scope="row">{{$id}}</th>
                          <td><div class="avatar avatar-md"><img class="avatar-img" src="./backend/images/customer/{{$key->Avatar}} " alt="{{$key->Avatar}}"></div></td>
                          <td>{{$key -> Name}}</td>
                          <td>{{$key -> Username}}</td>
                          <td>{{$key -> Email}}</td>
                          <td>{{$key -> Phone}}</td>

                          <td style="float: center">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="changeStatus" onclick="changeStatus({{$key->id}},{{$key->Status}})" value="{{$key->Status}}" id="flexSwitchCheckChecked" @if($key->Status == 1) checked  @endif>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          <td>
                            <a href="{{URL::to('/edit-customer')}}/{{$key->id}}" class="btn btn-primary active" aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/delete-customer')}}/{{$key->id}}" class="btn btn-primary active" role="button"  aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
                          </td>
                        </tr>

                        @php
                            $id++;
                        @endphp
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>


              </div>


            </div>

          </div>
          <nav aria-label="Page navigation example" style="float:right">
              <div>
                  {{$customer->links('pagination::bootstrap-4')}}
              </div>
          </nav>

        </div>

    </div>
    <script>

        function changeStatus(id){
            console.log(id);
            var status = 0;
            if(document.getElementById('flexSwitchCheckChecked').checked){
                status = 1;
            }
            else{
                status = 0;
            }
            var myurl = "/change-status-customer/id="+id+"&status="+status+"/";
            $.ajax({
                url :myurl ,
                type: "GET",
                dataType: "json",
                success: function(data)
                {
                    if(data.status == "success") {
                        toastr.success('Thay đổi trạng thái thành công!', "Success");
                    }
                    else{
                      toastr.warning("Xảy ra lỗi!!!","Fail");
                    }
                    
                }
            });
        }
    </script>

@endsection
