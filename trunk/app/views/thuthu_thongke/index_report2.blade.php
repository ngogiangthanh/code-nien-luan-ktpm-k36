@extends('layouts.default')
@section('content')
<?php
$stt = 0;
$idNgonNgu = "";
$isNN = false;
$allTheLoais = QuanLyQuanLySach::getAllBooks();
$allNgonNgus = QuanLyQuanLySach::getNgonNguSach();
$dsSachMuon = new ThuThuThongKe();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $stt = ($page - 1) * QUAN_LY_SO_DAU_SACH_TREN_TRANG;
}
if (Input::has('txtNgonNgu')) {
    $idNgonNgu = Input::get('txtNgonNgu');
}
$dsSachMuon = $dsSachMuon->getSachMuonNhieu($idNgonNgu);
?>&nbsp&nbsp;
<div class="row-fluid">
    <div class="box span12">
        <div class='box'>
            <div class="box-header">
                <h2>
                    <i class="icon-file"></i>Danh Sách Các Sách Mượn Nhiều
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <?php
                if (Session::has('message')) {
                    echo "<p style='color:green;'>" . Session::get('message') . "</p>";
                }
                ?>
                <img  src="{{URL}}public/images/icon/documents.gif" name="" id="" value="" onclick="ThucHienIn('<?= URL ?>', document.getElementById('selectNgonNguId').value)" title="Thực hiện in"/>
                Ngôn ngữ:
                <select class="form-control" style="width: 220px;"name='selectNgonNgu' id='selectNgonNguId' onchange="ThucHienLocNN(document.getElementById('selectNgonNguId').value)">
                    <option value='allNN' id='AllNNId' <?php if ($idNgonNgu == 'allNN') {
                    echo "selected='selected'";
                } ?>>--Tất Cả--</option>
                    <?php
                    foreach ($allNgonNgus as $ngonngu) {
                        ?>
                        <option value='<?= $ngonngu->ngon_ngu_sach ?>' id='<?= $ngonngu->ngon_ngu_sach ?>Id'  <?php if ($idNgonNgu == $ngonngu->ngon_ngu_sach) {
                        echo "selected='selected'";
                    } ?>><?= $ngonngu->ngon_ngu_sach ?></option>
    <?php
}
?>
                </select>
                &nbsp;
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr>
                            <td>STT</td>
                            <td>Mã BarCode</td>
                            <td>Tên Đầu Sách</td>
                            <td>Giới Thiệu</td>
                            <td>Ngôn Ngữ</td>
                            <td>Hình Ảnh</td>
                            <td>Ghi Chú</td>
                        </tr>
<?php
foreach ($dsSachMuon as $dsMuonNhieu) {
    ?>
                            <tr class="odd">
                                <td class="center"><?= ++$stt ?></td>
                                <td class="center"><?= $dsMuonNhieu->ma_bar_code ?></td>
                                <td class="center"><?= $dsMuonNhieu->ten_dau_sach ?></td>
                                <td class="center ">
                                    <?php
                                    if (trim($dsMuonNhieu->gioi_thieu_sach) == "") {
                                        echo "<i>Không có mô tả nào.</i>";
                                    } else {
                                        echo $dsMuonNhieu->gioi_thieu_sach;
                                    }
                                    ?>
                                </td>
                                <td class="center ">
                                    <?= $dsMuonNhieu->ngon_ngu_sach ?>
                                </td>
                                <td class='center'>
                                    <?php
                                    if (trim($dsMuonNhieu->link_hinh_anh) == "") {
                                        echo "<img src='" . URL . "public/images/books/default.png' title='Sách' alt='Sách' width='80px'/>";
                                    } else {
                                        echo "<img src='" . URL . $dsMuonNhieu->link_hinh_anh . "' title='Sách' alt='Sách' width='80px'/>";
                                    }
                                    ?>
                                </td>
                                <td class="center ">
                                    <?php
                                    if (trim($dsMuonNhieu->ghi_chu_dau_sach) == "") {
                                        echo "<i>Không có ghi chú nào.</i>";
                                    } else {
                                        echo $dsMuonNhieu->ghi_chu_dau_sach;
                                    }
                                    ?>
                                </td>
                            </tr>
    <?php
}
?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-12 center">
                        <div class="dataTables_paginate paging_bootstrap">
                            <?php
                            $link = array();
                            if ($idNgonNgu != "") {
                                $link['txtNgonNgu'] = $idNgonNgu;
                            }
                            echo $dsSachMuon->appends($link)->links();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<form name="frmLoc" id="frmLocId" method="get" action="<?= URL; ?>ttreports/reports2">
    <?php
    if ($idNgonNgu != "") {
        ?>
        <input type="hidden" name="txtNgonNgu" id="txtNgonNgu" value="<?= $idNgonNgu ?>"/>
    <?php
}
?>
    <input type="hidden" name="txtLoaiSach" id="txtLoaiSachId" value="" />       
</form>
<form name="frmLocNgonNgu" id="frmLocNgonNguId" method="get" action="<?= URL; ?>ttreports/reports2">
    <input type="hidden" name="txtNgonNgu" id="txtNgonNguId" value="" />   
</form>
<form name="frmIn" id="frmIn" method="get" action="<?= URL; ?>ttreports/printt2">
    <input type="hidden" name="txtNgonNgu" id="txtNgonNguId" value="" />   
</form>
<script type='text/javascript'>
    function ThucHienLocNN(idNN) {
        document.frmLocNgonNgu.txtNgonNgu.value = idNN;
        document.frmLocNgonNgu.submit();
    }
    function ThucHienIn(host, idNN) {
        var url = host + 'ttreports/printt2' + '?txtNgonNgu=' + idNN;
        PopUp(url);
    }
</script>
@stop