@extends('layouts.default')
@section('content')
<div class="row-fluid">		
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="icon-user"></i><span class="break"></span>Gia hạn sách mượn</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Mã số quyển sách:</td>
                    <td><?= $chitietqs[0]->ma_bar_code; ?></td>
                </tr>
                <tr>
                    <td>Tên đầu sách:</td>
                    <td><?= $chitietqs[0]->ten_dau_sach; ?></td>
                </tr>
                <tr>
                    <td>Chọn thời gian gia hạn:</td>
                    <td><?php
                        $nhom_nguoi_dung = Auth::user()->id_nhom_quyen_han;
                        if ($nhom_nguoi_dung == 3) {
                            $so_luong_quy_dinh = SO_NGAY_MUON_CB;
                        } else {
                            $so_luong_quy_dinh = SO_NGAY_MUON_SV;
                        }
                        ?>
                        <input class="form-control" type='date' value='<?= date("Y-m-d", strtotime($chitietqs[0]->thoi_gian_hen_tra) + 86400) ?>' name="txtthoigian" id='idtg' required='required' min='<?= date("Y-m-d", strtotime($chitietqs[0]->thoi_gian_hen_tra) + 86400) ?>'  max='<?= date("Y-m-d", strtotime($chitietqs[0]->thoi_gian_hen_tra) + 86400 * $so_luong_quy_dinh) ?>'/></td>
                </tr>


            </table>
            <center>
                <input type='type' name='btnGuiGiaHan' value='Gia hạn' class='btn btn-primary' style="" onclick="giaHan('<?= $chitietqs[0]->id ?>', '<?= $chitietqs[0]->thoi_gian_hen_tra ?>', document.getElementById('idtg').value)"/>&nbsp;
                <input type='button' name='btnQuayLai' value='Quay lại trang tra cứu' class='btn btn-pre' onclick="" />
            </center>

        </div>
    </div><!--/span-->

</div><!--/row-->
<form action='<?= URL ?>luugiahan' method='post' name='frmGuiGiaHan'>
    <?= Form::token() ?>
    <input type='hidden' name='idchitietquyensach' value=''/>
    <input type='hidden' name='thoigianhientai' value=''/>
    <input type='hidden' name='thoigiangiahan' value=''/>
</form>
<script type='text/javascript'>
    function giaHan(idctpm, ngayht, ngaygh)
    {
        document.frmGuiGiaHan.idchitietquyensach.value = idctpm;
        document.frmGuiGiaHan.thoigianhientai.value = ngayht;
        document.frmGuiGiaHan.thoigiangiahan.value = ngaygh;
        document.frmGuiGiaHan.submit();
    }
</script>
@stop