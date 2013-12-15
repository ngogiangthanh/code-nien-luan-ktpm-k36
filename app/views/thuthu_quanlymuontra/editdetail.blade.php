@extends('layouts.default')
@section('content')

<div class="row-fluid">
    <div class="box span6">
        <div class="box-header" style="text-align: center;">
            <h2><i class="icon-file"></i>Cập Nhật Thông Tin Chi Tiết Phiếu Mượn</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <?php foreach ($PhieuMuon as $Phieu) {
            ?>
            <div class="box-content">
                <form method="post" action="<?= URL; ?>mborrows/updatedetail" name="frmeditPhieu" class="form-horizontal" role="form" onsubmit="return checkcreateform(this)">
                    <?php echo Form::token(); ?>
                    <div class="input-group">
                        <span class="input-group-addon">ID chi tiết phiếu:</span>
                        <input type="text" name="txtidChitietPhieu" id="txtIdChiTietPhieuId" class="form-control" placeholder="ID phiếu" value="<?php echo $Phieu->id; ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã BarCode:</span>
                        <input type="text" name="txtMaBarCode" class="form-control" placeholder="Mã Bar code" id="txtMaBarCodeId" value="<?php echo General::getBarCode($Phieu->id_quyen_sach); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Mượn:</span>
                        <input type="text" class="form-control" placeholder="Thời gian mượn" name="txtThoiGianMuon" id="txtThoiGianMuonId" value="<?php echo date('d/m/Y', strtotime($Phieu->thoi_gian_muon)); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Hẹn Trả:</span>
                        <input type="date" class="form-control" placeholder="Thời gian hẹn trả" name="txtThoiGianHenTra" id="txtThoiGianHenTraId" value="<?php echo $Phieu->thoi_gian_hen_tra; ?>" 
                               min="<?= date("Y-m-d", strtotime($Phieu->thoi_gian_hen_tra)) ?>" <?php if (General::getIdQuyenHan(General::getIdNguoiMuon(General::getIdPhieuMuon($Phieu->id))) == 4) { ?> max="<?= date("Y-m-d", strtotime($Phieu->thoi_gian_hen_tra) + 86400 * SO_NGAY_MUON_SV) ?>" <?php } else {
                    ?> max="<?= date("Y-m-d", strtotime($Phieu->thoi_gian_hen_tra) + 86400 * SO_NGAY_MUON_CB) ?>" <?php } ?>/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Ghi Chú Sách:</span>
                        <input type="text" class="form-control" placeholder="Ghi Chú" name="txtGhiChu" id="txtGhiChuId" value="<?php echo $Phieu->ghi_chu_sach_muon; ?>"/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã Số Người Cập nhật:</span>
                        <input type="text" class="form-control" placeholder="Mã số người cập nhật" name="txtMaSoNguoiCapNhat" id="txtMaSoNguoiCapNhatId" value="<?php if($Phieu->id_nguoi_cap_nhat==null||$Phieu->id_nguoi_cap_nhat=="") { echo "Đặt mượn online"; } else { echo General::getMst($Phieu->id_nguoi_cap_nhat);} ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Cập Nhật:</span>
                        <input type="text" class="form-control" placeholder="Thời gian cập nhật" name="txtThoiGianCapNhat" id="txtThoiGianCapNhatId" value="<?php if($Phieu->tg_cap_nhat_trang_thai==null||$Phieu->tg_cap_nhat_trang_thai=="") echo "Không có"; else echo $Phieu->tg_cap_nhat_trang_thai; ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Trạng Thái Sách:</span>
                        <select name="trangthai" class="form-control" id="quyenId">
                            <option value="0" <?php if ($Phieu->trang_thai_sach_muon == '0') echo "selected='selected'"; ?>>Trả</option>
                            <option value="1" <?php if ($Phieu->trang_thai_sach_muon == '1') echo "selected='selected'"; ?>>Đang mượn</option>
                            <option value="2" <?php if ($Phieu->trang_thai_sach_muon == '2') echo "selected='selected'"; ?>>Chưa trả</option>
                            <option value="3" <?php if ($Phieu->trang_thai_sach_muon == '3') echo "selected='selected'"; ?>>Mất</option>
                            <option value="4" <?php if ($Phieu->trang_thai_sach_muon == '4') echo "selected='selected'"; ?>>Đặt chỗ</option>
                            <option value="5" <?php if ($Phieu->trang_thai_sach_muon == '5') echo "selected='selected'"; ?>>Yêu cầu bị hủy</option>
                        </select> 
                        <?php
                        }
                        ?>

                    <button type="submit" class="btn btn-default" name="btnThem" value="Xác nhận">Xác nhận</button>
                    <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                    <button type="reset" class="btn btn-default" name="bntTroLai" value="Trở lại danh sách phiếu mượn" onclick="window.location.href = '<?php echo URL; ?>mborrows/listborrows'">Trở lại danh sách</button>
                </div>
            </form>
            <?php
            if (Session::has('message')) {
                echo "<script>alert('Cập nhật phiếu mượn thành công!');</script>";
            }
            ?>
        </div>
    </div>
</div>
@stop