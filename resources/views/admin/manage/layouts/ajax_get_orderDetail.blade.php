<div class="modal-header">
    <h5 class="modal-title fs-6" id="staticBackdropLabel">Mã đơn hàng:</h5>
</div>
<div class="modal-body">
    <div class="card">
        <div class="card-header">
            <b class="fs-15">Tóm tắt đơn hàng</b>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="table-reponsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="w-50 fw-600">Mã đơn hàng:</td>
                                    <td>{{@$order->id}}</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Người mua:</td>
                                    <td>{{@$order->user->last_name }} {{@$order->user->first_name }}</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Email:</td>
                                    <td>{{@$order->user->email }}</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Địa chỉ:</td>
                                    <td>{!!@$order->address !!}</td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="w-50 fw-600">Ngày đặt:</td>
                                <td>{{@$order->created_at->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                                <td class="w-50 fw-600">Trạng thái giao hàng:</td>
                                <td>
                                    @if ($order->status == 1)
                                        <span class="badge badge-warning fsz-12 fw-normal">Chưa xác nhận</span>
                                    @elseif($order->status == 2)
                                        <span class="badge badge-primary fsz-12 fw-normal">Đã xác nhận</span>
                                    @elseif($order->status == 3)
                                        <span class="badge badge-info fsz-12 fw-normal">Đang lấy hàng</span>
                                    @elseif($order->status == 4)
                                        <span class="badge badge-secondary fsz-12 fw-normal">Đang vận chuyển</span>
                                    @elseif($order->status == 5)
                                        <span class="badge badge-success fsz-12 fw-normal">Đã giao hàng</span>
                                    @elseif($order->status == 6)
                                        <span class="badge badge-danger fsz-12 fw-normal">Đã hủy</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50 fw-600">Tổng thanh toán:</td>
                                <td>{{ @$order->total_price }}</td>
                            </tr>
                            <tr>
                                <td class="w-50 fw-600">Số điện thoại:</td>
                                <td>{{ @$order->user->phone }}</td>
                            </tr>
                            <tr>
                                <td class="w-50 fw-600">Hình thức thanh toán:</td>
                                <td>
                                  Thanh Toán Online
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50 fw-600">Trạng thái thanh toán:</td>
                                <td>
                                    {{ @$order->is_payment ? 'Đã thanh toán' : 'Chưa thanh toán' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="card mt-4">
                <div class="card-header">
                    <b class="fs-15">Order Details</b>
                </div>
                <div class="card-body pb-0">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="min-width:40px">#</th>
                                    <th style="min-width:120px">Sản phẩm</th>
                                    {{-- <th style="min-width:60px">Variation</th> --}}
                                    <th style="min-width:60px">SL</th>
                                    <th style="min-width:100px">Giá</th>
                                    {{-- <th style="min-width:80px">Hoàn trả</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderDetail as $detail)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>
                                        {{@$detail->product->name}}
                                    </td>
                                    {{-- <td></td> --}}
                                    <td>{{@$detail->qty}}</td>
                                    <td>{{ @$detail->qty * @$detail->price}}₫</td>
                                    {{-- <td>
                                        <b>N/A</b>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mt-4">
                <div class="card-header">
                    <b class="fs-15">Order Amount</b>
                </div>
                <div class="card-body pb-0">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="w-50 fw-600">Tổng giá tiền</td>
                                    <td class="text-end">
                                        <span class="strong-600">{{ @$order->total_price }}₫</span>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- <td class="w-50 fw-600"></td> --}}
                                    <td class="text-end pt-0" colspan="2">
                                        <span class="text-italic"><small>(Giá trên đã bao gồm VAT)</small></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Thanh toán</td>
                                    <td class="text-end">
                                        <strong>
                                            {{ @$order->total_price }}₫
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>