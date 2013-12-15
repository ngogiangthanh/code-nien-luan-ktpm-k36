<style>
    .badge{
        background-color: red;
    }
</style>
<div class="container">
    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>	
    <a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="<?php echo URL; ?>"><span>Thư Viện Khoa CNTT & TT</span></a>	
    <!-- start: Header Menu -->
    <div class="nav-no-collapse header-nav">
        <ul class="nav navbar-nav pull-right">
            <!-- start: User Dropdown -->
            <li class="dropdown">
                <a class="btn account dropdown-toggle" data-toggle="dropdown" href="" >
                    <div class="avatar">
                        <img src="<?php
                        if (!is_null(Auth::user()->link_avatar)) {
                            echo URL . Auth::user()->link_avatar;
                        } else {
                            echo URL . "public/images/profiles/no_avatar.gif";
                        }
                        ?>" alt="Avatar" title="Avatar"/>
                    </div>
                    <div class="user">
                        <span class="hello">Xin chào,</span>
                        <span class="name">
                            <?php echo Auth::user()->ho_ten; ?>
                        </span>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-title"></li>
                    <?php
                    if (Session::get('role') == 'nguoi_muon') {
                        if(Session::has('phieumuon.id_ds'))
                        {
                        $pm = count(Session::get('phieumuon.id_ds'));
                        }
                        else{
                            $pm = 0;
                        }
                        ?>
                        <li><a href='<?php echo URL . "phieumuon"; ?>'><span class="badge"><?=$pm?></span>&nbsp;Phiếu mượn của tôi</a></li>
                        <?php
                    }
                    ?>
                    <li><a href='<?php echo URL . "profile"; ?>'><i class="icon-info-sign"></i>&nbsp;Thông tin cá nhân</a></li>
<!--                    <li><a href='<?php// echo URL . "changepass"; ?>'><i class="icon-edit"></i>&nbsp;Đổi mật khẩu</a></li>-->
                    <li><a href='<?php echo URL . "logout"; ?>' onclick='return thoat()'><i class="icon-off"></i>&nbsp;Thoát</a></li>
                </ul>
            </li>
            <!-- end: User Dropdown -->
        </ul>
    </div>
    <!-- end: Header Menu -->
</div>
<!-- end: navbar -->
<script type='text/javascript'>
    function thoat() {
        if (confirm('Xác nhận muốn nếu bạn muốn thoát?')) {
            return true;
        }
        else
            return false;
    }
</script>
