@extends('layouts.default')
@section('content')
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
        <?php
        $is_not_null = false;
        foreach ($threads as $thread) {
            $is_not_null = true;
            $currenturl = URL . 'news/' . $thread->nhom_loai . "/" . $thread->alias . "/" . $thread->id;
            if (is_null($thread->thoi_gian_sua)) {
                $last_time = "Đăng vào: " . date("H:i:s d/m/Y", strtotime($thread->thoi_gian_dang));
            } else {
                $last_time = "Sửa vào: " . date("H:i:s d/m/Y", strtotime($thread->thoi_gian_sua));
            }
            ?>
            <div class="row-fluid">
                <div class="box-header">
                    <h2>
                        <i class="icon-edit"></i>
                        <?= html_entity_decode($thread->mo_ta_loai_bai_viet); ?>
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                        
                    </div> 
                </div>
                <div class="box-content">
                    <p>
                    <h2>
                        <a href="<?= $currenturl ?>">
                            <b><?= html_entity_decode($thread->tieu_de_bai_viet, ENT_QUOTES, "UTF-8"); ?></b>
                        </a>
                    </h2>
                    <br/>
                    <i class="icon-time"></i>&nbsp;<?= $last_time; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="icon-user"></i>&nbsp;<?= $thread->ho_ten ?>
                    <br/> 
                    <br/>
                    <b>
                        <?= html_entity_decode($thread->tom_tat_bai_viet, ENT_QUOTES, "UTF-8"); ?>
                    </b>
                    <br/>
                    <br/>
                    <input type="button" onclick="location.href = '<?= $currenturl ?>'"value="Xem thêm" class='btn btn-primary'/>
                    </p>
                </div>
                </br>
            </div>
            <!--/span-->
            <?php
        }
        if ($is_not_null) {
            echo $threads->links();
        } else {
            ?>
            <div class="row-fluid">
                <div class="box-header">
                    <h2>
                        <i class="icon-info-sign"></i>
                        Thông báo
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
                    </div> 
                </div>
                <div class="box-content">
                    <div>
                        <b>Không có bài viết nào.</b>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
@stop
