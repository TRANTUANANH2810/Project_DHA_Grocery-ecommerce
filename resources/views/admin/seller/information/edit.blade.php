@extends('admin.manage.layouts.app')

@section('content')
	<div class="content-header">
		<div class="container-fluid mb-3">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0">Cài đặt tài khoản</h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.seller.home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cài đặt tài khoản</li>
					</ol>
				</div>
			</div>
		</div>

        <div class="container-fluid">
            <form action="{!! route('information.update', $seller->id) !!}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
              
                    <div class="col-md-4">
        
                        <div class="card card-dark card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <div class="image">
                                            <div class="image__thumbnail" style="outline: 0 !important;">
                                                <img src="{{ old('image',@$seller->image) ? old('image',@$seller->image) :  asset('backend/images/default.jpg') }}"
                                                    data-init="{{ asset('backend/images/default.jpg') }}" style="border-radius: 50%;" class="profile-user-img" id="imageUpload">
                                                <a href="javascript:void(0)" class="image__delete"
                                                    onclick="urlFileDelete(this)">
                                                    <i class="fa fa-times"></i></a>
                                                <input type="hidden" value="{{@$seller->image}}" name="image_default" id="image_default" />
                                                <input type="file" id="upload" name="image" onchange="onFileSelected(event)" class="image__button" style="border-radius: 50%; opacity: 0;">
                                            </div>
                                    </div>
                                </div>
                                <h3 class="profile-username text-center">{{ @$seller->first_name}} {{ @$seller->last_name}}</h3>
                                <p class="text-center">{{@$seller->created_at->format('d-m-Y')}}</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    @if (@$seller->phone)
                                        <li class="list-group-item">
                                            <b>SĐT</b> <a class="float-right">{{ @$seller->phone }}</a>
                                        </li> 
                                    @endif
                                 
                                    @if (@$seller->email)
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">{{ @$seller->email }}</a>
                                        </li>
                                    @endif
                                    <li class="list-group-item">
                                        <b>Trạng thái</b> 
    
                                        @if ($seller->is_active == 1 )
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
                                    <input type="text" class="d-none" name="seller_id" value="{{$seller->id}}">
                                    <input type="text" class="d-none" name="seller_detail_id" value="{{$seller->seller->id}}">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Lưu lại</button>
                                </div>
                            </div>
                        </div>
        
                        
                    </div>
                    
                    <div class="col-md-8">
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Đơn hàng</h3>
                            </div>
        
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-hover w-100">
                                        <thead>
                                            <tr>
                                                <th width="10px">STT</th>
                                                <th>Mã đơn</th>
                                                <th>Thanh toán</th>
                                                <th width="90px">Ngày đặt</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach($data->CustomerOrders->sortByDesc('created_at') as $item)
                                                <tr>
                                                    <td><input type="checkbox" name="chkItem[]" value="{{ $item->id }}"></td>
                                                    <td>{{ count($data->CustomerOrders) - $loop->index }}</td>
                                                    <td>{{$item->sku}}</td>
                                                    <td>{{number_format($item->total_price, 0, 3, '.')}} đ</td>
                                                    <td>{{date_format($item->created_at, 'd-m-Y')}} <br> </td>
                                                    <td>
                                                        {!! $item->getStatusOrder($item->payment_type, $item->status) !!}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin.order.detail', $item->id)}}" class="btn btn-sm btn-info" title="Chi tiết">
                                                            <i class="fas fa-eye"></i> Xem
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
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
                                        <input type="text" class="form-control" name="first_name" value="{{$seller->first_name}}">
                                    </div> 
                                    <div class="form-group col-6">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="last_name" value="{{$seller->last_name}}">
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Shop_name</label>
                                        <input type="text" class="form-control" name="shop_name" value="{{old('shop_name',$seller->seller->shop_name)}}">
                                        @if ($errors->has('shop_name'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('shop_name')}}</span>    
                                        @endif
                                    </div> 
                                
                                    <div class="form-group col-6">
                                        <label>user_name</label>
                                        <input type="text" class="form-control" name="user_name" value="{{$seller->user_name}}">
                                        @if ($errors->has('user_name'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('user_name')}}</span>    
                                        @endif
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="{{old('email',$seller->email)}}">
                                        @if ($errors->has('email'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('email')}}</span>    
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{old('phone',$seller->phone)}}">
                                        @if ($errors->has('phone'))
                                        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('phone')}}</span>    
                                        @endif
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="shop_address" value="{{$seller->seller->shop_address}}">
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
                    @if (Auth::user()->confirm == 1)
                        <form action="{!! route('admin.infor.password') !!}" method="POST">
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
                    @else
                        <form action="{{route('admin.sendMail.password')}}" method="POST">
                            @csrf
                            <div class="form-group col-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-danger ">Đổi mật khẩu</button>
                                </div>
                            </div> 
                        </form>
                    @endif
                
                </div>
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