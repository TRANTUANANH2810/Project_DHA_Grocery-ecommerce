@extends('admin.manage.layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid mb-3">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="m-0">Sản phẩm</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.seller.home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="{!! route('products.store') !!}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-9">
                    <div class="card card-navy card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">Chi tiết sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-image-tab" data-toggle="pill"
                                        href="#custom-tabs-image" role="tab" aria-controls="custom-tabs-image"
                                        aria-selected="false">Thư viện ảnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">Cấu hình SEO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="form-group">
                                        <label><em>Chú thích: * mục bắt buộc nhập thông tin.</em></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm *</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{!! old('name') !!}">
                                        @if ($errors->has('name'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('name')}}</span>    
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Mã sản phẩm (SKU) *</label>
                                        <a href="javascript:void(0)" class="refresh_sku float-right" title="Làm mới"><i class="fas fa-redo-alt"></i></a>
                                        <input type="text" class="form-control" name="sku" id="sku"
                                            value="{!! old('sku') !!}">
                                        @if ($errors->has('sku'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('sku')}}</span>    
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Số lượng</label>
                                                <input type="number" class="form-control" min="0" name="qty" id="price"
                                                    value="{!! old('qty') !!}">
                                                @if ($errors->has('qty'))
                                                <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('qty')}}</span>    
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Giá sản phẩm *</label>
                                                <input type="number" class="form-control" min="0" name="price" id="price"
                                                    value="{!! old('price') !!}">
                                                @if ($errors->has('price'))
                                                <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('price')}}</span>    
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Giá cũ</label>
                                                <input type="number" class="form-control" min="0" value="0" name="price_old" id="price_old"
                                                    value="{!! old('price_old') !!}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Danh mục</label>
                                                <select class="custom-select" name="category_id">
                                                    <option value="">Chọn</option>
                                                    @foreach($category as $item)
                                                    <option value="{{$item->id}}" {{old('category') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('category_id'))
                                                <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('category_id')}}</span>    
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Thông tin sản phẩm</label>
                                                <textarea class="content"
                                                    name="content">{!! old('content', @$data->content) !!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Mô tả chi tiết sản phẩm</label>
                                                <textarea class="content"
                                                    name="description">{!! old('description', @$data->description) !!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        
                        
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Đăng sản phẩm</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="is_active" id="showCheckbox1" value="1" {{old('is_active') == 1 ? 'checked' : ''}}>
									<label for="showCheckbox1" class="custom-control-label">Hiển thị ở trang chủ</label>
								</div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <input name="seller_id" value="{{@Auth::user()->id}}" class="d-none"/>
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Lưu lại</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Hình ảnh đại diện *</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <div class="image">
                                        <div class="image__thumbnail">
                                            <img src="{{ asset('backend/images/placeholder.png')}}"
                                                data-init="{{ asset('backend/images/placeholder.png') }}" class="profile-user-img" id="imageUpload">
                                            <a href="javascript:void(0)" class="image__delete"
                                                onclick="urlFileDelete(this)">
                                                <i class="fa fa-times"></i></a>
                                            <input type="hidden" value="{{old('image')}}" name="image_default" id="image_default"/>
                                            <input type="file" id="upload" name="image" onchange="onFileSelected(event)" class="image__button" style="opacity: 0;">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@section('page_scripts')
<script type="text/javascript">
   function onFileSelected(event) {
    var selectedFile = event.target.files[0];
    var reader = new FileReader();

    var imgAvatar = document.getElementById("imageUpload");
    imgAvatar.title = selectedFile.name;
    var imgDefault = document.getElementById("image_default");


    reader.onload = function (event) {
        imgAvatar.src = event.target.result;
        imgDefault.value = event.target.result;
    };

    reader.readAsDataURL(selectedFile);
    }
</script>
@endsection