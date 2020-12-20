<form action="" method = "POST">
    <div class="modal fade" id="priceUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Mã đối tượng: <input type="text" id="updateId" readonly class="form-control" name="ma">
                </div>
                <div class="modal-body">
                    Đối tượng: <input type="text" id="updateName" class="form-control" name="ten">
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <input type="submit" class="btn btn-primary" value="Cập nhật">
                </div>
            </div>
        </div>
    </div>
</form>