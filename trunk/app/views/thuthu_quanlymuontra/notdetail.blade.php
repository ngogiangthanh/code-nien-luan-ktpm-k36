@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class='box'>
            <div class="box-header">
                <h2>
                    <i class="icon-file"></i>Danh Sách Các Sách Trong Phiếu
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                Không có sách mượn
                <br>
                <div>                            
                    <button type="reset" class="btn btn-primary" name="bntTroLai" value="Trở lại" onclick="window.location.href = '<?php echo URL; ?>mborrows/listborrows'">Trở lại danh sách phiếu mượn</button>
                </div>
            </div>
        </div>
    </div>

</div>

@stop