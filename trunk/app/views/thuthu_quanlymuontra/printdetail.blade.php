@extends('layouts.print')
@section('content')
<?php
$stt = 0;
?>
<?php 
$ms=0;
$mp=0;
foreach($dsPhieuMuon as $PhieuMuon) {
 $ms = General::getMst($PhieuMuon->id_nguoi_muon);
 $mp = General::getMaPhieuMuon(General::getIdPhieuMuon($PhieuMuon->id));
}
?>
<button type="submit" name="txtIn" onclick="this.style.display = 'none';
        window.print();">In Trang Này</i></button>
<div style="text-align: center; margin: -15 0 0 0;" ><h2>DANH SÁCH CÁC SÁCH TRONG PHIẾU MƯỢN</h2></div>
<div style="text-align: center; margin: -15 0 0 0;" >(Kèm theo Thông tư số: 11/2013/ĐHCT ngày 25 tháng 11 năm 2013</div>
<div style="text-align: center;" > của Thư viện Khoa Công nghệ Thông tin và Truyền thông)</div>
<div class="line"></div>
<table class="table" width='100%' >
<?php
echo "<tr>"."<td>"."Mã Phiếu: "."</td>"."<td>". $mp . "</td>"."<td>"."Thời gian in: "."</td>"."<td>". date('H:i:s d/m/Y', time()) . "</td>"."</tr>";
echo "<tr>"."<td>"."Người Mượn: "."</td>"."<td>". General::getHoten($ms) . "(" . $ms . ")"  . "</td>"."<td>"."Đơn vị: "."</td>"."<td>". General::getDonVi($ms) . "</td>"."</tr>";
echo "<tr>"."<td>"."Email: "."</td>"."<td>". General::getEmail($ms) . "</td>"."<td>"."Điện thoại: "."</td>"."<td>". General::getSDT($ms) . "</td>"."</tr>";
?>
</table>
<table cellspacing="0" cellspadding="0" width="100%" border="0" style="border-top: 1px solid #ccc">
    <tr align="center" style="font-weight: bold">
        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">STT</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã BarCode</td>
        <td width="35%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Tên Đầu Sách</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Thời Gian Mượn</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Thời Gian Hẹn Trả</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Ghi Chú Sách</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã Số Người Lập</td>
        <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">TG cập nhật TT</td>
        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc">Tráng Thái</td>
    </tr>
    <?php
    $stt = 0;
    foreach ($dsPhieuMuon as $PhieuMuon) {
        ?>
        <tr align="center">
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= ++$stt ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $PhieuMuon->ma_bar_code ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $PhieuMuon->ten_dau_sach ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('d/m/Y', strtotime($PhieuMuon->thoi_gian_muon)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('d/m/Y', strtotime($PhieuMuon->thoi_gian_hen_tra)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?php if ($PhieuMuon->ghi_chu_sach_muon == null || $PhieuMuon->ghi_chu_sach_muon == "") {
            echo "Không có ghi chú nào";
        } else {
            echo $PhieuMuon->ghi_chu_sach_muon;
        } ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= General::getMst($PhieuMuon->id_nguoi_cap_nhat) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= date('H:i:s d/m/Y', strtotime($PhieuMuon->tg_cap_nhat_trang_thai)) ?></td>
            <td style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;">
        <?php if ($PhieuMuon->trang_thai_sach_muon==0) { echo "Trả"; } 
        else if($PhieuMuon->trang_thai_sach_muon==1) { echo "Đang mượn"; } 
        else if($PhieuMuon->trang_thai_sach_muon==2) { echo "Chưa trả"; } 
        else if($PhieuMuon->trang_thai_sach_muon==3) { echo "Mất"; } 
        else if($PhieuMuon->trang_thai_sach_muon==4) { echo "Đặt chỗ"; } 
        else if($PhieuMuon->trang_thai_sach_muon==5) { echo "Yêu cầu bị hủy"; } 
        ?>
            </td>
        </tr>
    <?php
}
?>
</table>
<style>
    .sign{
        float: right;
        margin: 0px 70px 0px 0px;
        text-align: center;
    }  
</style>
<div class="sign">
    <p>Cần Thơ, Ngày ...... Tháng ...... Năm ........</p>
    <i>(Ký Tên)</i>
</div>
@stop