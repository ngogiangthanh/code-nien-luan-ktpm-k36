@extends('layouts.print')
@section('content')
<?php
$stt = 0;
?>
<button type="submit" name="txtIn" onclick="this.style.display = 'none';
        window.print();">In Trang Này</i></button>

<!--//<div style="text-align: center; margin: -15 0 0 0;" ><h2>THỐNG KÊ</h2></div>-->
<div style="text-align: center; margin: -15 0 0 0;" ><h2>THỐNG KÊ DANH SÁCH CÁC SÁCH TRỂ HẸN</h2></div>
<div style="text-align: center; margin: -15 0 0 0;" >(Kèm theo Thông tư số: 11/2013/ĐHCT ngày 25 tháng 11 năm 2013</div>
<div style="text-align: center;" > của Thư viện Khoa Công nghệ Thông tin và Truyền thông)</div>
<div class="line"></div>
&nbsp;
<table cellspacing="0" cellspadding="0" width="100%" border="0" style="border-top: 1px solid #ccc">
    <tr align="center" style="font-weight: bold">
        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">STT</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã BarCode</td>
        <td width="45%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Tên Đầu Sách</td>
        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Ngôn Ngữ</td>
        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Thời gian hẹn trả</td>
        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;">Mã Số Người Mượn</td>
    </tr>
<?php
foreach ($dsSachMuon as $SachMuon) {
    ?>
        <tr align="center">
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= ++$stt ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $SachMuon->ma_bar_code ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $SachMuon->ten_dau_sach ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $SachMuon->ngon_ngu_sach ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('d/m/Y', strtotime($SachMuon->thoi_gian_hen_tra)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;"><?= $SachMuon->ma_so_the ?></td>
        </tr>
    <?php
}
?>
</table>
<?php
echo "Thời gian in: ".date('H:i:s d/m/Y', time());
?>
@stop