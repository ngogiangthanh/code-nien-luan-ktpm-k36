<form method="post" action="<?php echo URL; ?>musers/addusers" name="frmAddUser" class="form-horizontal" role="form"  onsubmit="return checkcreateform(this)"  enctype="multipart/form-data" save="image/save" >
    <?php echo Form::token(); ?>
        <div class="box">
            <div class="box-header">
                <h2>
                    <i class="icon-user"></i>Thêm người dùng
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="input-group">
                    <span class="input-group-addon">Nhóm quyền:</span>
                    <select name="quyen" class="form-control" id="quyenId">
                        <option value="chon">----Chọn Nhóm Quyền----</option>
                        <option value="1">Quản Lý</option>
                        <option value="2">Thủ Thư</option>
                        <option value="3">Người mượn CB</option>
                        <option value="4">Người mượn SV</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mã Số Thẻ:</span>
                    <input type="text" name="txtMaSoThe" class="form-control" placeholder="Mã số thẻ" id="txtMaSoTheId" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Họ Tên:</span>
                    <input type="text" class="form-control" placeholder="Họ tên người dùng" name="txtHoTen" id="txtHoTenId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Giới Tính:</span>
                    <select class="form-control" name="gioiTinh" id="gioiTinhId">
                        <option value="gioitinh">----Chọn Giới Tính----</option>
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ngày Sinh:</span>
                    <input type="date" class="form-control" placeholder="Ngày sinh" name="txtNgaySinh" id="txtNgaySinhId">
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Email:</span>
                    <input type="text" class="form-control" placeholder="Địa chỉ email" name="txtEmail" id="emailId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ngày Cấp Thẻ:</span>
                    <input type="date" class="form-control" placeholder="Ngày cấp thẻ" name="txtNgayCapThe" id="txtNgayCapTheId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ngày Hết Hạn:</span>
                    <input type="date" class="form-control" placeholder="Ngày hết hạn" name="txtNgayHetHan" id="txtNgayHetHanId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Hoạt động:</span>
                    <input type="checkbox" name="checkHoatDong" id="checkHoatDongId" value="hoatdong" checked="checked"/>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary" name="btnThem" value="Thêm">Thêm</button>
                    <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                    <?php
                    if (Route::currentRouteName() != 'musers/addusers') {
                        ?>
                        <button type="reset" class="btn btn-prev" name="bntTroLai" value="Trở lại" onclick="ClosePop('mask', 'idFormThem')">Trở lại</button>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</form>
<?php
if (Session::has('message')) {
    echo "<script>alert('Thêm người dùng thành công!');</script>";
}
?>
<script type="text/javascript">
    function checkFormThemUser(string) {
        return true;
    }
</script>
<script type="text/javascript">
    function checkcreateform() {
     
    }
  </script>  