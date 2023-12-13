<!-- modal confim delete -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="" id="form-destroy" method="POST">
        @csrf
        @method('delete')
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Bạn có chắc chắn muốn xóa không?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end -->

