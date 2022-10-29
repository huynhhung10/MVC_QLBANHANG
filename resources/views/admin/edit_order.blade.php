@extends('admin_layout')
@section('admin_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<link rel="stylesheet" href="{{('frontend/css/base.css')}}">
<link rel="stylesheet" href="{{('frontend/css/main.css')}}">
<link rel="stylesheet" href="{{('frontend/css/sell.css')}}">
<link rel="stylesheet" href="{{('frontend/css/detail.css')}}">
<link rel="stylesheet" href="{{('frontend/css/historyPayment.css')}}">
<link rel="stylesheet" href="{{('frontend/css/payment.css')}}">
<link rel="stylesheet" href="{{('frontend/css/cart.css')}}">
<link rel="stylesheet" href="{{('frontend/css/signInSignUp.css')}}">
<link rel="stylesheet" href="{{('frontend/css/accountInfo.css')}}">

<link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />   --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<script src="{{asset('frontend/js/Validator.js')}}"></script>


        <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                <div class="car"></div>
                    <div class="card mb-4">
                        <div class="card-header"><strong>Sửa</strong><span class="small ms-1">order</span></div>
                            <div class="card-body">
                                <form class="row g-3" style="padding:20px 20px;">
                                    <div class="col-md-4">
                                        <label for="inputEmail4" class="form-label">Tên người dùng</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPassword4" class="form-label">Order code</label>
                                        <input type="number" class="form-control" id="inputAddress">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputPassword4" class="form-label">SĐT</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Chọn Username</label>
                                        <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Chọn sản phẩm</label>
                                        <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                        </select>
                                    </div>
                                    

                                    {{--  --}}
                                    <div class="app__detail">
                                        <div class="grid">
                                            <div class="detail__container">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="detail__imgbox">
                                                            <img class="detail__img" src="{{('frontend/img/products/bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="detail__info">
                                                            <h2 class="detail-info__title">Muốn Nhanh Thì Phải Từ - Từ của Hoàng Long</h2>
                                                            <div class="detail-info__box">
                                                                <span>Tác giả:</span>
                                                                <p class="detail-info__author">Hoàng Long</p>
                                                            </div>
                                                        
                                    
                                                            <div class="detail-info__quantitybox">
                                                                <span>Số lượng:</span>
                                                                <div class="detail-info__quantify quantity">
                                                                    <button class="quantify-down quantify__down quantify__btn">-</button>
                                                                    <p class="quantify-num quantify__num">1</p>
                                                                    <button class="quantify-up quantify__up quantify__btn">+</button>
                                                                </div>
                                                            </div>
                                    
                                                            <!-- <p class="detail-info__phone">Gọi đặt hàng: <span>079 2345 8732</span> hoặc <span>089 1293 833</span></p> -->
                                                        
                                    
                                                            <div class="detail-info__desc">
                                                                <span>Mô tả:</span>
                                                                <p class="detail-info-desc__content">
                                                                    Có rất là nhiều chữ ở đây nha, Có rất là nhiều chữ ở đây nha, 
                                                                    Có rất là nhiều chữ ở đây nha, Có rất là nhiều chữ ở đây nha, 
                                                                    rất là nhiều chữ ở đây nha, rất là nhiều chữ ở đây nha, rất là nhiều chữ ở đây nha
                                                                </p>
                                                            </div>
                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                               {{--  --}}


                            <div class="col-md-4">
                                <label for="inputState" class="form-label">trạng thái</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">sửa order</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection