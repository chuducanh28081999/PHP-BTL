<form action="../action/customer_delete.php" method="POST">
    <div class="modal" id="delete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xóa khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn xác nhận xóa khách hàng này ? <input style="display: none;" name="deleteId" type="text" id="deleteId" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Xóa</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</form>
