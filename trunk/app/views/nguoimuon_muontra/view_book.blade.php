@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span8">
        <div class="box-header">
            <h2>
                <i class="icon-book"></i>Thông Tin Sách
            </h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
             <?php if (Session::has('message')) {
                ?>
                <p style="color: green">
                    <?= Session::get('message') ?>
                </p>
                <?php
            }
            ?>
            <table class="table table-striped table-bordered" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
                <?php
                if ($loai_sach == "sach_tk") {
                    if (file_exists($chi_tiet_dau_sach[0]->link_hinh_anh)) {
                        ?>  
                        <tr align="center">
                            <td colspan="2">
                                <img src="<?= $chi_tiet_dau_sach[0]->link_hinh_anh ?>" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                            </td>
                        </tr>
                        <?php
                    } else {
                        ?>
                        <tr align="center">
                            <td colspan="2">
                                <img src="<?= URL ?>public/images/books/default.png" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td>Tên đầu sách: </td>
                        <td><?= $chi_tiet_dau_sach[0]->ten_dau_sach ?></td>
                    </tr>
                    <tr>
                        <td>Giới thiệu đề tài: </td>
                        <td><?php
                            if ($chi_tiet_dau_sach[0]->gioi_thieu_sach == "" || is_null($chi_tiet_dau_sach[0]->gioi_thieu_sach)) {
                                echo "Không có mô tả nào";
                            } else {
                                echo $chi_tiet_dau_sach;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Ngôn ngữ sách: </td>
                        <td><?= $chi_tiet_dau_sach[0]->ngon_ngu_sach ?></td>
                    </tr>
                    <tr>
                        <td>Thông tin khác:</td>
                        <td><?php
                            if ($chi_tiet_dau_sach[0]->trang_thai_dau_sach == 2) {
                                echo "Sách quý";
                            } else {
                                echo "Không có";
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Tên các tác giả:</td>
                        <td><?= $chi_tiet_dau_sach[0]->ten_cac_tac_gia ?></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản:</td>
                        <td><?= $chi_tiet_dau_sach[0]->nam_xuat_ban ?></td>
                    </tr>
                    <tr>
                        <td>Mô tả thể loại:</td>
                        <td><?= $chi_tiet_dau_sach[0]->mo_ta_the_loai ?></td>
                    </tr>
                    <tr>
                        <td>Nhà xuất bản:</td>
                        <td><?= $chi_tiet_dau_sach[0]->ten_nxb ?></td>
                    </tr>
                    <tr>
                        <td>Lần xuất bản:</td>
                        <td><?= $chi_tiet_dau_sach[0]->lan_xuat_ban ?></td>
                    </tr>

                    <?php
                } else {
                    if (file_exists($chi_tiet_dau_sach[0]->link_hinh_anh)) {
                        ?>  
                        <tr>
                            <td>                        
                                <img src="<?= $chi_tiet_dau_sach[0]->link_hinh_anh ?>" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                            </td>
                        </tr>
                        <?php
                    } else {
                        ?>
                        <tr align="center">
                            <td colspan="2">
                                <img src="<?= URL ?>public/images/books/default.png" title='Hình ảnh' alt='hình ảnh' width="100px"/>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td>Tên đề tài:</td>
                        <td><?= $chi_tiet_dau_sach[0]->ten_dau_sach ?></td>
                    </tr>
                    <tr>
                        <td>Giới thiệu đề tài:</td>
                        <td><?php
                            if ($chi_tiet_dau_sach[0]->gioi_thieu_sach == "" || is_null($chi_tiet_dau_sach[0]->gioi_thieu_sach)) {
                                echo "Không có mô tả nào";
                            } else {
                                echo $chi_tiet_dau_sach;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Ngôn ngữ sách:</td>
                        <td><?= $chi_tiet_dau_sach[0]->ngon_ngu_sach ?></td>
                    </tr>
                    <tr>
                        <td>Thông tin khác:</td>
                        <td>
                            <?php
                            if ($chi_tiet_dau_sach[0]->trang_thai_dau_sach == 2) {
                                echo "Sách quý";
                            } else {
                                echo "Không có";
                            }
                            ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Thông tin GVHD: </td>
                        <td><?php
                            $gvhd = LuanVan::getGVHD($chi_tiet_dau_sach[0]->id_luan_van);
                            foreach ($gvhd as $gv) {
                                echo $gv->ten_gvhd . "<br/>";
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Thông tin SVTH: </td>
                        <td><?php
                            $svth = LuanVan::getSVTH($chi_tiet_dau_sach[0]->id_luan_van);
                            foreach ($svth as $sv) {
                                echo $sv->mssv . " - " . $sv->ho_ten_sv . "<br/>";
                            }
                            ?> </td>
                    </tr>
                    <tr>
                        <td>Năm thực hiện:</td>
                        <td><?= $chi_tiet_dau_sach[0]->nam_thuc_hien ?><br/>
                            <?php
                        }
                        ?>
                    </td>
                </tr>

                <tr align="center">
                    <td colspan="2">                        
                        <?php
                        if (DauSach::checkAvailable($chi_tiet_dau_sach[0]->id)) {
                            ?>
                            <img src="<?= URL ?>public/images/icon/addphieu.png" title='Thêm vào phiếu mượn' alt='Thêm vào phiếu mượn' width="40px" onclick="addBook(<?= $chi_tiet_dau_sach[0]->id ?>)"/>&nbsp;&nbsp;
                            <?php
                        } else {?>
                            <input class='btn btn-danger' value='Không Còn' readonly>&nbsp
                            <input type='button' class='btn btn-primary' value='Gửi Yêu Cầu' onclick="if(confirm('Xác nhận gửi yêu cầu sách?')){location.href='<?=URL;?>yeucau/<?=$chi_tiet_dau_sach[0]->id?>';}"/>
                     <?php   }
                        ?>
                            &nbsp;<input class="btn btn-pre" type="button" value='Quay Lại Tra Cứu' onclick="location.href = '<?= URL ?>borrows'"/>
                    </td>

                </tr>
            </table>
        </div>
    </div>
</div>
<form name='frmthemsachmuon' method='post' action='<?= URL ?>borrows/addbook'>
    <?= Form::token(); ?>
    <input type='hidden' name='txtIdDauSach' id='txtIdDauSachId' value=''/>
</form>
<script type='text/javascript'>
    function addBook(idbook)
    {
        document.frmthemsachmuon.txtIdDauSach.value = idbook;
        document.frmthemsachmuon.submit();
    }
</script>
@stop