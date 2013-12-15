@extends('layouts.default')
@section('content')
@include('fckeditor.fckeditor_php5')
<form action="<?php echo URL; ?>mthreads/updatethread/<?php echo $baiviet[0]->id; ?>" method="post" name="formSua" onsubmit="return checkFormEditThread(this)">
    <?php echo Form::token(); ?>      
    <div class="row-fluid">        
        <div class='box span12'>
            <div class="box">
                    <div class="box-header">
                        <h2><i class="icon-edit"></i>Sửa bài viết</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="form-group ">
                            <label class="control-label" for="">Tiêu Đề Bài Viết</label>
                            <input type='text' class="form-control" name='txtTieuDeEdit' id='txtTieuDeEditId' value='<?php echo html_entity_decode($baiviet[0]->tieu_de_bai_viet) ?>' placeholder="Tiêu đề bài viết"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="">Hiển Thị</label>
                            <input type='checkbox' name='txtHienThiEdit' id='txtHienThiEditId' value='true' <?php if ($baiviet[0]->trang_thai_bai_viet == true) echo "checked='checked'"; ?>/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="">Thể Loại Bài Viết</label>
                            <select name="theLoaiEdit" id="" class='form-control' >
                                <option value="" id="loai_macdinhEdit">--- Lựa chọn loại bài ---</option>
                                <?php
                                foreach ($loaiBai as $lb) {
                                    ?>
                                    <option value="<?php echo $lb->id; ?>" id="loaiEdit_<?php echo $lb->id; ?>" <?php if ($baiviet[0]->mo_ta_loai_bai_viet == $lb->mo_ta_loai_bai_viet) echo "selected='selected'"; ?>><?php echo $lb->mo_ta_loai_bai_viet; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="">Tóm Tắt Bài Viết</label>
                            <textarea name="txtTomTatEdit" id="txtTomTatIdEdit" class='form-control' style="height:300px; width:500px">
                                <?php echo html_entity_decode($baiviet[0]->tom_tat_bai_viet) ?>
                            </textarea>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="">Nội Dung Bài Viết</label>
                            <textarea name="txtNoiDungEdit" id="txtNoiDungEditId" class='form-control' style="height:300px; width:500px">
                                <?php echo html_entity_decode($baiviet[0]->noi_dung_bai_viet) ?>
                            </textarea>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="">Tags</label>
                            <input type='text' name='txtTagsEdit' id='txtTagsEditId' value='<?php echo html_entity_decode($tags) ?>' class='form-control' placeholder="tags bài viết"/>
                        </div>
                            <input type='submit' value='Xác nhận' name='submitFormSua' class='btn btn-primary'/>
                            &nbsp;
                            <input type='reset' value='Làm lại' name='resetFormSua'  class='btn btn-prev'/>
                            &nbsp;
                            <input type='button' value='Trang Chủ QL Bài Viết' name='btnTroVe'  class='btn btn-prev' onclick="location.href = '<?= URL ?>mthreads/listthreads'"/>
                    </div>
                </div>
        </div>
    </div>
</form>
<?php
if (Session::has('message')) {
    echo "<script>alert('" . Session::get('message') . "')</script>";
}
?>
<script type="text/javascript" src="<?php echo URL; ?>public/js/fckeditor/fckeditor.js"></script>
<script type="text/javascript">
    var oFCKeditor1 = new FCKeditor('txtTomTatIdEdit');
    oFCKeditor1.BasePath = '<?php echo URL; ?>public/js/fckeditor/';
    oFCKeditor1.Height = 300;
    oFCKeditor1.Value = '';
    //oFCKeditor1.Create() ;
    oFCKeditor1.ReplaceTextarea();
    var oFCKeditor2 = new FCKeditor('txtNoiDungEditId');
    oFCKeditor2.BasePath = '<?php echo URL; ?>public/js/fckeditor/';
    oFCKeditor2.Height = 300;
    oFCKeditor2.Value = '';
    //oFCKeditor1.Create() ;
    oFCKeditor2.ReplaceTextarea();
    function checkFormEditThread(string) {
        var tieuDe = trim(string.txtTieuDeEdit.value);
        var tomTat = trim(string.txtTomTatEdit.value);
        var noiDung = trim(string.txtNoiDungEdit.value);
        var tags = trim(string.txtTagsEdit.value);
        var theLoai = string.theLoaiEdit.value;
        if (tieuDe == null || tieuDe == '')
        {
            alert('Tiêu đề không được rỗng!');
            string.txtTieuDeEdit.focus();
            return false;
        }
        else if (theLoai == '' || theLoai == null) {
            alert('Bạn chưa chọn loại bài viết!');
            string.theLoaiEdit.focus();
            return false;
        }
        else if (tomTat == null || tomTat == '') {
            alert('Tóm tắt không được rỗng!');
            string.txtTomTatEdit.focus();
            return false;
        }
        else if (noiDung == null || noiDung == '') {
            alert('Nội dung không được rỗng!');
            string.txtNoiDungEdit.focus();
            return false;
        }
        else {
            if(!isSpeacialChar(tieuDe))
                {
                    alert('Tiêu đề không được chứa các ký tự đặc biệt!');
                    string.txtTieuDeEdit.focus();
                    return false;
                }
                else if(!isSpeacialChar(tags) && tags != '')
                {
                    alert('Tags không được chứa các ký tự đặc biệt!');
                    string.txtTagsEdit.focus();
                    return false;
                }
                else{
                    return true;
                }
        }
    }
</script>
@stop