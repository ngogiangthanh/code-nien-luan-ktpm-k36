@extends('layouts.login')
@section('content')
<style>
    input:-moz-placeholder,textarea:-moz-placeholder{color:#e4e6eb !important}
    input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#e4e6eb !important}
    input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#e4e6eb !important}
    a{text-decoration: none}
    img.avatar {
        height: 100px;
        width: 100px;
        float: left;
        margin: 30px 40px 30px 95px;
        -webkit-border-radius: 50em;
    }
</style>
<div class="row-fluid">
    <div style="text-align: center;font-family: Arial, sans-serif;">
        <h1>Hệ Thống Quản Lý Thư Viện</h1>
        <h1>Khoa Công Nghệ Thông Tin & Truyền Thông</h1></div>
    <div class="login-box">
        <div class="box-content">
            <form method="post"  action="" name="loginForm" id="loginFormId" class="form-honrizontal" role="form" onsubmit="return checkLoginForm(this)">
                <?= Form::token() ?>
                <img class="avatar" src="http://localhost/libary_it_1.1/public/images/profiles/avatar_2x.png" alt="Avatar" title="Avatar">
                <input type="text" name="username" id="usernameId" value="<?= Input::old('username') ?>"  placeholder="Mã Số Thẻ"  spellcheck="false" required/>  
                <input type="password" name="password" id="passwordId" value="<?= Input::old('password') ?>"  placeholder="Mật khẩu" required/> 
                <h3 style="font-family: Arial, sans-serif;font-size: 13px;color: #404040;direction: ltr;">
                    <?= link_to_route('unregister', 'Chưa có tài khoản?') ?><br/><br/><?= link_to_route('forgotpass', 'Quên mật khẩu?') ?></h3>  
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                @if($errors->has())
                <p style="color:red">
                    <?= $errors->first('ma_so_the', '<li>:message</li>') ?>
                    <?= $errors->first('password', '<li>:message</li>') ?>
                </p>
                @endif
                @if (Session::has('error_message'))
                <p style="color: red">
                    <?= Session::get('error_message') ?>
                </p>
                @endif
                <button type="submit" class="btn btn-primary ">Đăng Nhập</button>
                <button type="reset" class="btn btn-primary ">Làm Lại</button>
            </form>
        </div>
    </div>   
</div> 
@endsection