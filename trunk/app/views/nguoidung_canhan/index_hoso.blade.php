@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-6">
    <div class="box">
        <div class="box-header">
            <h2>
                <i class="icon-user"></i>Thông Tin Cá Nhân
            </h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row">
                <div class="col-lg-3" style="margin: 0px 0px 0px 15px !important;">
                    <img class="img-thumbnail" src="<?php
                    if (!is_null(Auth::user()->link_avatar)) {
                        echo URL . Auth::user()->link_avatar;
                    } else {
                        echo URL . "public/images/profiles/no_avatar.gif";
                    }
                    ?>" alt="Avatar" title="Avatar""/>
                </div>
                <div class="col-lg-9" style="width: 72% !important;">
                    <form method="post" action="<?= URL . 'edituser' ?>" name="frmSuaThongTinCaNhan" onsubmit='return checkFormSuaThongTin(this)' accept-charset="UTF-8" enctype="multipart/form-data">    
                        <?= Form::token() ?>
                        <div class="input-group">
                            <span class="input-group-addon">Mã số thẻ:</span>
                            <input type="text" name="txtIdMaSoThe" id="txtIdMaSoTheId" class="form-control" disabled="true" value="<?= Auth::user()->ma_so_the ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">URL hình ảnh:</span>
                            <input type="file" accept="image/*" name="txtHinhAnh" id="txtHinhAnhId" class="form-control"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Họ Tên:</span>
                            <input type="text" class="form-control" placeholder="Họ tên người dùng" name="txtHoTen" id="txtHoTenId" value="<?= Auth::user()->ho_ten ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Giới Tính:</span>
                            <select class="form-control" name="gioiTinh" id="gioiTinhId">
                                <option value="0" <?php
                                if (Auth::user()->gioi_tinh == 0) {
                                    echo "selected='selected'";
                                }
                                ?>>Nam</option>
                                <option value="1" <?php
                                if (Auth::user()->gioi_tinh == 1) {
                                    echo "selected='selected'";
                                }
                                ?>>Nữ</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ngày Sinh:</span>
                            <input type="date" class="form-control" placeholder="Ngày sinh" name="txtNgaySinh" id="txtNgaySinhId" value="<?= Auth::user()->ngay_sinh ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Địa chỉ:</span>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="txtDiaChi" id="txtDiaChiId" value="<?= Auth::user()->dia_chi ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Số điện thoại:</span>
                            <input type="text" class="form-control" placeholder="Số điện thoại" name="txtSDT" id="txtSDTId" value="<?= Auth::user()->sdt ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Đơn vị công tác:</span>
                            <input type="text" class="form-control" placeholder="Đơn vị công tác" name="txtCongTac" id="txtCongTacId" value="<?= Auth::user()->don_vi_cong_tac ?>"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Email:</span>
                            <input type="text" class="form-control" placeholder="Địa chỉ email" name="txtEmail" id="emailId" value="<?= Auth::user()->email ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ngày Cấp Thẻ:</span>
                            <input type="date"  disabled="true" class="form-control" placeholder="Ngày cấp thẻ" name="txtNgayCapThe" id="txtNgayCapTheId" value="<?= Auth::user()->ngay_cap_the ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ngày Hết Hạn:</span>
                            <input type="date" disabled="true" class="form-control" placeholder="Ngày hết hạn" name="txtNgayHetHan" id="txtNgayHetHanId" value="<?= Auth::user()->ngay_het_han ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Trạng thái:</span>
                            <input type="text" disabled="true" class="form-control" name="txtTrangThai" id="txtTrangThaiId" value="<?php
                            if (Auth::user()->trang_thai_hoat_dong == 1) {
                                echo "Hoạt động";
                            } else {
                                echo "Không hoạt động";
                            }
                            ?>">
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary" name="btnLuu" >Lưu lại</button>
                            <button type="reset" class="btn btn-default" name="bntLamLai" >Làm lại</button>
                        </div>
                    </form>
                </div>  
            </div>
            
        </div>
    </div>
    </div>
</div>
<script src='<?=URL?>/public/js/jsfunction.js'></script> 
<script type='text/javascript'>
    function checkFormSuaThongTin(string) {
        var hoTen = trim(string.txtHoTen.value);
        var ngaySinh = trim(string.txtNgaySinh.value);
        var url = trim(string.txtHinhAnh.value);
        var diaChi = trim(string.txtDiaChi.value);
        var sdt = trim(string.txtSDT.value);
        var dvct = trim(string.txtCongTac.value);
        var email = trim(string.txtEmail.value);
        if (hoTen === "") {
            alert('Tên không được rỗng!');
            string.txtHoTen.focus();
            return false;
        }
        else if (ngaySinh === "") {
            alert('Ngày sinh không được rỗng!');
            string.txtNgaySinh.focus();
            return false;
        }
        else if (email === "") {
            alert('Đơn vị công tác không được rỗng!');
            string.txtCongTac.focus();
            return false;
        }
        else {
            if(!isSpeacialChar(hoTen)) {
                alert('Họ tên không hợp lệ!');
                string.txtHoTen.focus();
                return false;
            }
            else if(diaChi != "" && !isSpeacialChar(diaChi)){
                alert('Địa chỉ không hợp lệ!');
                string.txtDiaChi.focus();
                return false;
            }
            else if((!checkNumPhone(sdt) || sdt.length <= 8) && sdt != ""){
                alert('Số điện thoại không hợp lệ!');
                string.txtSDT.focus();
                return false;
            }
            else if(!isSpeacialChar(dvct) && dvct != ""){
                alert('Đơn vị công tác không hợp lệ!');
                string.txtCongTac.focus();
                return false;
            }
            else if(!checkEmail(email)){
                alert('Email không hợp lệ!');
                string.txtEmail.focus();
                return false;
            }
            
            else if(!checkNamSinh(ngaySinh)){
                alert('Năm sinh không hợp lệ!');
                string.txtNgaySinh.focus();
                return false;
            }
            else{
            return true;
            }
        }
        return false;
    }
</script>
@stop