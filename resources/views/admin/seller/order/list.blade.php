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
                                @foreach ($order as $key => $item)
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
                                            {{-- @if ($item->status == 1 )
                                                <span class="badge badge-success">Đã xác nhận</span>
                                            @else
                                                <span class="badge badge-danger">Chưa xác nhận</span>
                                            @endif --}}

                                            @if($item->status == 1)
                                                <span class="badge badge-warning fsz-12 fw-normal">Chưa xác nhận</span>
                                            @elseif($item->status == 2)
                                                <span class="badge badge-success fsz-12 fw-normal">Đã xác nhận</span>
                                            @elseif($item->status == 3)
                                                <span class="badge badge-info fsz-12 fw-normal">Đang lấy hàng</span>
                                            @elseif($item->status == 4)
                                                <span class="badge badge-secondary fsz-12 fw-normal">Đang vận chuyển</span>
                                            @elseif($item->status == 5)
                                                <span class="badge badge-success fsz-12 fw-normal">Đã giao hàng</span>
                                            @elseif($item->status == 6)
                                                <span class="badge badge-danger fsz-12 fw-normal">Đã hủy</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-primary btn-order-detail" title="Chi tiết đơn hàng"
                                            data-href="{{route('admin.order_detail_get')}}" data-id="{{$item->id}}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('products.edit', $item->id ) }}" class="btn btn-xs btn-info btn-edit modalEditItem" title="Cập nhật">
                                                <i class="far fa-edit"></i>
                                            </a>  --}}
                                            <a href="javascript:void(0);" class="btn btn-xs btn-info btn-edit modalEditItem btn-order-delivery" title="Cập nhật trạng thái"
                                            data-href="{{route('admin.order_edit_get')}}" data-id="{{$item->id}}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-danger btn-destroy" data-href="{{ route( 'orders.destroy',  $item->id ) }}"
                                                data-toggle="modal" data-target="#confim" title="Xóa">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
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

    <div class="modal fade" id="editOrderDelivery" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-md">
            <div class="modal-content" id="order-edit-modal-body">
                
            </div>
        </div>
    </div>

    <div class="modal fade" id="order-detail" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content" id="order-details-modal-body">
                
            </div>
        </div>
    </div>

@stop

@section('page_scripts')
<script>

    $('.btn-order-delivery').on('click', function(e){
        const url = $(this).data("href");
        const id = $(this).data("id");
        $.ajax({
            type: 'GET', 
            url: url, 
            data: {id:id},
            dataType: "json", 
            success: function(data){
                $('#order-edit-modal-body').html(data.html);
                $('#editOrderDelivery').modal('show');
            }
        })
    })

    $('.btn-order-detail').on('click', function(e){
        const url = $(this).data("href");
        const id = $(this).data("id");
        $.ajax({
            type: 'GET', 
            url: url, 
            data: {id:id},
            dataType: "json", 
            success: function(data){
                $('#order-details-modal-body').html(data.html);
                $('#order-detail').modal('show');
            }
        })
    })

</script>
@endsection
