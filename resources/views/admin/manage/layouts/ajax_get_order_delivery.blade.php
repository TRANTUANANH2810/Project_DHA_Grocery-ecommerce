<div class="modal-header">
    <h6 class="modal-title">Cập nhật trạng thái đơn hàng</h6>
</div>
<div class="modal-body">
    <form action="{{route('admin.order_edit_post')}}" method="post">
        @csrf
        <div class="mb-3 form-group">
            <input type="hidden" name="order_id" value="{{$order->id}}">
            <label for="exampleSelectBorder"><span class="text-danger">*</span>Chọn trạng thái <small>(kiểm tra đơn hàng trước khi cập nhật)</small></label>
            <select class="custom-select form-control"  id="exampleSelectBorder" name="status">
                <option value="1" {{$order->status == 1 ? 'selected' : ''}}>Chưa xác nhận</option>
                <option value="2" {{$order->status == 2 ? 'selected' : ''}}>Đã xác nhận</option>
                <option value="3" {{$order->status == 3 ? 'selected' : ''}}>Đang lấy hàng</option>
                <option value="4" {{$order->status == 4 ? 'selected' : ''}}>Đang vận chuyển</option>
                <option value="5" {{$order->status == 5 ? 'selected' : ''}}>Đã giao hàng</option>
                <option value="6" {{$order->status == 6 ? 'selected' : ''}}>Đã hủy</option>
            </select>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-sm btn-primary float-right">Cập nhật</button>
        </div>
    </form>
</div>
