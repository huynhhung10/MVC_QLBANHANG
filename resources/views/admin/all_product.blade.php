@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Sản phẩm</span></div>
            <div class="card-body">
            <a href="{{URL::to('/add-product')}}" class="btn btn-primary active"  aria-pressed="true" style="background-color: green; float:right">Thêm sản phẩm</a>
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
                          <th>Tên sản phẩm</th>
                          <th>Hình sản phẩm</th>
                          <th>Số lượng</th>
                          <th>Giá</th>
                          <th>Hiển thị</th>
                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <th scope="row">{{ $product->id }}</th>
                          <td>{{ $product->name }}</td>
                          <td><img src="storage/product_images/{{ $product->name}}.jpg" class="rounded mx-auto d-block" alt="..."></td>
                          <td>{{ $product->quantity }}</td>
                          <td>{{ $product->price }}</td>
                          
                          <td>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          <td>
                            <form method="get" action="edit-product">
                              <input type="hidden" name="id" value="{{ $product->id }}"/>
                              <input type="submit" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color: #5DADE2;border: black " value="Sửa"/>
                            </form> 
                            <form method="post" action="product-destroy">
                              <input type="hidden" name="id" value="{{ $product->id }}"/>
                              <input type="submit" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color: #E74C3C; border: black" value="Xóa"/>
                            </form> 
                          </td>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

                
              </div>

              
            </div>
            
          </div>
          <nav aria-label="Page navigation example" style="float:right">
            <ul class="pagination">
               <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
            </ul>
          </nav>
          
        </div>
        
    </div>

    
@endsection