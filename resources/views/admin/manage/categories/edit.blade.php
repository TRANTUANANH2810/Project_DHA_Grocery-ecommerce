@extends('admin.manage.layouts.app')

@section('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0">Chỉnh sửa danh mục</h4>
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
       	<form action="{!! route('category.update', $cate->id) !!}" method="POST" enctype="multipart/form-data">
			@csrf
            @method('put')
			<div class="row">
				<div class="col-12 col-sm-9">
					<div class="card card-secondary card-outline card-tabs">
						<div class="card-header p-0 pt-1 border-bottom-0">
							<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Nội dung</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Cấu hình SEO</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="custom-tabs-three-tabContent">
								<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
								
									<div class="form-group">
										<label>Tên danh mục</label>
										<input type="text" class="form-control" name="name" id="name" value="{{$cate->name}}" required>
									</div>
								
									{{-- <div class="form-group">
										<label>Đường dẫn tĩnh</label>
										<input type="text" class="form-control" name="slug" id="slug" value="{!! old('slug') !!}">
									</div> --}}
									
								</div>
								{{-- <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
									<div class="form-group">
										<label>Meta Title</label>
										<label style="float: right;">Số ký tự đã dùng: <span id="countTitle">{{ @$data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0 }}/70</span></label>
										<input type="text" class="form-control" name="meta_title" value="{!! old('meta_title', isset($data->meta_title) ? $data->meta_title : null) !!}" id="meta_title">
									</div>

									<div class="form-group">
										<label>Meta Description</label>
										<label style="float: right;">Số ký tự đã dùng: <span id="countMeta">{{ @$data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0 }}/360</span></label>
										<textarea name="meta_description" class="form-control" id="meta_description" rows="3">{!! old('meta_description', isset($data->meta_description) ? $data->meta_description : null) !!}</textarea>
									</div>

									<div class="form-group">
										<label>Meta Keyword</label>
										<input type="text" class="form-control" name="meta_keyword" value="{!! old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null) !!}">
									</div>

									<div class="form-group">
										<label for="">Schema</label>
										<textarea class="form-control" name="meta_schema" rows="14">{!! old('meta_schema', isset($data->meta_schema) ? $data->meta_schema : null) !!}</textarea>
									</div>
								</div> --}}
							</div>
						</div>
						<!-- /.card -->
					</div>
				</div>
				<div class="col-12 col-sm-3">
					<div class="card card-secondary card-outline">
						<div class="card-header">
							<h3 class="card-title">Đăng danh mục</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="is_active" id="showCheckbox1" value="1" {{$cate->is_active == 1 ? 'checked' : ''}}>
									<label for="showCheckbox1" class="custom-control-label">Hiển thị ở trang chủ</label>
								</div>
							</div>
		                    <div class="text-right">
		                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Lưu lại</button>
		                    </div>
						</div>
					</div>
					<div class="card card-secondary card-outline">
						<div class="card-header">
							<h3 class="card-title">Banner</h3>
						</div>
						<div class="card-body box-profile">
                            <div class="text-center">
                                <div class="image">
                                        <div class="image__thumbnail">
                                            <img src="{{ old('image',@$cate->image) ? old('image',@$cate->image) :  asset('backend/images/placeholder.png')}}"
                                                data-init="{{ asset('backend/images/placeholder.png') }}" class="profile-user-img" id="imageUpload">
                                            <a href="javascript:void(0)" class="image__delete"
                                                onclick="urlFileDelete(this)">
                                                <i class="fa fa-times"></i></a>
                                            <input type="hidden" value="{{old('image',@$cate->image)}}" name="image_default" id="image_default"/>
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