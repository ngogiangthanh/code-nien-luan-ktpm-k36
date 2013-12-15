<style>
    .p-search{
        margin: 10px 22px 0px 0px !important;
    }
    .p-search-ad{
        position: absolute;
        margin: -29px 0px 0px 30px !important;
    }
    .option-search{
        width: 250px;
    }
    .input-search{
        
    }
    .btn-search{

    
    }
    .btn-search-ad{
        margin: 10px auto auto 27%;
        position: absolute;
    }
    .btn-search-sub{
        margin: 10px auto auto 38%;
    }
</style>
<div class="box">
    <div class="box-content">
        <?php
        $tenSach = "";
        $namxb = 0;
        $nhaxb = 0;
        $namth = 0;
        $lvcaohoc = 0;
        $svth = 0;
        $gv_hd = 0;
        $ngonngu = "";
        if (Input::has('loai')) {
            $loai = Input::get('loai');
            if ($loai == 'stk') {
                $tenSach = str_replace("  ", " ", trim(Input::get('tenSach')));
                $namxb = trim(Input::get('namxb'));
                $nhaxb = trim(Input::get('nhaxb'));
                $ngonngu = trim(Input::get('ngonngu'));
            } else if ($loai == 'lv') {
                $tenSach = str_replace("  ", " ", trim(Input::get('tenSach')));
                $namth = trim(Input::get('namth'));
                $lvcaohoc = trim(Input::get('loailv'));
                $svth = trim(Input::get('svth'));
                $gv_hd = trim(Input::get('gvhd'));
            } else if ($loai == 'tkcb') {
                $tenSach = Input::get('tenSach');
            }
        }
        ?>
        <form medthod="get" action="" name="" onsubmit="" id="search">
            <input class="form-control input-search"  type="text" name="tenSach" id="" value="<?=$tenSach?>" placeholder="Nhập tên sách tìm kiếm" required/>
            <input type="hidden" name="loai" id="" value="tkcb"/>
            <button class="btn btn-primary btn-search-ad" id="search">Tìm Kiếm</button>
        </form>
        <button class="btn btn-pre btn-search-sub" id="show-search-ad">Tìm Kiếm Nâng Cao</button>
        <div id="search-advand" class="hide-search">
            <div style="display: -webkit-inline-box">
                <input type="radio" name="loaisach" value="stk" checked  onchange="document.getElementById('frmtkllv').style.display = 'none';
                        document.getElementById('frmstk').style.display = 'block';"><p class="p-search">Sách Tham Khảo<br></p>
                <input type="radio" name="loaisach" value="lv"  onchange="document.getElementById('frmtkllv').style.display = 'block';
                        document.getElementById('frmstk').style.display = 'none';"><p class="p-search">Luận Văn<br></p>
            </div>
            <div class="row-fluid">
                <form id='frmstk' style='display: block'>
                    <input class="form-control input-search"  type="text" name="tenSach" id="" value="<?=$tenSach?>" placeholder="Nhập tên sách tìm kiếm"/>
                    <input type="hidden" name="loai" id="" value="stk"/>
                    <div class="box span12">
                        <div class="box-content">
                            <fieldset>
                                <legend>Thông Tin Sách Tham Khảo:</legend>
                                <select name="namxb" class="form-control option-search">
                                    <option value="">--Năm xuất bản--</option>
                                <?php
                                $nam_xb = NguoiMuonTraCuuSach::getNamXB();
                                foreach ($nam_xb as $key) {
                                    ?>
                                        <option value="<?= $key->nam_xuat_ban ?>" <?php if($namxb == $key->nam_xuat_ban) echo "selected='selected'"?>><?= $key->nam_xuat_ban ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br/>
                                <select name="nhaxb" class="form-control option-search">
                                    <option value="">--Chọn nhà xuất bản --</option>
                                    <?php
                                    $nxb = NguoiMuonTraCuuSach::getNXB();
                                    foreach ($nxb as $key) {
                                        ?>
                                        <option value="<?= $key->id ?>" <?php if($nhaxb == $key->id) echo "selected='selected'"?>><?= $key->ten_nxb ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br/>
                                <select name="ngonngu" class="form-control option-search">
                                    <option value="">--Ngôn Ngữ--</option>
                                <?php
                                $ngon_ngu = NguoiMuonTraCuuSach::getNgonNgu();
                                foreach ($ngon_ngu as $key) {
                                    ?>
                                        <option value="<?= $key->ngon_ngu_sach ?>" <?php if($ngonngu == $key->ngon_ngu_sach) echo "selected='selected'"?>><?= $key->ngon_ngu_sach ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br/>
                            </fieldset>
                        <button class="btn btn-primary btn-search" id="">Tìm Kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            
                <form medthod="get" action="" name="" onsubmit="" id='frmtkllv' style='display: none'>
                    <div class="row-fluid">
                    <input class="form-control input-search"  type="text" name="tenSach" id="" value="<?=$tenSach?>" placeholder="Nhập tên sách tìm kiếm">
                    <div class="box span5">
                        <div class="box-content">
                            <fieldset>
                                <legend>Luận Văn: </legend>
                                <input type="hidden" name="loai" id="" value="lv">
                                <input type="radio" name="loailv" value="" checked><p class="p-search-ad">Cả hai</p>
                                <input type="radio" name="loailv" value="tn"  <?php if($lvcaohoc == 'tn') echo "checked"?>><p class="p-search-ad">Tốt nghiệp</p>
                                <input type="radio" name="loailv" value="caohoc" <?php if($lvcaohoc == 'caohoc') echo "checked"?>><p class="p-search-ad">Cao học</p>
                            </fieldset>
                        </div> </div>
                    <div class="box span5">
                        <div class="box-content">
                            <fieldset>
                                <legend>Thông Tin Luận Văn:</legend>
                                <select name="" class="form-control option-search">
                                    <option value="namth">--Chọn năm thực hiện--</option>
                                    <?php
                                    $nam_th = NguoiMuonTraCuuSach::getNamTHLV();
                                    foreach ($nam_th as $key) {
                                        ?>
                                        <option value="<?= $key->nam_thuc_hien ?>" <?php if($namth == $key->nam_thuc_hien) echo "selected='selected'"?>><?= $key->nam_thuc_hien ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br/>
                                <select name="svth" class="form-control option-search">
                                    <option value="">--Chọn người thực hiện--</option>
                                    <?php
                                    $sv_th = NguoiMuonTraCuuSach::getSVTH();
                                    foreach ($sv_th as $key) {
                                        ?>
                                        <option value="<?= $key->id ?>" <?php if($svth == $key->id) echo "selected='selected'"?>><?= $key->mssv . "-" . $key->ho_ten_sv ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                                <br/>
                                <select name="gvhd" class="form-control option-search">
                                    <option value="">--Chọn người hướng dẫn--</option>
                                        <?php
                                        $gvhd = NguoiMuonTraCuuSach::getGVHD();
                                        foreach ($gvhd as $key) {
                                            ?>
                                        <option value="<?= $key->id ?>" <?php if($gv_hd == $key->id) echo "selected='selected'"?>><?= $key->ten_gvhd ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br/>
                            </fieldset>
                        </div>
                         </div> 
                    </div>
                 <button class="btn btn-primary btn-search" id="">Tìm Kiếm</button>
                </form>
          
            <button class="btn btn-pre btn-search-sub" id="show-search">Quay Lại Tìm Kiếm Cơ Bản</button>
        </div>
    </div>
</div>