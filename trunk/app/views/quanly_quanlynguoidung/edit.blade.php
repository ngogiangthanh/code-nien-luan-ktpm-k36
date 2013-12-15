@extends('layouts.default')
@section('content')
<div class="col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center;">
            <h4>Sửa người dùng</h4>
        </div>
        <div class="panel-body">
            <form method="musers/adduser" action="post" name="frmAddUser" class="form-horizontal" role="form" onsubmit="return checkcreateform(this)">
                <?php echo Form::token(); ?>
                <div class="input-group">
                    <span class="input-group-addon">ID Người Dùng:</span>
                    <input type="text" name="txtIdUser" id="txtIdUserId" class="form-control" disabled="true" placeholder="ID người dùng"/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Chọn ảnh đại diện:</span>
                    <input type="file" name="txtAvatar" id="txtAvatarId" class="form-control" placeholder="Ảnh đại diện"/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Nhóm quyền:</span>
                    <select name="quyen" class="form-control" id="quyenId">
                        <option value="">----Chọn Quyền----</option>
                        <option value="1">Quản Lý</option>
                        <option value="2">Thủ Thư</option>
                        <option value="3">Người mượn CB</option>
                        <option value="4">Người mượn SV</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mã Số Thẻ:</span>
                    <input type="text" name="txtMaSoThe" class="form-control" placeholder="Mã số thẻ" id="txtMaSoTheId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mật Khẩu:</span>
                    <input type="password" class="form-control" name="txtPassword" disabled="true" placeholder="Mật khẩu" id="txtPasswordId">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Ngẫu Nhiên</button>
                    </span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Họ Tên:</span>
                    <input type="text" class="form-control" placeholder="Họ tên người dùng" name="txtHoTen" id="txtHoTenId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Giới Tính:</span>
                    <select class="form-control" value="gioiTinh" id="gioiTinhId">
                        <option value="">----Chọn Giới Tính----</option>
                        <option value="true">Nam</option>
                        <option value="false">Nữ</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ngày Sinh:</span>
                    <input type="date" class="form-control" placeholder="Ngày sinh" name="txtNgaySinh" id="txtNgaySinhId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Địa Chỉ:</span>
                    <input type="text" class="form-control" placeholder="Địa chỉ" name="txtDiaChi" id="txtDiaChiId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Đơn vị công tác:</span>
                    <input type="text" name="txtCongTac" class="form-control" placeholder="Đơn vị công tác" id="txtCongTacId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Số Điện Thoại:</span>
                    <input type="text" class="form-control" placeholder="Số điện thoại" name="txtSDT" id="txtSDTId">
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
                        <input type="checkbox" name="" id="" value=""/>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-default" name="btnThem" value="Xác nhận">Xác nhận</button>
                    <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                    <button type="reset" class="btn btn-default" name="bntTroLai" value="Trở lại" onclick="ClosePop('mask', 'idFormThem')">Trở lại</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop