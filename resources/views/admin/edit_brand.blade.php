@extends('admin_layout')
@section('admin_content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Sửa</strong><span class="small ms-1">Nhà xuất bản</span></div>
                    <div class="card-body">
                        <form action="posteditbrand" method="post" enctype="multipart/form-data" class="row g-3" style="padding:20px 20px;">
                            @csrf
                            <input type="hidden" value="{{$brand->id}}" name="id">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Tên NXB</label>
                                <input type="text" class="form-control" id="brandname" name="brandname" value="{{$brand->Brand_Name}}">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="brand_desc" id="brand_desc" placeholder="Mô tả NXB">{{"Nhà Xuất Bản"}}</textarea>
                            </div>
                            <label for="inputAddress" class="form-label">Logo</label>
                            <div class="input-group mb-3">
                                <img src="./backend/images/brand/{{$brand->Brand_Logo}}" class="rounded mx-auto d-block" style="width: 100px"  alt="{{$brand->Brand_Logo}}">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>




                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="status" name="status" @if($brand->Status == 1) checked  @endif>
                                    <label class="form-check-label" for="gridCheck">
                                        Hiển thị
                                     </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green; float: right">Sửa nhà xuất bản</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
