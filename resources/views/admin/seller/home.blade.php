@extends('admin.manage.layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="m-0">Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang tổng quan</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-wallet"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Ví</span>
                    <span class="info-box-number">
                        1
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fab fa-product-hunt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sản phẩm đang bán</span>
                    <span class="info-box-number"></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Đơn hàng</span>
                    <span class="info-box-number"></span>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
