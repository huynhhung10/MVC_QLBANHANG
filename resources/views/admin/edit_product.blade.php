@extends('admin_layout')
@section('admin_content')

<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Sửa</strong><span class="small ms-1">sản phẩm</span></div>
                    <div class="card-body">
                        <form method="post" action="updateproduct" class="row g-3" enctype='multipart/form-data' class="row g-3" style="padding:20px 20px;">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tên sản phảm</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="description" id="ckeditor1" placeholder="{{ $product->description }}"></textarea>
                            </div>
                            <label for="inputAddress" class="form-label">Hình Ảnh</label>
                            <div class="input-group mb-3">
                                
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" name="image" class="form-control" id="inputGroupFile01">
                            </div>
                        
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">NXB</label>
                                <select name="brand" id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Thể loại</label>
                                <select name="category" id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>

                            

                            <div class="col-md-2">
                                <label for="inputCity" class="form-label">Số lượng</label>
                                <input type="number"  data-validation="number" class="form-control" name="quantity" id="inputCity" value="{{ $product->quantity }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Giá</label>
                                <input type="number" class="form-control" name="price" id="inputZip" placeholder="vnđ" value="{{ $product->price }}">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Sản phẩm nổi bật
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Hiển thị
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green; float:right">Sửa sản phẩm</button>
                                </div>
                            </div>
                           <input type="hidden" name="id" value="{{ $product->id }}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection