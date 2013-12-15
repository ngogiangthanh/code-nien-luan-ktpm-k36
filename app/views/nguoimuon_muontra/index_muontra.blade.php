@extends('layouts.default')
@section('content')
<div class="row-fluid">		
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="icon-user"></i><span class="break"></span>Lịch Sử Mượn Trả</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php 
            $trangthai = 6;
            if(Input::has('tinhtrang'))
            {
                $trangthai = Input::get('tinhtrang');
            }
            if (Session::has('success_message')) {
                ?>
                <p style="color: green">
                    <?= Session::get('success_message') ?>
                </p>
                <?php
            }
            ?>
            Trạng thái mượn:
            <select class="form-control" name='trangthai' id='trangThaiId' onchange="chonTinhTrang(document.getElementById('trangThaiId').value)">
                <option value='6' <?php if($trangthai == '6') echo "selected";?>>--Tất Cả--</option>
                <option value='0' <?php if($trangthai == '0') echo "selected";?>>-- Đã trả ---</option>
                <option value='1' <?php if($trangthai == '1') echo "selected";?>>-- Đang mượn đúng hẹn ---</option>
                <option value='2' <?php if($trangthai == '2') echo "selected";?>>-- Đang mượn bị trể hẹn ---</option>
                <option value='3' <?php if($trangthai == '3') echo "selected";?>>-- Sách mượn đã bị mất ---</option>
                <option value='4' <?php if($trangthai == '4') echo "selected";?>>-- Sách đang giữ chổ ---</option>
                <option value='5' <?php if($trangthai == '5') echo "selected";?>>-- Đăng ký mượn bị hủy ---</option>
            </select>
            <table class="table table-striped table-bordered" >
                

                <tbody>
                    <tr>
                    <td>STT</td>
                    <td>Mã Quyển Sách</td>
                    <td>Tên Sách</td>
                    <td>Ngày Mượn</td>
                    <td>Ngày Trả</td>
                    <td>Tình Trạng</td>
                    <td>Tác vụ</td>
                </tr>
                    <?php
                    $stt = 0;
                    if (count($quyensachs) != 0) {
                        foreach ($quyensachs as $quyensach) {
                            ?>
                            <tr>
                                <td class="center"><?= ++$stt ?></td>
                                <td class="center"><?= $quyensach->ma_bar_code ?></td>
                                <td class="center"><?= $quyensach->ten_dau_sach ?></td>
                                <td class="center"><?= date("d/m/Y", strtotime($quyensach->thoi_gian_muon)) ?></td>
                                <td class="center"><?= date("d/m/Y", strtotime($quyensach->thoi_gian_hen_tra)) ?></td>
                                <td class="center" >
                                    <?php
                                    $checksn = true;
                                    switch ($quyensach->trang_thai_sach_muon) {
                                        case 0: echo "<input style='color:white !important;'class='btn btn-large btn-primary' type='text' value='Đã Trả' readonly>";
                                            break;
                                        case 1: if(ChiTietPhieuMuonSach::kiemTraTrangThai($quyensach->id))
                                                    echo "<input style='color:white !important;'class='btn btn-large btn-success' type='text' value='Mượn Đúng Hẹn' readonly>";
                                                else 
                                                {
                                                    echo "<input style='color:white !important;'class='btn btn-large btn-warning' type='text' value='Đang Trễ Hẹn' readonly>";
                                                    $checksn = FALSE;
                                                }
                                            break;
                                        case 2: echo "<input style='color:white !important;'class='btn btn-large btn-warning' type='text' value='Đang Trễ Hẹn' readonly>";
                                            break;
                                        case 3: echo "<input style='color:white !important;'class='btn btn-large btn-inverse' type='text' value='Đã Làm Mất' readonly>";
                                            break;
                                        case 4: echo "<input style='color:white !important;'class='btn btn-large btn-info' type='text' value='Đang Giữ Chỗ' readonly>";
                                            break;
                                        case 5: echo "<input style='color:white !important;'class='btn btn-small' type='text' value='Giữ Chỗ Đã Huỷ' readonly>";
                                            break;
                                        default: echo "<input style='color:white !important;'class='btn btn-small' type='text' value='Giữ Chỗ Đã Huỷ' readonly>";
                                            break;
                                    }
                                    ?>
                                </td>
                                <td class="center">
                                    <?php
                                    if ($quyensach->trang_thai_sach_muon == 1 && $checksn) {
                                    $checksl = DangKiGiaHanSach::kiemTraTrangThai($quyensach->id);
                                    if($checksl)
                                    {
                                        ?>
                                        <img src='<?= URL ?>public/images/icon/edit.gif' width='30px' alt='Gia hạn' title='Gia hạn' onclick='giaHan(<?=$quyensach->id?>)'/>
                                        <?php
                                    }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                    <td class="center" colspan='7'>Bạn chưa mượn lần nào.</td>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->
<form action='' method='get' name='frmLuaChon'>
    <input type='hidden' name='tinhtrang' value=''/>
</form>
<form action='<?=URL?>giahan' method='post' name='frmGiaHan'>
    <?=Form::token()?>
    <input type='hidden' name='idchitietquyensach' value=''/>
</form>
<script type='text/javascript'>
    function chonTinhTrang(tinhtrang)
    {
        document.frmLuaChon.tinhtrang.value = tinhtrang;
        document.frmLuaChon.submit();
    } 
    function giaHan(idctpm)
    {
        document.frmGiaHan.idchitietquyensach.value = idctpm;
        document.frmGiaHan.submit();
    }
</script>
@stop