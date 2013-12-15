@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2>
                <i class="icon-edit"></i>Đổi mật khẩu
            </h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">     
                <?php if (Session::has('message')) {
                ?>
                <p style="color: green">
                    <?= Session::get('message')."<br/>" ?>
                    <?=Auth::user()->password?>
                </p>
                <?php
            }
            ?>
            <form method="post" action="<?= URL . "changepass" ?>" name="frmChangePass" id="frmChangePassId" onsubmit='return checkFormChangePass(this)'>
                <?= Form::token() ?>    
                <div class="input-group">
                    <span class="input-group-addon">Mật khẩu cũ:</span>
                    <input type="password" placeholder="Mật khẩu cũ" class="form-control" name="oldpassword" id="oldpasswordId" value="" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Mật khẩu mới:</span>
                    <input type="password" placeholder="Mật khẩu mới" class="form-control" name="newpassword" id="newpasswordId" value="" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Xác nhận mật khẩu:</span>
                    <input type="password" placeholder="Xác nhận lại mật khẩu" class="form-control" name="cfnewpassword" id="cfnewpasswordId" value="" />
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                    <button type="reset" class="btn btn-prev" onclick='history.back(-1)'>Trang trước</button>
                </div>
            </form>
        </div> 
    </div>
</div>
<script type='text/javascript'>
    function checkFormChangePass(string) {
        var oldpass = string.oldpassword.value;
        var newpass = string.newpassword.value;
        var cfnewpass = string.cfnewpassword.value;

        if (oldpass.length <= 3) {
            alert('Mật khẩu không được ngắn hơn 3 ký tự!');
            string.oldpassword.focus();
            return false;
        }
        else if (newpass.length <= 3) {
            alert('Mật khẩu mới không được ngắn hơn 3 ký tự!');
            string.newpassword.focus();
            return false;
        }
        else if (cfnewpass.length <= 3) {
            alert('Xác nhận mật khẩu mới không được ngắn hơn 3 ký tự!');
            string.cfnewpassword.focus();
            return false;
        }
        else if (cfnewpass != newpass) {
            alert('Mật khẩu mới và xác nhận lại không khớp!');
            string.cfnewpassword.focus();
            return false;
        }
        else {
            return true;
        }
    }
</script>
@stop