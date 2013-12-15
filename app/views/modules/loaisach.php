<?php
$luanvans = General::getLuanVan();
$tailieus = General::getTaiLieu();
?>
<div class="box-header">
    <h2>
        <i class="icon-tags"></i>Các Loại Sách
    </h2>
    <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <ul class="dashboard-list">
        <?php
        foreach ($luanvans as $luanvan) {
            ?>
            <li>
                <a href="#" class="list-group-item">&nbsp;&nbsp;+
                    <?php
                    if ($luanvan->lv_cao_hoc == false) {
                        ?>
                        LVTN<?php echo "(" . $luanvan->tongloai . ")" ?>
                        <?php
                    } else {
                        ?>
                        LV Cao học<?php echo "(" . $luanvan->tongloai . ")" ?>
                        <?php
                    }
                    ?>
                </a>
            </li>
            <?php
        }
        ?>
        <a href="#" class="list-group-item">Tài liệu:</a>
        <?php
        foreach ($tailieus as $tailieu) {
            ?>
            <li>
                <a href="#" class="list-group-item">&nbsp;&nbsp;+
                    <?php echo $tailieu->mo_ta_the_loai . "(" . $tailieu->tongloai . ")" ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>