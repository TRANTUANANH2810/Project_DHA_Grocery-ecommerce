@extends('admin.manage.layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Danh sách sản phẩm</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card card-secondary card-outline">
            <div class="card-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th width='5'>STT</th>
								<th>Mã đơn</th>
								<th>SP</th>
								<th>Người mua</th>
								<th>Giá đơn</th>
								<th>Trạng thái</th>
								<th>Thao tác</th>
							</tr>
							</thead>
							<tbody>
                                {{-- @foreach ($order as $key => $item)
                                <form action="{{ route( 'orders.destroy',  $item->id ) }}"  method="POST" >
                                    @csrf
                                    @method('delete')
                                    <tr class="odd">
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->cart_id}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->user->last_name}} {{$item->user->first_name}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>
                                            @if ($item->status == 1 )
                                                <span class="badge badge-success">Đã xác nhận</span>
                                            @else
                                                <span class="badge badge-danger">Chưa xác nhận</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', $item->id ) }}" class="btn btn-xs btn-info btn-edit modalEditItem" title="Cập nhật">
                                                <i class="far fa-edit"></i>
                                            </a> 
                                            <a href="javascript:void(0);" class="btn btn-xs btn-danger btn-destroy" data-href="{{ route( 'products.destroy',  $item->id ) }}"
                                                data-toggle="modal" data-target="#confim" title="Xóa">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach --}}
							</tbody>
						</table>
					</div>
						{{-- <div class="btnAdd">
						<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i
									class="fa fa-trash-o"></i> Xóa mục đã chọn
						</button> --}}
					</div>
			</div>
		</div>
	</div>
@stop
