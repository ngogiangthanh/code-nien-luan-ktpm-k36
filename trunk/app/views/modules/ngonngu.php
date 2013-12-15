<?php
$ngonngus = General::getNgonNgu();
?>
<div class="box-header">
    <h2>
        <i class="icon-hdd"></i>
        Ngôn Ngữ Sách
    </h2>
    <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <ul class="dashboard-list">
    <?php 
    foreach($ngonngus as $ngonngu)
    {
        ?>
        <li>
            <a href="#" class="list-group-item"><?php echo $ngonngu->ngon_ngu_sach."(".$ngonngu->tongsach.")"?></a>
        </li>
    <?php
    }
    ?>
    </ul>
</div>
