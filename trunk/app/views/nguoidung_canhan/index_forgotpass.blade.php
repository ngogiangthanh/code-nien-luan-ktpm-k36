@extends('layouts.login')
@section('content')
@if (Session::has('error'))
  <?= trans(Session::get('reason')) ?>
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif
<form name="" id="" method="post" action="" onsubmit="">
    <input type="text" name="email" id="" value="" placeholder="Email của bạn"/><br/>
    &nbsp;<input type="submit" name="" id="" value="Gửi"/><br/>
<a href="./">Quay lại khung đăng nhập</a>
</form>
@stop