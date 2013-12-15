@extends('layouts.default')
@section('content')
<?php 
    if(!is_null($backup)){
        echo $backup;
    }
    if(!is_null($restore)){
        echo $restore;
    }
?>
<script type="text/javascript">
function check(){
    if(document.getElementById('dir').value == ""){
        alert('Bạn chưa chọn file phục hồi!!!');
        return false;
    }
    return true;

}
</script>
<div class="row-fluid">
    <form method="get" name="system">
    <div class="box span1"></div>
    <div class="box span5">
    
        <div class="box-header"><h2>
                    <i class="icon-cogs"></i>Sao Lưu
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div></div>
        <div class="box-content">
        Chức năng sao lưu cơ sở dữ liệu ra tệp tin sql. Tập tin sql tạo ra có dạng <b>[lib_yyyy-mm-dd_t.sql]</b>
        <br/>Nhấn chọn nút <b>Sao lưu</b> để xuất cơ sở dữ liệu hiện tại thành tập tin sql: 
        <div><input type="submit" name="btn_ex" class="button_1" value="Sao lưu" /></div> </div>
 
</div>

<div class="box span5">
    
        <div class="box-header"><h2>
                    <i class="icon-cogs"></i>Phục Hồi
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div></div>
        <div class="box-content">Chức năng khôi phục cơ sở dữ liệu tại 1 thời điểm cụ thể đã được sao lưu trước đó
        Chọn tệp tin sql chứa cơ sở dữ liệu tại thời gian muốn khôi phục. Tập tin có dạng <b>lib_yyyy_mm_dd_t.sql</b>
        <div></div>
        <input type="submit" name="btn_im" class="button_1" value="Phục hồi" onclick="return check();"/></div>
    
</div>
    </form>
    <div class="box span1"></div>
</div>

@stop