@extends('layouts.print')
@section('content')
<?php
$stt=0;
?>
<input type="button" name="txtIn" value="In trang này" onclick="this.style.display='none'; window.print();window.print()">
        <div style="text-align: center; margin: -15 0 0 0;" ><h2>THỐNG KÊ DANH SÁCH CÁC SÁCH ĐƯỢC MƯỢN NHIỀU</h2></div>
        <div style="text-align: center; margin: -15 0 0 0;" >(Kèm theo Thông tư số: 11/2013/ĐHCT ngày 25 tháng 11 năm 2013</div>
        <div style="text-align: center;" > của Thư viện Khoa Công nghệ Thông tin và Truyền thông)</div>
        <div class="line"></div>
        &nbsp;
              <table cellspacing="0" cellspadding="0" width="100%" border="0" style="border-top: 1px solid #ccc">              
                                <tr align="center" style="font-weight: bold">
                                    <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">STT</td>
                                    <td width="10%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Mã BarCode</td>
                                    <td width="43%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Tên Đầu Sách</td>
                                    <td width="25%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Giới Thiệu</td>
                                    <td width="7%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">Ngôn Ngữ</td>
                                    <td width="15%" width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;">Ghi Chú</td>
                                </tr>
                                <?php
                                foreach($dsSachMuon as $dsMuonNhieu){
                                ?>
                                 <tr align="center">
                                        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= ++$stt ?></td>
                                        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?= $dsMuonNhieu->ma_bar_code ?></td>
                                        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc"><?=$dsMuonNhieu->ten_dau_sach?></td>
                                        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">
                                            <?php if(trim($dsMuonNhieu->gioi_thieu_sach) == "") 
                                                {
                                                echo "<i>Không có mô tả nào.</i>";
                                                }else{
                                                  echo $dsMuonNhieu->gioi_thieu_sach;
                                                }
                                                ?>
                                        </td>
                                        <td width="5%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc">
                                          <?=$dsMuonNhieu->ngon_ngu_sach?>
                                        </td>
                                        <td width="15%" style="border-left: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;">
                                              <?php if(trim($dsMuonNhieu->ghi_chu_dau_sach) == "") 
                                                {
                                                echo "<i>Không có ghi chú nào.</i>";
                                                }else{
                                                  echo $dsMuonNhieu->ghi_chu_dau_sach;
                                                }
                                                ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
        <?php
echo "Thời gian in: ".date('H:i:s d/m/Y', time());
?>
@stop