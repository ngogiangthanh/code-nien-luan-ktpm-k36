@extends('layouts.default')
@section('content')
<?php
$stt = 0;
if (isset($_GET['page']))
    $stt = ($_GET['page'] - 1) * QUAN_LY_SO_HOAT_DONG_TREN_TRANG;
?>
<div class='col-lg-12'>
    <div class="post">
        <div class="box">
            <div class="box-header">
                <h2>Bảng lịch sử hoạt động<h2>
            </div>
            <div class="box-content">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table class="table table-striped table-bordered" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">  		  
                       <tbody role="alert" aria-live="polite" aria-relevant="all">
                           <tr role="row">
                                <td><input type="checkbox"/></th>
                                <td>STT</th>
                                <td>Người dùng</th>
                                <td>Địa chỉ IP</th>
                                <td>Mô tả tác vụ</th>
                                <td>Thời gian thực hiện</th>

                            </tr>
                        <?php
                            foreach ($hoatdongnguoidung as $hoatdong) {
                                ?>
                        <tr>
                        <td>
                            <input type="checkbox"/>
                        </td>
                        <td>
                            <?php echo ++$stt; ?>
                        </td>
                        <td>
                            <?php echo $hoatdong->ma_so_the ?>
                        </td>
                        <td>
                            <?php echo $hoatdong->dia_chi_ip ?>
                        </td>
                        <td>
                            <?php echo $hoatdong->mo_ta_tac_vu ?>
                        </td>
                        <td>
                            <?php echo date('H:i:s d/m/Y', strtotime($hoatdong->thoi_gian_tac_vu)) ?>
                        </td>
                    </tr>
                            <?php
                        }
                        ?>
                            </tbody>
                </table>
                
            </div>
             </div>
        </div>
        <div class="panel-footer">
            <?php echo $hoatdongnguoidung->links() ?>
        </div>
    </div>
</div>
@stop