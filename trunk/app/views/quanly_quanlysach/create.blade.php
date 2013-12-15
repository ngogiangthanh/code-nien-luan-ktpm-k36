@extends('layouts.default')
@section('content')
<?php
$luachonnhap = 'tailieuthamkhao';
if (Input::has('txtluachon')) {
    $luachonnhap = Input::get('txtluachon');
}
?>
<div class="row-fluid">
    <div class="box span5">
            <div class="box">
                <div class="box-header">  <h2>
                        <i class="icon-book"></i>Khung Nhập Sách
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form method="post" name="frmCreateBooks" class="form-honrizontal" role="form" onsubmit="return checkcreatebooks(this)">
                        <div class="input-group">
                            <span class="input-group-addon">Loại Sách:</span>
                            <select class="form-control" name="loaiSach" id="loaiSachId" onchange="chuyenLuaChon(document.getElementById('loaiSachId').value)">
                                <option value="tailieuthamkhao" <?php if ($luachonnhap == 'tailieuthamkhao') echo "selected='selected'" ?>>Tài liệu tham khảo</option>
                                <option value="luanvantotnghiep" <?php if ($luachonnhap == 'luanvantotnghiep') echo "selected='selected'" ?>>Luận văn tốt nghiệp</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Tên đầu sách:</span>
                            <input type="text" name="tendausach" id="tendausachId" class="form-control" value="" placeholder="Nhập tên đầu sách"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Giới thiệu:</span>
                            <textarea name="gioithieu" id="gioithieuId" class="form-control" rows="7" cols="10"></textarea>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ngôn ngữ:</span>
                            <input type="text" name="ngongu" id="ngonguId" class="form-control" value="" placeholder="Ngôn ngữ"/>&nbsp;
                            <select name="" id="" class="form-control">
                                <option value="Lựa chọn">--Lựa chọn--</option>
                                <option value="Tiếng Việt">--Tiếng Việt--</option>
                                <option value="Tiếng Anh">--Tiếng Anh--</option>
                                <option value="Tiếng Pháp">--Tiếng Pháp--</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Hình ảnh:</span>
                            <input type="file" class="form-control" placeholder="Hình ảnh" name="hinhanh" id="hinhanhid">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ghi chú đầu sách:</span>
                            <textarea name="ghichu" id="ghichuId" class="form-control" rows="7" cols="10"></textarea>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Tags:</span>
                            <input type="text" class="form-control" placeholder="Nhập tags cho sách" name="tags" id="tagsId">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Trạng thái đầu sách:</span>
                            <select name="" id="" class="form-control">
                                <option value="Lựa chọn">--Lựa chọn--</option>
                                <option value="1">--Khả dụng--</option>
                                <option value="0">--Không khả dụng--</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Các tác giả:</span>
                            <input type="text" class="form-control" placeholder="Nhập các tác giả cho sách" name="tacgia" id="tacgiaId">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Nhà xuất bản:</span>
                            <select class="form-control">
                                <option>--Nhà xuất bản --</option>
                                <option>--Nhà xuất bản --</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Lần xuất bản:</span>
                            <select class="form-control">
                                <option>--Lần xuất bản--</option>
                                <option>--1st--</option>
                                <option>--2nd--</option>
                                <option>--3th--</option>
                            </select>
                        </div>                       
                        <div class="input-group">
                            <span class="input-group-addon">Năm xuất bản:</span>
                            <select class="form-control">
                                <option>--Năm xuất bản--</option>
                                <option>1900</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Thể loại:</span>
                            <select class="form-control">
                                <option>--Thể loại--</option>
                                <option>Lập trình</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Mã Số Quyển Sách:</span>
                            <input type="text" class="form-control" placeholder="Mã Số Quyển Sách" id="ma-so-sach">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Mã BarCode:</span>
                            <input type="text" class="form-control" placeholder="Mã BarCode" id="ma-barcode">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Mã DeWay:</span>
                            <input type="text" class="form-control" placeholder="Mã Dewey" id="ma-deway">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Mã Cutter:</span>
                            <input type="text" class="form-control" placeholder="Mã Cutter" id="ma-cutter">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Ghi chú quyển sách:</span>
                            <textarea name="ghichuqs" id="ghichuqsId" class="form-control" rows="7" cols="10"></textarea>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Trạng thái quyển sách:</span>
                            <select name="" id="" class="form-control">
                                <option value="Lựa chọn">--Lựa chọn--</option>
                                <option value="1">--Khả dụng--</option>
                                <option value="0">--Không khả dụng--</option>
                            </select>
                        </div>
                        <div class="btn-group">
                            <button type="submit" name="btnThem" class="btn btn-primary" value="Thêm">Thêm Sách</button>
                            <button type="reset" class="btn btn-default" name="bntXoa" value="Làm lại">Làm lại</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <div class="box span7">
        <div class="box">
            <div class="box-header">  <h2>
                    <i class="icon-book"></i>Bảng Thông Tin Sách Trong Phiếu
                </h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="input-group">
                    <span class="input-group-addon">Mã Phiếu Nhập:</span>
                    <input type="text" name="maphieunhap" id="maphieunhapid" class="form-control" disabled="true" placeholder="Mã phiếu hiện tại" value="<?php echo QuanLyQuanLySach::getMaxMaSoPhieu(); ?>"/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Ngày Nhập Sách:</span>
                    <input type="text" name="ngaynhap" id="ngaynhapid" class="form-control" disabled="true"  value="<?php echo date('H:i:s d/m/Y', time()); ?>"/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">ID Người Nhập:</span>
                    <input type="text" name="iduser" id="iduserid" class="form-control" disabled="true"  value="<?php echo Auth::user()->ma_so_the; ?>"/>
                </div>
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr>
                            <td width="5%">STT</td>
                            <td width="20%">Tên đầu sách</td>
                            <td width="20%">Giới thiệu</td>
                            <td width="10%">Ngôn ngữ</td>
                            <td width="10%">Hình ảnh</td>
                            <td width="10%">Ghi chú</td>
                            <td  width="15%">Tags</td>
                            <td width="8%">Trạng thái</td>
                            <td width="2%">Xem</td>
                        </tr>
                        <tr>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                            <td class="center "></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group">
                    <button type="submit" name="btnThem" class="btn btn-primary" value="Thêm">Lập phiếu nhập</button>
                </div>
            </div>
        </div>
    </div>
</div>
<form name="frmLuaChonThem" id="frmLuaChonThemId" method="get" action="">
    <input type="hidden" value="" name="txtluachon" id="txtluachonId">
</form>
<script type="text/javascript">
    function chuyenLuaChon(luachon)
    {
        document.frmLuaChonThem.txtluachon.value = luachon;
        document.frmLuaChonThem.submit();
    }
</script>
@stop