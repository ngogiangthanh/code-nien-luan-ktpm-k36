<?php
$loaibaiviets = General::getLoaiBaiViet();
?>
<div class="box-header">
    <h2>
        <i class="icon-bookmark"></i>Chủ Đề Bài Viết
    </h2>
    <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
    </div>
</div>
<div class="box-content">
    <ul class="dashboard-list">
        <?php
        foreach ($loaibaiviets as $loaibaiviet) {
            ?>
            <li>
                <a href="<?php echo URL . "news/" . $loaibaiviet->nhom_loai . "/" . $loaibaiviet->alias; ?>" class="list-group-item">
                    <?php
                    $string = $loaibaiviet->mo_ta_loai_bai_viet;
                    if ($loaibaiviet->tong == 1)
                        echo $string;
                    else
                        echo $string . "&nbsp;(" . $loaibaiviet->tong . ")";
                    ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
