@extends('layouts.default')
@section('content')

<div class="row-fluid">
    <div class="box span6">
        <div class="box-header" style="text-align: center;">
            <h2><i class="icon-file"></i>Cập Nhật Phiếu Mượn</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <?php foreach ($PhieuMuon as $Phieu) {
            ?>
            <div class="box-content">
                <form method="post" action="<?= URL; ?>mborrows/update" name="frmeditPhieu" class="form-horizontal" role="form" onsubmit="return checkcreateform(this)">
                    <?php echo Form::token(); ?>
                    <div class="input-group">
                        <span class="input-group-addon">ID phiếu:</span>
                        <input type="text" name="txtIdPhieu" id="txtIdPhieuId" class="form-control" placeholder="ID phiếu" value="<?php echo $Phieu->id; ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã Số Phiếu:</span>
                        <input type="text" name="txtMaSoPhieu" class="form-control" placeholder="Mã số phiếu" id="txtMaSoPhieuId" value="<?php echo $Phieu->ma_so_phieu; ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã Số Người Mượn:</span>
                        <input type="text" class="form-control" name="txtMaSoNguoiMuon" placeholder="Mã số người mượn" id="txtMaSoNguoiMuonId" value="<?php echo General::getMst($Phieu->id_nguoi_muon); ?>"/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Lập:</span>
                        <input type="text" class="form-control" placeholder="Thời Gian Lập" name="txtThoiGianLap" id="txtThoiGianLapId" value="<?php echo date('H:i:s d/m/Y', strtotime($Phieu->thoi_gian_lap)); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Ghi Chú:</span>
                        <input type="text" class="form-control" placeholder="Ghi Chú" name="txtGhiChu" id="txtGhiChuId">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã Số Người Xử Lý:</span>
                        <input type="text" class="form-control" placeholder="Mã số người xử lý" name="txtMaSoNguoiXuLy" id="txtMaSoNguoiXuLyId" value="<?php if($Phieu->id_nguoi_xu_ly==null||$Phieu->id_nguoi_xu_ly=="") { echo "Đặt mượn online"; } else { echo General::getMst($Phieu->id_nguoi_xu_ly);} ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Xử Lý:</span>
                        <input type="text" class="form-control" placeholder="Thời Xử Lý" name="txtThoiGianXuLy" id="txtThoiGianXuLyId" value="<?php if($Phieu->thoi_gian_xu_ly==null||$Phieu->thoi_gian_xu_ly=="")echo "Không có"; else echo date('H:i:s d/m/Y', strtotime($Phieu->thoi_gian_xu_ly)); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Hoạt động:</span>
                        <select name="trangthai" class="form-control" id="quyenId">
                            <option value="0" <?php if ($Phieu->trang_thai_phieu == '0') echo "selected='selected'"; ?>>Mượn online</option>
                            <option value="1" <?php if ($Phieu->trang_thai_phieu == '1') echo "selected='selected'"; ?>>Xử lý</option>
                            <option value="2" <?php if ($Phieu->trang_thai_phieu == '2') echo "selected='selected'"; ?>>Bị hủy</option>
                        </select>                      
                    </div>
                    <?php
                }
                ?>
                <div class="btn-group">
                    <center>
                        <br>
                        <button type="submit" class="btn btn-primary" name="btnThem" value="Xác nhận">Xác nhận</button>
                        <button type="reset" class="btn btn-close" name="bntXoa" value="Làm lại">Làm lại</button>
                        <button type="reset" class="btn btn-inverse" name="bntTroLai" value="Trở lại" onclick="window.location.href = '<?php echo URL; ?>mborrows/listborrows'">Trở lại danh sách</button>
                    </center>    
                </div>
            </form>
            <?php
            if (Session::has('message')) {
                echo "<script>alert('Cập nhật phiếu mượn thành công!');</script>";
            }
            ?>
            <?php
            if (Session::has('messagecheck1')) {
                echo "<script>alert('Mã số thẻ không tồn tại!!');</script>";
            }
            ?>
            <?php
            if (Session::has('messagecheck2')) {
                echo "<script>alert('Tài khoản này đang bị khóa!');</script>";
            }
            ?> 
            <?php
            if (Session::has('messagecheckdetail6')) {
                echo "<script>alert('Không cập nhật được, vui lòng kiểm tra lại!');</script>";
            }
            ?>   
        </div>
    </div>
</div>
@stop