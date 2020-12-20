<form action="../action/customer_update.php" method = "POST">
    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
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
                    Mã khách hàng: <input type="text" id="updateId" readonly class="form-control" name="ma">
                </div>
                <div class="modal-body">
                    Tên khách hàng: <input type="text" id="updateName" class="form-control" name="ten">
                </div>
                <div class="modal-body">
                    Ngày sinh: <input type="date" id="updateDate" class="form-control" name="ngaysinh">
                </div>
                <div class="modal-body">
                    CMND: <input type="number" id="updateCode" class="form-control" name="cmnd">
                </div>
                <div class="modal-body">
                    Địa chỉ: <input type="text" id="updateAddress" class="form-control" name="diachi">
                </div>
                <div class="modal-body">
                    Khu Vực: <input type="text" id="updateArea" class="form-control" name="khuvuc">
                </div>
                <div class="modal-body">
                    Giới tính:<br />
                    <label><input type="radio" id="updateFemale" name="gt" value="1" checked>Nam</label>
                    <label><input type="radio" id="updateMale" name="gt" value="0">Nữ</label>
                </div>
                <div class="modal-body">
                    Ngày bắt đầu sử dụng: <input type="date" id="updateStart" class="form-control" name="ngaysd">
                </div>
                <div class="modal-body">
                    Nhóm khách hàng:
                    <select class="form-control" id="updateGroup" name='nhomkh'>
                        <?php
                include("../DB/getConnection.php");
                $strSQL = "Select * From nhomkh";
                $result = $conn->query($strSQL);
                while($row = $result->fetch_assoc()){
                    $ma = $row['MaNhomKH'];
                    $ten = $row['TenNhomKH'];
                    echo "<option type='text' class='form-control' value='$ma'>$ten</option>";
                }
            ?>
                    </select>
                </div>
                <div class="modal-body">
                    Ghi chú: <input type="text" id="updateNote" class="form-control" name="ghichu">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <input type="submit" class="btn btn-primary" value="Cập nhật">
                </div>
            </div>
        </div>
    </div>
</form>