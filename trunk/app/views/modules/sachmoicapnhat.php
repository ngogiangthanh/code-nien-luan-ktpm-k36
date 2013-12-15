<?php
$sachmois = General::getSachMoiCapNhat();
?>
<div class="box-header">
    <h2>
        <i class="icon-book"></i>
        Sách Mới Nhập
    </h2>
    <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <ul class="dashboard-list">
    <?php 
    $count = 0;
    foreach($sachmois as $sachmoi)
    {
        $count++;
        ?>
        <li>
        <a href="#" class="list-group-item"><?php echo $sachmoi->ten_dau_sach?></a>
        </li>
    <?php
    }
    if ($count == 0) {
    echo
    'Chưa có cập nhật mới.';
}
    ?>
    </ul>
</div>