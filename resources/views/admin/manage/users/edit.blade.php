@extends('admin.manage.layouts.app')

@section('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0">Tài khoản người dùng</h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang tổng quan</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Tài khoản người dùng</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
        <form action="{!! route('user.update', $user->id) !!}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
          
                <div class="col-md-4">
    
                    <div class="card card-dark card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <div class="image">
									<div class="image">
										<div class="image__thumbnail" style="outline: 0 !important;">
											<img src="{{ old('image',@$user->image) ? old('image',@$user->image) :  asset('backend/images/default.jpg') }}"
												data-init="{{ asset('backend/images/default.jpg') }}" style="border-radius: 50%;" class="profile-user-img" id="imageUpload">
											<a href="javascript:void(0)" class="image__delete"
												onclick="urlFileDelete(this)">
												<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ old('image',@$user->image) }}" name="image_default" id="image_default" />
											<input  type="file" id="upload" name="image" onchange="onFileSelected(event)" class="image__button"  style="border-radius: 50%;opacity: 0;"/>
										</div>
									</div>
								</div>
                            </div>
                            <h3 class="profile-username text-center">{{ @$user->first_name}} {{ @$user->last_name}}</h3>
                            <p class="text-center">{{@$user->created_at->format('d-m-Y')}}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                @if (@$user->phone)
                                    <li class="list-group-item">
                                        <b>SĐT</b> <a class="float-right">{{ @$user->phone }}</a>
                                    </li> 
                                @endif
                             
                                @if (@$user->email)
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ @$user->email }}</a>
                                    </li>
                                @endif

                                <li class="list-group-item">
                                    <b>Trạng thái</b> 

                                    @if ($user->is_active == 1 )
                                    <a class="float-right">
                                        <span class="badge badge-success">Đang hoạt động</span>
                                        </a>
                                    </li>
                                    @else
                                    <a class="float-right">
                                        <span class="badge badge-danger">Đang khóa</span>
                                        </a>
                                    </li>
                                    @endif
                                </li>

                            </ul>
                            <div class="text-right">
                                <input type="text" class="d-none" name="user_id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Lưu lại</button>
                            </div>
                        </div>
                    </div>
    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Sổ địa chỉ</h3>
                        </div>
                        <div class="card-body">
                            <div class="bg-white">
                                <div class="row">
                                    <p class="text-muted">Chưa có địa chỉ</p>
                                </div>
                                
                                <div class="border p-3 c-pointer text-center bg-light has-transition hov-bg-soft-light h-100 d-flex flex-column justify-content-center" onclick="add_new_address()">
                                    <i class="fas fa-plus mb-2"></i>
                                    <div class="fw-700">Add New Address</div>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                        </div>
    
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{old('first_name',$user->first_name)}}">
                                </div> 
                                <div class="form-group col-6">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{old('last_name',$user->last_name)}}">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>user_name</label>
                                    <input type="text" class="form-control" name="user_name" value="{{old('user_name',$user->user_name)}}">
                                    @if ($errors->has('user_name'))
                                    <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('user_name')}}</span>    
                                    @endif
                                </div> 
                                <div class="form-group col-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email',$user->email)}}">
                                    @if ($errors->has('email'))
                                    <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('email')}}</span>    
                                    @endif
                                </div>
                                <div class="form-group col-4">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone',$user->phone)}}">
                                    @if ($errors->has('phone'))
                                    <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('phone')}}</span>    
                                    @endif
                                </div> 
                            </div>
                        </div>
                    </div>

            

                </div>
                <!-- New Address Modal -->
                {{-- <div class="modal fade" id="new-address-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="{{route('admin.order.customer_address.add')}}" method="post">
                            @csrf
                        <div class="modal-header">
                            <span class="modal-title fs-6" id="staticBackdropLabel">New Address</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                            <div class="modal-body">
                                <div class="">
                                    <input type="hidden" name="customer_id" value="{{$data->id}}">
                                    @include('admin.ajax.get_address_add')
                                </div>
                            </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div> --}}

            </div>
        </form>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <form action="{!! route('admin.user.password', $user->id) !!}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Đổi mật khẩu</h3>
                        </div>
    
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" value="">
                                    @if ($errors->has('password'))
                                    <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('password')}}</span>    
                                    @endif
                                </div> 
                                <div class="form-group col-6">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" name="repassword" value="">
                                    @if ($errors->has('repassword'))
                                    <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('repassword')}}</span>    
                                    @endif
                                </div> 
                                <div class="form-group col-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-sm btn-danger ">Đổi mật khẩu</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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