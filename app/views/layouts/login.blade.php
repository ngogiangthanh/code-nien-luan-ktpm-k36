<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
                <link type="image/x-icon" rel="icon" media="all" href="<?php echo URL; ?>public/images/ico-hoclieu.ico">
                    <link media="all" type="text/css" rel="stylesheet" href='<?php echo URL; ?>public/css/bootstrap.css'/>
                    <link media="all" type="text/css" rel="stylesheet" href='<?php echo URL; ?>public/css/style.min.css'/>
                    <link media="all" type="text/css" rel="stylesheet" href='<?php echo URL; ?>public/css/font-awesome.min.css'/>
                    <link media="all" type="text/css" rel="stylesheet" href='<?php echo URL; ?>public/css/nprogresslogin.css'/>
                    <title>
                        {{$title}}
                    </title>
                    </head>
                    <body>
                        <div class="container">
                            <div class="splash">
                                @yield('content')
                            </div>
                        </div>
                        <script src="<?php echo URL; ?>public/js/jquery.js"></script>
                        <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
                        <script src="<?php echo URL; ?>public/js/nprogress.js"></script>
                        <script type="text/javascript">
                            $('body').show();
                            NProgress.start();
                            setTimeout(function() {
                                NProgress.done();
                                $('.fade').removeClass('out');
                            }, 100);
                            function checkLoginForm(string)
                            {
                                var taikhoan = string.username.value;
                                var matkhau = string.password.value;
                                var filter = /^([a-zA-Z0-9_\.\-])+$/;
                                if ((taikhoan == "") || (taikhoan == null) || (taikhoan.length <= 3))
                                {
                                    alert("Mã số thẻ phải dài hơn 3 kí tự!");
                                    string.username.focus();
                                    return false;
                                }
                                if (filter.test(taikhoan)) {
                                    if ((matkhau == "") || (matkhau == null) || (matkhau.length <= 3))
                                    {
                                        alert("Độ dài mật khẩu phải dài hơn 3 kí tự!");
                                        string.password.focus();
                                        return false;
                                    }
                                }
                                else {
                                    alert('Vui lòng nhập chính xác mật khẩu và tài khoản của bạn!');
                                    string.username.focus();
                                    return false;
                                }
                                return true;
                            }
                        </script>
                    </body>
                    </html>

