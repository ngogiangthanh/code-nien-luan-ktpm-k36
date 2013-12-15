@extends('layouts.default')
@section('content')
<?php
if (is_null($chitiet[0]->thoi_gian_sua)) {
    $last_time = "Đăng vào: " . date("H:i:s d/m/Y", strtotime($chitiet[0]->thoi_gian_dang));
} else {
    $last_time = "Sửa vào: " . date("H:i:s d/m/Y", strtotime($chitiet[0]->thoi_gian_sua));
}
?>
<div class="row-fluid">
    <div class="box span3">
        <div class="row-fluid">
            @include('modules.loaibaiviet')
            <br/>
        </div>
        <div class="row-fluid">
            @include('modules.luottruycap')
        </div>
    </div>
    <div class="box span9">
        <div class="box-header">
            <h3 style="padding: 0px 10px 5px 10px;font-size: 15px">
                <b>
                    <?= html_entity_decode($chitiet[0]->tieu_de_bai_viet, ENT_QUOTES, "UTF-8"); ?>
                </b>
            </h3>
        </div>
        <div class="box-content">
            <p> 
                <i class="icon-time"></i>&nbsp;<?= $last_time ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="icon-user"></i>&nbsp;<?= $chitiet[0]->ho_ten ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="icon-tag"></i>&nbsp;<?= $chitiet[0]->mo_ta_loai_bai_viet ?>
                <br/>
                <br/>
                <b>
                    <?= html_entity_decode($chitiet[0]->tom_tat_bai_viet, ENT_QUOTES, "UTF-8"); ?>
                </b>
                <br/>
                <br/>
                <?= html_entity_decode($chitiet[0]->noi_dung_bai_viet, ENT_QUOTES, "UTF-8"); ?>
                <br/>
                <br/>
                Tags:&nbsp;
                <?php
                if (is_null($tags)) {
                    echo "<i>Không có tag nào.</i>";
                } else {
                    echo "<i>" . html_entity_decode($tags) . "</i>";
                }
                ?>
                <br/>
                <br/>
                <input type="button" onclick="history.back(-1);"value="Quay lại" class='btn btn-primary'/>
            </p>
        </div>
    </div>
</div>
@stop