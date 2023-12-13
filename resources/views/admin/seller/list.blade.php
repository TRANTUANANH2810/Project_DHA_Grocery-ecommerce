@extends('admin.layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Danh sách người bán</h4>
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
        <div class="card card-secondary card-outline">
            <div class="card-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped table-hover">
							<thead>
							<tr>
								<th width='5'>STT</th>
								<th>Shop name</th>
								<th>Ngày tạo</th>
								<th>Ngày cập nhật</th>
								<th>Trạng thái</th>
								<th>Thao tác</th>
							</tr>
							</thead>
							<tbody>
                                @foreach ($seller as $key => $item)
                                <form action="{{ route( 'seller.destroy',  $item->id ) }}"  method="POST" >
                                    @csrf
                                    @method('delete')
                                    <tr class="odd">
                                        <td>{{$key}}</td>
                                        <td>{{$item->seller->shop_name}}</td>
                                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                                        <td>{{$item->updated_at->format('d/m/Y')}}</td>
                                        <td>
                                            @if ($item->is_active == 1 )
                                                <span class="badge badge-success">Đang hoạt động</span>
                                            @else
                                                <span class="badge badge-danger">Đang khóa</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('seller.edit', $item->id ) }}" class="btn btn-xs btn-info btn-edit modalEditItem" title="Cập nhật">
                                                <i class="far fa-edit"></i>
                                            </a> 
                                            @if ($item->is_active == 1 )
                                                <button class="btn btn-xs btn-danger">
                                                    <i class="fas fa-toggle-off"></i>
                                                </button>
                                            @else
                                                <button class="btn btn-xs btn-primary">
                                                    <i class="fas fa-toggle-on"></i>
                                                </button>
                                            @endif
                                              
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
