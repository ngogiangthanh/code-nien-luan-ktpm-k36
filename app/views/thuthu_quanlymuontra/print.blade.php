@extends('layouts.print')
@section('content')
<?php
$stt = 0;
322
?>
<input type="button" name="txtIn" value="In trang này" onclick="this.style.display = 'none';
        window.print();">
<div style="text-align: center; margin: -15 0 0 0;" ><h2>THỐNG KÊ DANH SÁCH CÁC PHIẾU MƯỢN</h2></div>
<div style="text-align: center; margin: -15 0 0 0;" >(Kèm theo Thông tư số: 11/2013/ĐHCT ngày 25 tháng 11 năm 2013</div>
<div style="text-align: center;" > của Thư viện Khoa Công nghệ Thông tin và Truyền thông)</div>
<div class="line"></div>
&nbsp;
<table cellspacing="0" cellspadding="0" width="100%" border="0" style="border-top: 1px solid #ccc">
    <tr align="center" style="font-weight: bold">
        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">STT</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã số phiếu</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã số người mượn</td>
        <td width="20%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Thời gian lập</td>
        <td width="20%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Ghi chú</td>
        <td width="20%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Thời gian xử lý</td>
        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;">Trạng thái</td>
    </tr>
    <?php
    foreach ($dsPhieuMuon as $dsPM) {
        ?>
        <tr align="center">
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= ++$stt ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $dsPM->ma_so_phieu ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $dsPM->ma_so_the ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('H:i:s d/m/Y', strtotime($dsPM->thoi_gian_lap)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?php if ($dsPM->ghi_chu_phieu == "" || $dsPM->ghi_chu_phieu == null) echo "Không có ghi chú";
    else echo $dsPM->ghi_chu_phieu; ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('H:i:s d/m/Y', strtotime($dsPM->thoi_gian_xu_ly)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;"><?php if($dsPM->trang_thai_phieu==0) { echo "Mượn online";} else if($dsPM->trang_thai_phieu==1) { echo "Đang mượn"; } else if($dsPM->trang_thai_phieu==2) {echo "Bị hủy"; }
         ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<?php
echo "Thời gian in: " . date('H:i:s d/m/Y', time());
?>
@stop