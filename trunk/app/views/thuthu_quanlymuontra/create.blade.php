@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span6">
        <form method="post" action="<?php echo URL; ?>mborrows/addborrows" name="frmAddPhieuMuon" class="form-horizontal" role="form"  onsubmit="return checkcreatePM()"  enctype="multipart/form-data" save="image/save" >
            <?php echo Form::token(); ?>
            <div class="box-header">
                <h2>
                    <i class="icon-book"></i>Thêm Phiếu Mượn
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="input-group">
                    <span class="input-group-addon">Mã Số Phiếu:</span>
                    <input type="text" name="txtMaSoPhieu" class="form-control" placeholder="Mã phiếu hiện tại" value="<?php echo ThuThuQuanLyMuonTra::getMaxMaSoPhieuMuon(); ?>" id="MaSoPhieuId" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mã Số Người Mượn:</span>
                    <input type="text" name="txtIdNguoiMuon" class="form-control" placeholder="Mã số thẻ" id="txtMaSoNguoiMuonId" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Thời Gian Lập:</span>
                    <input type="text" class="form-control" placeholder="Thời gian mượn" name="txtThoiGianLap" id="txtThoiGianMuonId"value ="<?php echo date('H:i:s d/m/Y', time()); ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ghi Chú:</span>
                    <input type="text" class="form-control" placeholder="Ghi chú" name="txtGhiChu" id="GhiChulId">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mã Số Người Xử Lý:</span>
                    <input type="text" name="txtIdNguoiXuLy" class="form-control" value="<?php echo Auth::user()->ma_so_the; ?>" placeholder="Mã số người xử lý" id="txtMaSoNguoiMuonId" readonly/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Thời Gian Xử Lý:</span>
                    <input type="text" class="form-control" placeholder="Thời gian xử lý"  value="<?php echo date('H:i:s d/m/Y', time()); ?>" name="txtThoiGianXuLy" id="txtThoiGianHenTraId" readonly/>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">Trạng Thái:</span>
                    <input type="text" class="form-control" placeholder="Trạng thái"  value="Xử lý" name="txtTrangThai" id="txtTrangThaiPhieuMuonId" readonly/>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary" name="btnThem" value="Thêm">Thêm</button>
                    <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                </div>
            </div>
        </form>
    </div>


    <div class="box span6">
        <form method="post" action="<?php echo URL; ?>mborrows/addborrowsdetail" name="frmAddPhieuMuonDetail" class="form-horizontal" role="form"  onsubmit="return checkcreatedetailPM()"  enctype="multipart/form-data" save="image/save" >
            <?php echo Form::token(); ?>
            <div class="box">
                <div class="box-header">  <h2>
                        <i class="icon-book"></i>Bảng Thông Tin Chi Tiết Phiếu Mượn
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="input-group">
                        <span class="input-group-addon">Mã Phiếu Mượn:</span>
                        <input type="text" name="txtMaPhieuMuon" id="maphieunhapid" class="form-control" placeholder="Mã phiếu mượn hiện tại" value="<?php echo ThuThuQuanLyMuonTra::getMaSoVuaNhap(); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã BarCode:</span>
                        <input type="text" name="txtMaBarCode" id="iduserid" class="form-control" maxlength="11" placehoder="Thời gian hẹn trả"/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Mượn:</span>
                        <input type="text" name="txtThoiGianMuon" id="ThoiGianMuonId" class="form-control" placehoder="Thời gian mượn" value="<?php echo date('d/m/Y', time()); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Thời Gian Hẹn Trả:</span>
                        <input type="text" name="txtThoiGianHenTra" id="ThoiGianHenTraId" class="form-control" placehoder="Thời gian hẹn trả" value="<?php
                        $now = time();
                        $add = 86400;
                        if (General::getIdQuyenHan(General::getIdNguoiMuon(General::getIdPhieu(ThuThuQuanLyMuonTra::getMaSoVuaNhap()))) == 4) {
                            $add = $add * SO_NGAY_MUON_SV;
                        } else {
                            $add = $add * SO_NGAY_MUON_CB;
                        } $new = $add + $now;
                        echo date('d/m/Y', $new);
                        ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Ghi Chú:</span>
                        <input type="text" name="txtGhiChu" id="GhiChulId" class="form-control" placehoder="Ghi Chú"/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Mã Số Người Nhập:</span>
                        <input type="text" name="txtIdUser" id="IdUserId" class="form-control"  value="<?php echo Auth::user()->ma_so_the; ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">TG Cập Nhật TT:</span>
                        <input type="text" name="txtThoiGianCapNhatTT" id="ThoiGianCapNhatTTId" class="form-control" placehoder="Thời gian cập nhật trạng thái" value="<?php echo date('H:i:s d/m/Y', time()); ?>" readonly/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Trạng Thái:</span>
                        <input type="text" class="form-control" placeholder="Trạng thái"  value="Đang mượn" name="txtTrangThai" id="txtTrangThaiPhieuMuonId" readonly/>
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="btnThemDetail" class="btn btn-primary" value="Thêm">Thêm vào phiếu mượn</button>
                        <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header"><h2>
                <i class="icon-book"></i>Bảng Danh Sách Các Sách Yêu Cầu Mượn
            </h2>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <tr>
                        <td>STT</td>
                        <td>Mã phiếu mượn</td>
                        <td>Mã BarCode</td>
                        <td>Thời gian mượn</td>
                        <td>Thời gian hẹn trả</td>
                        <td>Ghi chú</td>
                        <td>Mã số người cập nhật</td>
                        <td>TG cập nhật trạng thái</td>
                        <td>Trạng thái</td>
                        <td> Xóa</td>
                    </tr>    
                    <?php
                    $stt = 0;
                    foreach ($CacSachMuon as $Sach) {
                        ?>
                        <tr>
                            <td class="center "><?= ++$stt; ?></td>
                            <td class="center "><?= $Sach->ma_so_phieu; ?></td>
                            <td class="center "><?= $Sach->ma_bar_code; ?></td>
                            <td class="center "><?= date('d/m/Y', strtotime($Sach->thoi_gian_muon)); ?></td>
                            <td class="center "><?= date('d/m/Y', strtotime($Sach->thoi_gian_hen_tra)); ?></td>
                            <td class="center "><?php
                                if ($Sach->ghi_chu_sach_muon == null || $Sach->ghi_chu_sach_muon == "") {
                                    echo "Không có ghi chú";
                                } else {
                                    echo $Sach->ghi_chu_sach_muon;
                                }
                                ?></td>
                            <td class="center "><?php if($Sach->id_nguoi_cap_nhat==null||$Sach->id_nguoi_cap_nhat=="") {echo "Đặt mượn online";} else echo General::getMst($Sach->id_nguoi_cap_nhat); ?></td>
                            <td class="center "><?php if($Sach->tg_cap_nhat_trang_thai==null||$Sach->tg_cap_nhat_trang_thai=="") echo "Không có"; else echo date('H:i:s d/m/Y', strtotime($Sach->tg_cap_nhat_trang_thai)); ?></td>
                            <td class="center "><?php
                                if ($Sach->trang_thai_sach_muon == 1) {
                                    echo "Đang mượn";
                                } else if ($Sach->trang_thai_sach_muon == 2) {
                                    echo "Chưa trả";
                                } else if ($Sach->trang_thai_sach_muon == 3) {
                                    echo "Mất";
                                } else if ($Sach->trang_thai_sach_muon == 4) {
                                    echo "Đặt chỗ";
                                } else if ($Sach->trang_thai_sach_muon == 5) {
                                    echo "Yêu cầu bị hủy";
                                } else if ($Sach->trang_thai_sach_muon == 0) {
                                    echo "Trả";
                                }
                                ?>
                            </td
                            <td class="center"></td>
                            <td class="center">
                                <img src="{{URL}}public/images/icon/delete.gif" alt="Xóa" onclick="if (confirm('Xác nhận loại bỏ sách <?php echo $Sach->ma_bar_code; ?>?')) {
                        thucHienXoa(<?= $Sach->id; ?>)
                    }"/>
                            </td>
                        </tr> 
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<form name="formXoa" id="frmXoaId" method="post" action="<?= URL; ?>mborrows/deleteborrowsdetailtemp">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIPhieuMuonId" value="" />
</form>
<?php
if (Session::has('message')) {
    echo "<script>alert('Thêm thành công!');</script>";
}
?>
<?php
if (Session::has('messagecheck1')) {
    echo "<script>alert('Mã số thẻ không tồn tại!');</script>";
}
?>
<?php
if (Session::has('result')) {
    if (Session::get('result')) {
        echo "<script>alert('Xóa thành công!')</script>";
    } else {
        echo "<script>alert('Không thực hiện được thao tác!')</script>";
    }
}
?>
<?php
if (Session::has('messagecheck2')) {
    echo "<script>alert('Tài khoản này đang bị khóa!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail1')) {
    echo "<script>alert('Sách không tồn tại!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail2')) {
    echo "<script>alert('Sách đã tồn tại trong phiếu!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail3')) {
    echo "<script>alert('Theo quy định của thư viện sinh viên chỉ được mượn tối đa 7 ngày!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail4')) {
    echo "<script>alert('Theo quy định của thư viện cán bộ chỉ được mượn tối đa 10 ngày!!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail5')) {
    echo "<script>alert('Theo quy định của thư viện sinh viên chỉ được mượn tối đa 3 quyển!!');</script>";
}
?>
<?php
if (Session::has('messagecheckdetail6')) {
    echo "<script>alert('Theo quy định của thư viện cán bộ chỉ được mượn tối đa 5 quyển!!');</script>";
}
?>
<script type="text/javascript">
            function thucHienXoa(id) {
                document.formXoa.txtIdPhieuMuon.value = id;
                document.formXoa.submit();
            }
            function checkcreatePM() {
                mst = document.frmAddPhieuMuon.txtIdNguoiMuon.value;
                tglap = document.frmAddPhieuMuon.txtThoiGianLap.value;
                mst = mst.replace(" ", "");
                document.frmAddPhieuMuon.txtGhiChu.value = document.frmAddPhieuMuon.txtGhiChu.value.replace("  ", " ");
                if (mst == null || mst == "") {
                    alert("Vui lòng nhập mã số thẻ!");
                    frmAddPhieuMuon.txtIdNguoiMuon.focus();
                    return false;
                }
                else
                    return true;
            }
            function checkcreatedetailPM() {
                BarCode = document.frmAddPhieuMuonDetail.txtMaBarCode.value;
                document.frmAddPhieuMuonDetail.txtGhiChu.value = document.frmAddPhieuMuonDetail.txtGhiChu.value.replace("  ", " ");
                BarCode = BarCode.replace(" ", "");
                if (BarCode == "" || BarCode == null) {
                    alert("Vui lòng nhập mã BarCode!");
                    frmAddPhieuMuonDetail.txtMaBarCode.focus();
                    return false;
                }
                else
                    return true;
            }
</script>
@stop