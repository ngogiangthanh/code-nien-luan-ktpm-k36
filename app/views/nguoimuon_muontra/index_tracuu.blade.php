@extends('layouts.default')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
    $(document).ready(function() {
        $("#show-search-ad").click(function() {
            $("#search-advand").removeClass("hide-search");
            $("#search").addClass("hide-search");
            $("#show-search-ad").addClass("hide-search");
        });
    });
    $(document).ready(function() {
        $("#show-search").click(function() {
            $("#search-advand").addClass("hide-search");
            $("#search").removeClass("hide-search");
            $("#show-search-ad").removeClass("hide-search");
        });
    });
</script>
<style type="text/css">
    .hide-search{
        display: none;
    }
</style>

<div class="box span12">
    <div class='box'>
        <div class="box-header">
            <h2>
                <i class="icon-book"></i>Tra cứu sách
            </h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            @include('nguoimuon_muontra.timkiem')
            <?php
            $i = 0;
            if (count($dstailieus) > 0) {
                foreach ($dstailieus as $tailieus) {
                    if ($i % SO_SACH_TREN_HANG_NGUOI_MUON == 0) {
                        echo "<table cellspacing='0' width='100%' cellpadding='0'><tr>";
                    }
                    ?>
                    <td width="<?php echo intval(100 / SO_SACH_TREN_HANG_NGUOI_MUON); ?>%" class="<?php
            if (($i + 1) % SO_SACH_TREN_HANG_NGUOI_MUON == 1) {
                echo 'show_b_a';
            } else {
                echo 'show_b_l';
            }
                    ?>" valign="top">
                        <table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
                            <tr align="center">
                                <td>
                                    <?php
                                    $hinh_anh = $tailieus->link_hinh_anh;
                                    $loai_sach = "";
                                    if (is_null($tailieus->lv_cao_hoc)) {
                                        $loai_sach = "sach_tk";
                                    } else {
                                        $loai_sach = "luan_van";
                                    }
                                    if (file_exists($hinh_anh)) {
                                        ?>  
                                        <a href="<?= URL ?>borrows/xemchitiet/<?= $loai_sach; ?>/<?= $tailieus->id ?>">
                                            <img src="<?= $hinh_anh ?>" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                                        </a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?= URL ?>borrows/xemchitiet/<?= $loai_sach; ?>/<?= $tailieus->id ?>">
                                            <img src="<?= URL ?>public/images/books/default.png" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <a href="<?= URL ?>borrows/xemchitiet/<?= $loai_sach; ?>/<?= $tailieus->id ?>">                                                        
                                        <?php
                                        if (is_null($tailieus->lv_cao_hoc)) {
                                            echo "<table class='table table-condensed'>";
                                            echo "<tr>";
                                            echo "<td style='width: 37%;'>";
                                            echo "Loại đầu sách:";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<b>Sách tham khảo</b>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo "<td style='width: 37%;'>";
                                            echo "Tên đầu sách:";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<b>" . $tailieus->ten_dau_sach . "</b>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "</table>";
                                        } else {
                                            echo "<table class='table table-condensed'>";
                                            echo "<tr>";
                                            echo "<td style='width: 37%;'>";
                                            echo "Loại đầu sách:";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<b>Luận văn</b>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo "<td style='width: 37%;'>";
                                            echo "Tên đề tài:";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<b>" . $tailieus->ten_dau_sach . "</b>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "</table>";
                                        }
                                        ?>
                                    </a>
                                </td>
                            </tr>
                            <tr align="center">
                                <td style="vertical-align: bottom">
                                    <?php
                                    if (DauSach::checkAvailable($tailieus->id)) {
                                        ?>
                                        <img src="<?= URL ?>public/images/icon/addphieu.png" title='Thêm vào phiếu mượn' alt='Thêm vào phiếu mượn' width="40px" onclick="addBook(<?= $tailieus->id ?>)"/>&nbsp;&nbsp;
                                        <?php
                                    } else {
                                        echo "<input class='btn btn-danger' value='Không Còn' readonly>";
                                    }
                                    ?>
                                    <img src="<?= URL ?>public/images/icon/view.png" title='Xem chi tiết' alt='Xem chi tiết' width="40px" onclick="location.href = '<?= URL ?>borrows/xemchitiet/<?= $loai_sach; ?>/<?= $tailieus->id ?>'"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <?php
                    if ($i % SO_SACH_TREN_HANG_NGUOI_MUON == SO_SACH_TREN_HANG_NGUOI_MUON - 1) {
                        echo "</tr></table>";
                    }
                    $i++;
                }//while
                if ($i % SO_SACH_TREN_HANG_NGUOI_MUON != 0) {
                    for ($j = ($i - 1) % SO_SACH_TREN_HANG_NGUOI_MUON; $j < SO_SACH_TREN_HANG_NGUOI_MUON - 1; $j++) {
                        echo "<td width='" . intval(100 / SO_SACH_TREN_HANG_NGUOI_MUON) . "%'>&nbsp;</td>";
                    }
                }
                echo "</tr></table>";
                ?>
                <div class="">
                    <?php
                    if(Input::has('loai'))
                    {
                        $loai = Input::get('loai');
                        if($loai == 'stk')
                        {
                             $tenSach = str_replace("  "," ",trim(Input::get('tenSach')));
                             $namxb = trim(Input::get('namxb'));
                             $nhaxb = trim(Input::get('nhaxb'));
                             $ngonngu = trim(Input::get('ngonngu'));
                             echo $dstailieus->appends(array('loai'=>$loai,'tenSach' => $tenSach,'namxb'=>$namxb,'nhaxb'=>$nhaxb,'ngonngu'=>$ngonngu))->links(); 
                        }
                        else if ($loai == 'lv'){
                            $tenSach = str_replace("  "," ",trim(Input::get('tenSach')));
                            $namth = trim(Input::get('namth'));
                            $lvcaohoc = trim(Input::get('loailv'));
                            $svth = trim(Input::get('svth'));
                            $gvhd = trim(Input::get('gvhd'));
                             echo $dstailieus->appends(array('loai'=>$loai,'tenSach' => $tenSach,'namth'=>$namth,'loailv'=>$lvcaohoc,'svth'=>$svth,'gvhd'=>$gvhd))->links(); 
                        }
                        else if($loai == 'tkcb'){
                                $tenSach= Input::get('tenSach');
                                echo $dstailieus->appends(array('tenSach' => $tenSach))->links();  
                        }
                        else{
                                echo $dstailieus->links();  
                        }
                    }
                    else{
                     echo $dstailieus->links();   
                    }
                    ?> 
                </div>
                <?php
            } else {
                echo "<div><h2>Không tìm thấy sách.&nbsp;"
                . "<a href='".URL."borrows/searches'><b>Quay lại</b></a></h1></div>";
            }
            ?>
        </div>
    </div>
</div>
</div>
<form name='frmthemsachmuon' method='post' action='<?= URL ?>borrows/addbook'>
    <?= Form::token(); ?>
    <input type='hidden' name='txtIdDauSach' id='txtIdDauSachId' value=''/>
</form>
<style type="text/css">
    .show_b_l
    {
        border-top: 1px dashed #cccccc;
        border-right: 1px dashed #cccccc; 
        border-bottom: 1px dashed #cccccc; 
    }
    .show_b_a
    {
        border: 1px dashed #cccccc;
    }
</style>
<script type='text/javascript'>
    function addBook(idbook)
    {
        document.frmthemsachmuon.txtIdDauSach.value = idbook;
        document.frmthemsachmuon.submit();
    }
</script>
<script src="<?php echo URL; ?>public/tooltip/script.js"></script>
@stop