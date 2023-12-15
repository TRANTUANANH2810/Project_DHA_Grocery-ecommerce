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
								<th>Ảnh</th>
								<th>Tên sản phẩm</th>
								<th>Danh mục</th>
								<th>Trạng thái</th>
								<th>Thao tác</th>
							</tr>
							</thead>
							<tbody>
                                @foreach ($product as $key => $item)
                                <form action="{{ route( 'products.destroy',  $item->id ) }}"  method="POST" >
                                    @csrf
                                    @method('delete')
                                    <tr class="odd">
                                        <td>{{$key+1}}</td>
                                        <td class="text-center">
                                            <img src="{{$item->image ? $item->image : asset('backend/images/placeholder.png') }}" width="50px">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td><span class="badge badge-info">{{$item->category->name}}</span></td>
                                        <td>
                                            @if ($item->is_active == 1 )
                                                <span class="badge badge-success">Hiển thị</span>
                                            @else
                                                <span class="badge badge-danger">Đang khóa</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', $item->id ) }}" class="btn btn-xs btn-info btn-edit modalEditItem" title="Cập nhật">
                                                <i class="far fa-edit"></i>
                                            </a> 
                                            <button class="btn btn-xs btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
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
@stop
