@extends('layouts.default')
@section('content')
<?php
$stt = 0;
?>
<?php
$ms = 0;
foreach ($dsPhieuMuon as $PhieuMuontemp) {
    $ms = General::getMst($PhieuMuontemp->id_nguoi_muon);
}
?>
<div class="row-fluid">
    <div class="box span12">
        <div class="box">
            <div class="box-header">
                <h2>
                    <i class="icon-file"></i>Danh Sách Các Sách Trong Phiếu
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid">

                    <?php
                    $IdPm = 0;
                    if (Session::has('message')) {
                        echo "<p style='color:green;'>" . Session::get('message') . "</p>";
                    }
                    foreach ($dsPhieuMuon as $PhieuMuon) {
                        $IdPm = General::getIdPhieuMuon($PhieuMuon->id);
                    }
                    ?>
                    <input type="hidden" name="txtIdBorrowsDetail" id="txtIdBorrowsDetaiId" value="<?php echo $IdPm; ?>"/>
                    <img  src="{{URL}}public/images/icon/documents.gif" name="" id="" value="" onclick="ThucHienIn('<?= URL ?>', document.getElementById('txtIdBorrowsDetaiId').value)" title="Thực hiện in"/>&nbsp;     
                    <form name="frmCheckPrint" method="post" action="<?= URL; ?>mborrows/detailborrows">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr>
                                    <td>STT</td>
                                    <td>Mã BarCode</td>
                                    <td>Thời Gian Mượn</td>
                                    <td>Thời Gian Hẹn Trả</td>
                                    <td>Ghi Chú Sách</td>
                                    <td>Mã Số Người Lập</td>
                                    <td>TG cập nhật TT</td>
                                    <td>Tráng Thái</td>
                                    <td>Cập Nhật</td>
                                    <td>Xóa</td>
                                </tr>
                                <?php
                                $stt = 0;
                                foreach ($dsPhieuMuon as $PhieuMuon) {
                                    ?>
                                    <tr class="odd">
                                        <td class="center "><?= ++$stt ?></td>
                                        <td class="center "><?= $PhieuMuon->ma_bar_code ?></td>
                                        <td class="center "><?= date('d/m/Y', strtotime($PhieuMuon->thoi_gian_muon)) ?></td>
                                        <td class="center "><?= date('d/m/Y', strtotime($PhieuMuon->thoi_gian_hen_tra)) ?></td>
                                        <td class="center "><?php
                                            if ($PhieuMuon->ghi_chu_sach_muon == null || $PhieuMuon->ghi_chu_sach_muon == "") {
                                                echo "Không có ghi chú nào";
                                            } else {
                                                echo $PhieuMuon->ghi_chu_sach_muon;
                                            }
                                            ?></td>
                                        <td class="center "><?php if($PhieuMuon->id_nguoi_cap_nhat==null||$PhieuMuon->id_nguoi_cap_nhat=="") {echo "Đặt mượn online";} else echo General::getMst($PhieuMuon->id_nguoi_cap_nhat) ?></td>
                                        <td class="center "><?php if($PhieuMuon->tg_cap_nhat_trang_thai==null||$PhieuMuon->tg_cap_nhat_trang_thai=="") echo "Không có"; else echo date('H:i:s d/m/Y', strtotime($PhieuMuon->tg_cap_nhat_trang_thai)) ?></td>
                                        <td class="center ">
                                            <?php
                                            if ($PhieuMuon->trang_thai_sach_muon == 1) {
                                                echo "Đang mượn";
                                            } else if ($PhieuMuon->trang_thai_sach_muon == 2) {
                                                echo "Chưa trả";
                                            } else if ($PhieuMuon->trang_thai_sach_muon == 3) {
                                                echo "Mất";
                                            } else if ($PhieuMuon->trang_thai_sach_muon == 4) {
                                                echo "Đặt chỗ";
                                            } else if ($PhieuMuon->trang_thai_sach_muon == 5) {
                                                echo "Yêu cầu bị hủy";
                                            } else if ($PhieuMuon->trang_thai_sach_muon == 0) {
                                                echo "Trả";
                                            }
                                            ?></td>
                                        <td class="center ">
                                            <?php if($PhieuMuon->trang_thai_sach_muon != 0) {?>
                                            <a onclick="thucHienSua(<?= $PhieuMuon->id; ?>)"><img src="{{URL}}public/images/icon/edit.gif" alt="Sửa" title="Cập nhật phiếu mượn"/></a>
                                            <?php
                                            }?>
                                        </td>
                                        <td class="center ">
                                             <?php if($PhieuMuon->trang_thai_sach_muon != 0) {?>
                                            <img src="{{URL}}public/images/icon/delete.gif" alt="Xóa" onclick="if (confirm('Xác nhận xóa quyển sách <?= $PhieuMuon->ma_bar_code; ?>?')) {
                                                        thucHienXoa(<?= $PhieuMuon->id; ?>)
                                                    }" title="Xóa phiếu mượn"/>
                                            <?php
                                             }
                                             ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                    <table class="table table-bordered table-striped table-condensed">
                        <tr>
                            <td>
                                Người Mượn:
                            </td>
                            <td>
                                <?php
                                echo General::getHoten($ms) . "( " . $ms . " )";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Đơn vị:
                            </td>
                            <td>
                                <?php
                                echo General::getDonVi($ms);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email:
                            </td>
                            <td>
                                <?php
                                echo General::getEmail($ms);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Điện thoại:
                            </td>
                            <td>
                                <?php
                                echo General::getSDT($ms) . "<br>";
                                ?>
                            </td>
                        </tr>

                    </table>                    
                    <button type = "reset" class = "btn btn-primary" name = "bntTroLai" value = "Trở lại" onclick = "window.location.href = '<?php echo URL; ?>mborrows/listborrows'">Trở lại danh sách phiếu mượn</button>

                </div>

            </div>
        </div>
    </div>
</div>
<form name = "formXoa" id = "frmXoaId" method = "post" action = "<?= URL; ?>mborrows/deleteborrowsdetail">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIPhieuMuonId" value="" />
</form>
<form name="formEdit" id="formEditId" method="get" action="<?= URL; ?>mborrows/editdetail">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIdPhieuMuonId" value="" />
</form>
<script type='text/javascript'>
    function thucHienXoa(id) {
        document.formXoa.txtIdPhieuMuon.value = id;
        document.formXoa.submit();
    }
    function thucHienSua(id) {
        document.formEdit.txtIdPhieuMuon.value = id;
        document.formEdit.submit();
    }
    function ThucHienIn(host, IdDetail) {
        var url = host + 'mborrows/printdetail' + '?txtIdDetail=' + IdDetail;
        PopUp(url);
    }
</script>
@stop