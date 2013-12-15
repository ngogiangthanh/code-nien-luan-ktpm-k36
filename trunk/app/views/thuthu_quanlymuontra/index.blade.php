@extends('layouts.default')
@section('content')
<?php
$stt = 0;
$txtLoaiUser = '';
$txtTK = '';
$isFilterLoaiUser = false;
$isTK = false;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $stt = ($page - 1) * QUAN_LY_SO_NGUOI_DUNG_TREN_TRANG;
}
if (isset($_GET['txtLoaiUser'])) {
    $txtLoaiUser = $_GET['txtLoaiUser'];
    $isFilterLoaiUser = true;
}
if (isset($_GET['txtTimKiem'])) {
    $txtTK = $_GET['txtTimKiem'];
    $isTK = true;
}
?>
<?php
$test="";
foreach($dsPhieuMuon as $PhieuMuon) {
    $test=$PhieuMuon->ma_so_phieu;
} if($test==""||$test==null) {
    ?>
   <div class="row-fluid">
    <div class="box span12">
            <div class='box'>
                <div class="box-header">
                    <h2>
                        <i class="icon-file"></i>Danh Sách Phiếu Mượn
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"></</a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <?php
                        if ($isTK || $isFilterLoaiUser) {
                            ?>
                            <a href="<?= URL; ?>mborrows/listborrows">Trở về ds phiếu mượn</a>
                            <?php
                        }
                        ?>
                        <input class="form-control" style="width:200px"  type='text' name='txtNDTK' id='txtNDTKId' placeholder="Nhập mã số thẻ" value="<?php
                        if ($isTK) {
                            echo $txtTK;
                        }
                        ?>"/> 
                        <input type='button' name='btnTK' id='btnTKId' value='Thực hiện lọc' class='btn btn-primary' onclick="return thucHienTK((document.getElementById('txtNDTKId').value))"/>
                        &nbsp;Trạng thái phiếu&nbsp;
                        <select class="form-control" style="width:200" pxname='loaiUser' id='loaiUserId'  onchange="thucHienLoc(document.getElementById('loaiUserId').value) ">
                            <option value="all" <?php if ($txtLoaiUser == '') echo "selected='selected'"; ?>>--- Tất cả ---</option>
                            <option value="0" <?php if ($txtLoaiUser == '0') echo "selected='selected'"; ?>>Online</option>
                            <option value="2" <?php if ($txtLoaiUser == '2') echo "selected='selected'"; ?>>Bị hủy</option>
                        </select> 
                        <input type='button' name='btnThem' id='btnThemId' value='Thêm phiếu mượn' class='btn btn-primary' onclick="location.href = '<?= URL ?>mborrows/addborrows'"/>
                        <form name="frmCheckPrint" method="post" action="<?= URL; ?>musers/prints">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <tr>
                                        <td>STT</td>
                                        <td>Mã Số Phiếu</td>
                                        <td>Mã Số Người Mượn</td>
                                        <td>Chi tiết</td>
                                        <td>Thời Gian Lập</td>
                                        <td>Thời Gian Xử Lý</td>
                                        <td>Mã Số Người Lập</td>
                                        <td>Tráng Thái</td>
                                        <td>Cập Nhật</td>
                                        <td>Xóa</td>
                                    </tr>
                                </tbody>
                            </table>
                          <?php
                          echo "Không tìm thấy phiếu mượn"
                          ?>
                    </div>
                </div>
            </div>
 
    </div>
   </div>
<?php
} else {
?>
<div class="row-fluid">
    <div class="box span12">
            <div class='box'>
                <div class="box-header">
                    <h2>
                        <i class="icon-file"></i>Danh Sách Phiếu Mượn
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid">

                        <?php
                        if (Session::has('message')) {
                            echo "<p style='color:green;'>" . Session::get('message') . "</p>";
                        }
                        ?>
                        <?php
                        if ($isTK || $isFilterLoaiUser) {
                            ?>
                            <a class="btn btn-primary" style="width:200px" href="<?= URL; ?>mborrows/listborrows">Trở về ds phiếu mượn</a>
                            <?php
                        }
                        ?>
                        <img  src="{{URL}}public/images/icon/documents.gif" name="" id="" value="" onclick="ThucHienIn('<?= URL ?>', document.getElementById('txtNDTKId').value, document.getElementById('loaiUserId').value)" title="Thực hiện in"/>&nbsp;
                        <input class="form-control" style="width:200px"type='text' name='txtNDTK' id='txtNDTKId' placeholder="Nhập mã số thẻ" value="<?php
                        if ($isTK) {
                            echo $txtTK;
                        }
                        ?>"/> 
                        <input type='button' name='btnTK' id='btnTKId' value='Thực hiện lọc' class='btn btn-primary' onclick="return thucHienTK((document.getElementById('txtNDTKId').value))"/>&nbsp;Trạng thái phiếu&nbsp;
                        <select class="form-control" style="width:200px"name='loaiUser' id='loaiUserId'  onchange="thucHienLoc(document.getElementById('loaiUserId').value)">
                            <option value="all" <?php if ($txtLoaiUser == '') echo "selected='selected'"; ?>>--- Tất cả ---</option>
                            <option value="0" <?php if ($txtLoaiUser == '0') echo "selected='selected'"; ?>>Online</option>
                            <option value="2" <?php if ($txtLoaiUser == '2') echo "selected='selected'"; ?>>Bị hủy</option>
                        </select> 
                        <input type='button' name='btnThem' id='btnThemId' value='Thêm phiếu mượn' class='btn btn-primary' onclick="location.href = '<?= URL ?>mborrows/addborrows'"/>
                        <form name="frmCheckPrint" method="post" action="<?= URL; ?>musers/prints">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <tr>
                                        <td>STT</td>
                                        <td>Mã Số Phiếu</td>
                                        <td>Mã Số Người Mượn</td>
                                        <td>Chi tiết</td>
                                        <td>Thời Gian Lập</td>
                                        <td>Thời Gian Xử Lý</td>
                                        <td>Mã Số Người Lập</td>
                                        <td>Tráng Thái</td>
                                        <td>Cập Nhật</td>
                                        <td>Xóa</td>
                                    </tr>
                                    <?php
                                    $i = 0;
                                    foreach ($dsPhieuMuon as $PhieuMuon) {
                                        ?>
                                        <tr class="odd">
                                            <td class="center "><?= ++$stt ?></td>
                                            <td class="center "><?= $PhieuMuon->ma_so_phieu ?></td>
                                            <td class="center "><?= $PhieuMuon->ma_so_the ?></td>
                                            <td class="center ">
                                                <img src="{{URL}}public/images/icon/view.gif" name="" id="" value="" onclick="thucHienXem(<?= $PhieuMuon->id; ?>)"  title="Chi tiết phiếu mượn"/>
                                            </td>
                                            <td class="center "><?= date('H:i:s d/m/Y', strtotime($PhieuMuon->thoi_gian_lap)) ?></td>
                                            <td class="center "><?php if($PhieuMuon->thoi_gian_xu_ly==null||$PhieuMuon->thoi_gian_xu_ly=="") echo "Không có"; else echo date('H:i:s d/m/Y', strtotime($PhieuMuon->thoi_gian_xu_ly)) ?></td>
                                            <td class="center "><?php if($PhieuMuon->id_nguoi_xu_ly==null||$PhieuMuon->id_nguoi_xu_ly=="") {echo "Đặt mượn online"; } else echo General::getMst($PhieuMuon->id_nguoi_xu_ly) ?></td>
                                            <td class="center "><?php if($PhieuMuon->trang_thai_phieu==0) { echo "Mượn online";} else if($PhieuMuon->trang_thai_phieu==1) { echo "Xử lý"; } else if($PhieuMuon->trang_thai_phieu==2) {echo "Bị hủy"; }
                                            ?></td>
                                            <td class="center ">
                                                <?php
                                                $now=time();
                                                if($PhieuMuon->trang_thai_phieu==0) {
                                                ?>
                                                <a onclick="thucHienSua(<?= $PhieuMuon->id; ?>)"><img src="{{URL}}public/images/icon/edit.gif" alt="Sửa" title="Cập nhật phiếu mượn"/></a>
                                                <?php
                                                }?>
                                            </td>
                                            <td class="center ">
                                                <?php
                                                if($PhieuMuon->trang_thai_phieu==0) {
                                                ?>
                                                <img src="{{URL}}public/images/icon/delete.gif" alt="Xóa" onclick="if (confirm('Xác nhận xóa phiếu <?= $PhieuMuon->ma_so_phieu; ?>?')) {
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
                        <div class="row">
                            <div class="col-lg-12 center">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <?php
                                    if (!$isTK && $isFilterLoaiUser) {
                                        echo $dsPhieuMuon->appends(array('txtLoaiUser' => $txtLoaiUser))->links();
                                    } else if ($isTK && !$isFilterLoaiUser) {
                                        echo $dsPhieuMuon->appends(array('txtTimKiem' => $txtTK))->links();
                                    } else if ($isTK && $isFilterLoaiUser) {
                                        echo $dsPhieuMuon->appends(array('txtTimKiem' => $txtTK, 'txtLoaiUser' => $txtLoaiUser))->links();
                                    } else {
                                        echo $dsPhieuMuon->links();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<form name='formXem' id='formXemId' method="post" action="<?= URL; ?>mborrows/detailborrows">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIdPhieuMuonId" value="" />
</form>
<form name="formXoa" id="frmXoaId" method="post" action="<?= URL; ?>mborrows/deleteborrows">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIPhieuMuonId" value="" />
</form>
<form name="formEdit" id="formEditId" method="get" action="<?= URL; ?>mborrows/edit">
    <?= Form::token(); ?>
    <input type="hidden" name="txtIdPhieuMuon" id="txtIdPhieuMuonId" value="" />
</form>
<form name="frmTK" id="frmTKId" method="get" action="<?= URL; ?>mborrows/listborrows">
    <input type="hidden" name="txtTimKiem" id="txtTimKiemId" value=""/>
    <?php
    echo Form::token();
    if ($isFilterLoaiUser) {
        ?>
        <input type="hidden" name="txtLoaiUser" id="txtLoaiUserId" value="<?= $txtLoaiUser; ?>" />
        <?php
    }
    ?>
</form>
<form name="frmLoc" id="frmLocId" method="get" action="<?= URL; ?>mborrows/listborrows">
    <?php
    echo Form::token();
    if ($isTK) {
        ?>
        <input type="hidden" name="txtTimKiem" id="txtTimKiemId" value="<?= $txtTK; ?>"/>
        <?php
    }
    ?>
    <input type="hidden" name="txtLoaiUser" id="txtLoaiUserId" value="" />       
</form>
<?php
if (Session::has('result')) {
    if (Session::get('result')) {
        echo "<script>alert('Xóa thành công!')</script>";
    } else {
        echo "<script>alert('Không thực hiện được thao tác!')</script>";
    }
}
}
?>
<script type='text/javascript'>
                            function thucHienXem(id) {
                                document.formXem.txtIdPhieuMuon.value = id;
                                document.formXem.submit();
                            }
                            function thucHienXoa(id) {
                                document.formXoa.txtIdPhieuMuon.value = id;
                                document.formXoa.submit();
                            }
                            function thucHienSua(id) {
                                document.formEdit.txtIdPhieuMuon.value = id;
                                document.formEdit.submit();
                            }
                            function thucHienLoc(idLoai) {
                                document.frmLoc.txtLoaiUser.value = idLoai;
                                document.frmLoc.submit();
                            }
                            function thucHienTK(TK) {
                                var txtTK = trim(TK);
                                if ((txtTK == "" || txtTK == null))
                                {
                                    alert("Xin nhập mã số thẻ người dùng cần kiểm tra");
                                    document.getElementById('txtNDTKId').focus();
                                    return false;
                                }
                                else {
                                    document.frmTK.txtTimKiem.value = txtTK;
                                    document.frmTK.submit();
                                    return true;
                                }
                                return false;
                            }
                            function ThucHienIn(host, TK, idLoaiUser) {
                                var url = host + 'mborrows/printt' + '?txtTimKiem=' + TK + '&txtLoaiUser=' + idLoaiUser;
                                PopUp(url);
                            }
</script>
@stop