<?php

class NguoiMuonTraCuuSach extends BaseController {

    public function index() {
        if (Input::has('loai')) {
            $flag = Input::get('loai');
            if ($flag == 'stk') {
                $tensach = str_replace("  "," ",trim(Input::get('tenSach')));
                $namxb = trim(Input::get('namxb'));
                $nhaxb = trim(Input::get('nhaxb'));
                $ngonngu = trim(Input::get('ngonngu'));
                if ($tensach == "") {
                    $tensach = "null";
                }
                if ($namxb == "") {
                    $namxb = 0;
                }
                if ($nhaxb == "") {
                    $nhaxb = 0;
                }
                $id_dau_sach = DB::select(DB::raw("CALL tim_tai_lieu_tham_khao('" . $tensach . "'," . $namxb . "," . $nhaxb . ",'".$ngonngu."');"));
                $array = array();
                foreach ($id_dau_sach as $key) {
                    array_push($array, $key->id);
                }
                $dstailieus = $this->getDauSachNguoiMuon($array);
            } else if ($flag == 'lv') {
                $tensach = str_replace("  "," ",trim(Input::get('tenSach')));
                $namth = trim(Input::get('namth'));
                $lvcaohoc = trim(Input::get('loailv'));
                $svth = trim(Input::get('svth'));
                $gvhd = trim(Input::get('gvhd'));

                if ($lvcaohoc == "tn") {
                    $lvcaohoc = 0;
                } else if ($lvcaohoc == "caohoc") {
                    $lvcaohoc = 1;
                } else {
                    $lvcaohoc = 2;
                }
                if ($tensach == "") {
                    $tensach = "null";
                }
                if ($namth == "") {
                    $namth = 0;
                }
                if ($svth == "") {
                    $svth = 0;
                }
                if ($gvhd == "") {
                    $gvhd = 0;
                }
                $id_dau_sach = DB::select(DB::raw("CALL tim_kiem_luan_van('" . $tensach . "'," . $lvcaohoc . "," . $namth . "," . $svth . "," . $gvhd . ");"));
                $array = array();
                foreach ($id_dau_sach as $key) {
                    array_push($array, $key->id);
                }
                $dstailieus = $this->getDauSachNguoiMuon($array);
            } else {
                $tenSach= trim(Input::get('tenSach'));
                $dstailieus = $this->getAllDauSach($tenSach);
            }
        } else {
            $tenSach= trim(Input::get('tenSach'));
            $dstailieus = $this->getAllDauSach($tenSach);
        }
        General::storeevents(NGUOI_MUON_TRA_CUU_SACH);
        return View::make('nguoimuon_muontra.index_tracuu')
                        ->with('title', 'Tra cứu sách trong thư viện')
                        ->with('dstailieus', $dstailieus);
    }

    public function getAllDauSach($tenSach) {
        if($tenSach != null || $tenSach != ""){
        $dstailieus = DB::table('dau_sach')
                ->leftJoin('luan_van', function($join) {
                            $join->on('luan_van.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->leftJoin('tai_lieu', function($join) {
                            $join->on('tai_lieu.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->select('dau_sach.id', 'dau_sach.ten_dau_sach', 'dau_sach.gioi_thieu_sach', 'dau_sach.ngon_ngu_sach', 'dau_sach.link_hinh_anh', 'dau_sach.trang_thai_dau_sach', 'tai_lieu.ten_cac_tac_gia', 'tai_lieu.nam_xuat_ban', 'tai_lieu.lan_xuat_ban', 'luan_van.ma_luan_van', 'luan_van.nam_thuc_hien', 'luan_van.lv_cao_hoc')
                ->where('dau_sach.ten_dau_sach','like','%'.$tenSach.'%')
                ->orderBy('dau_sach.id')
                ->paginate(SO_SACH_TREN_TRANG_NGUOI_MUON);
        }else{
              $dstailieus = DB::table('dau_sach')
                ->leftJoin('luan_van', function($join) {
                            $join->on('luan_van.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->leftJoin('tai_lieu', function($join) {
                            $join->on('tai_lieu.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->select('dau_sach.id', 'dau_sach.ten_dau_sach', 'dau_sach.gioi_thieu_sach', 'dau_sach.ngon_ngu_sach', 'dau_sach.link_hinh_anh', 'dau_sach.trang_thai_dau_sach', 'tai_lieu.ten_cac_tac_gia', 'tai_lieu.nam_xuat_ban', 'tai_lieu.lan_xuat_ban', 'luan_van.ma_luan_van', 'luan_van.nam_thuc_hien', 'luan_van.lv_cao_hoc')
                ->orderBy('dau_sach.id')
                ->paginate(SO_SACH_TREN_TRANG_NGUOI_MUON);
        }
        return $dstailieus;
    }

    public function getDauSachNguoiMuon($id_dau_sach) {
        if (count($id_dau_sach) == 0) {
            $dstailieus = DB::table('dau_sach')
                    ->leftJoin('luan_van', function($join) {
                                $join->on('luan_van.id_dau_sach', '=', 'dau_sach.id');
                            })
                    ->leftJoin('tai_lieu', function($join) {
                                $join->on('tai_lieu.id_dau_sach', '=', 'dau_sach.id');
                            })
                    ->select('dau_sach.id', 'dau_sach.ten_dau_sach', 'dau_sach.gioi_thieu_sach', 'dau_sach.ngon_ngu_sach', 'dau_sach.link_hinh_anh', 'dau_sach.trang_thai_dau_sach', 'tai_lieu.ten_cac_tac_gia', 'tai_lieu.nam_xuat_ban', 'tai_lieu.lan_xuat_ban', 'luan_van.ma_luan_van', 'luan_van.nam_thuc_hien', 'luan_van.lv_cao_hoc')
                    ->whereIn('dau_sach.id', array(0))
                    ->orderBy('dau_sach.id')
                    ->paginate(SO_SACH_TREN_TRANG_NGUOI_MUON);
        } else {
            $dstailieus = DB::table('dau_sach')
                    ->leftJoin('luan_van', function($join) {
                                $join->on('luan_van.id_dau_sach', '=', 'dau_sach.id');
                            })
                    ->leftJoin('tai_lieu', function($join) {
                                $join->on('tai_lieu.id_dau_sach', '=', 'dau_sach.id');
                            })
                    ->select('dau_sach.id', 'dau_sach.ten_dau_sach', 'dau_sach.gioi_thieu_sach', 'dau_sach.ngon_ngu_sach', 'dau_sach.link_hinh_anh', 'dau_sach.trang_thai_dau_sach', 'tai_lieu.ten_cac_tac_gia', 'tai_lieu.nam_xuat_ban', 'tai_lieu.lan_xuat_ban', 'luan_van.ma_luan_van', 'luan_van.nam_thuc_hien', 'luan_van.lv_cao_hoc')
                    ->whereIn('dau_sach.id', $id_dau_sach)
                    ->orderBy('dau_sach.id')
                    ->paginate(SO_SACH_TREN_TRANG_NGUOI_MUON);
        }
        return $dstailieus;
    }

    public function create() {
        $idds = Input::get('txtIdDauSach');
        $array_ct_phieu_muon = Session::get('phieumuon.id_ds');
        $count = count($array_ct_phieu_muon);
        $count_da_muon = PhieuMuonSach::countSachDaMuon(Auth::user()->id);
        
        $nhom_nguoi_dung = Auth::user()->id_nhom_quyen_han;
        if ($nhom_nguoi_dung == 3) {
            $so_luong_quy_dinh = SO_SACH_MUON_CB;
        } else {
            $so_luong_quy_dinh = SO_SACH_MUON_SV;
        }
        if ($count + $count_da_muon < $so_luong_quy_dinh) {
            if (!General::recursive_array_search($idds, $array_ct_phieu_muon)) {
                $dstailieus = DB::select(DB::raw("CALL get_quyen_sach_muon(" . $idds . ");"));
                if (count($dstailieus) != 0) {
                    Session::push('phieumuon.id_qs', $dstailieus[0]->id_quyen_sach);
                    Session::push('phieumuon.id_ds', $dstailieus[0]->id_dau_sach);
                    Session::push('phieumuon.bar_code', $dstailieus[0]->ma_bar_code);
                    Session::push('phieumuon.ten_sach', $dstailieus[0]->ten_dau_sach);
                    Session::push('phieumuon.gioi_thieu', $dstailieus[0]->gioi_thieu_sach);
                    Session::push('phieumuon.link_ha', $dstailieus[0]->link_hinh_anh);
                    Session::push('phieumuon.ngon_ngu', $dstailieus[0]->ngon_ngu_sach);
                }
            }
            return Redirect::to('/phieumuon');
        } else {
            return Redirect::to('/phieumuon')->with('error_message', 'Bạn đã mượn quá số sách cho phép!');
        }
    }

    public function store() {
        $ngaylap = date("Y-m-d", strtotime(Input::get('txtthoigian')));
        $msphieu = PhieuMuonSach::max('ma_so_phieu');
        $msphieu = ++$msphieu;
        $id_qs = Session::get('phieumuon.id_qs');
        $nhom_nguoi_dung = Auth::user()->id_nhom_quyen_han;
        if ($nhom_nguoi_dung == 3) {
            $so_ngay = SO_NGAY_MUON_SV;
        } else {
            $so_ngay = SO_NGAY_MUON_SV;
        }
        $ngaytra = date("Y-m-d", strtotime(Input::get('txtthoigian')) + 86400 * $so_ngay);
        $id_nm = Auth::user()->id;
        $count = count($id_qs);
        $maxid = PhieuMuonSach::max('id');
        DB::statement(DB::raw("CALL insert_phieu_muon(" . ++$maxid . ",'" . $msphieu . "'," . $id_nm . ");"));
        for ($i = 0; $i < $count; $i++) {
            $id = ChiTietPhieuMuonSach::max('id');
            DB::statement(DB::raw("CALL insert_chi_tiet_phieu_muon(" . ++$id . "," . $maxid . "," . $id_qs[$i] . ",'" . $ngaylap . "','" . $ngaytra . "');"));
        }

        Session::forget('phieumuon.id_ds');
        Session::forget('phieumuon.id_qs');
        Session::forget('phieumuon.bar_code');
        Session::forget('phieumuon.ten_sach');
        Session::forget('phieumuon.gioi_thieu');
        Session::forget('phieumuon.link_ha');
        Session::forget('phieumuon.ngon_ngu');
        return Redirect::back()->with('success_message', 'Cảm ơn bạn đã đặt sách trực tuyến, xin hãy liên hệ xác nhận với thủ thư trong thời gian 2 NGÀY kể từ lúc đặt!');
        ;
    }

    public function show($loai, $id) {

        $chi_tiet_dau_sach = DB::select(DB::raw("CALL get_dau_sach_nm(" . $id . ",'" . $loai . "');"));
        return View::make('nguoimuon_muontra.view_book')
                        ->with('title', 'Xem thông tin chi tiết sách')
                        ->with('chi_tiet_dau_sach', $chi_tiet_dau_sach)
                        ->with('loai_sach', $loai);
    }

    public function viewPhieuMuon() {
        return View::make('nguoimuon_muontra.view_phieumuon')
                        ->with('title', 'Phiếu mượn của tôi');
    }

    public function destroy($stt) {
        $id_ds = Session::get('phieumuon.id_ds');
        $id_qs = Session::get('phieumuon.id_qs');
        $bar_code = Session::get('phieumuon.bar_code');
        $ten_sach = Session::get('phieumuon.ten_sach');
        $gioi_thieu = Session::get('phieumuon.gioi_thieu');
        $link_hinh_anh = Session::get('phieumuon.link_ha');
        $ngon_ngu = Session::get('phieumuon.ngon_ngu');

        $count = count($ngon_ngu);
        Session::forget('phieumuon.id_ds');
        Session::forget('phieumuon.id_qs');
        Session::forget('phieumuon.bar_code');
        Session::forget('phieumuon.ten_sach');
        Session::forget('phieumuon.gioi_thieu');
        Session::forget('phieumuon.link_ha');
        Session::forget('phieumuon.ngon_ngu');

        for ($j = 0; $j < $count; $j++) {
            if ($j == $stt) {
                continue;
            }
            Session::push('phieumuon.id_ds', $id_ds[$j]);
            Session::push('phieumuon.id_qs', $id_qs[$j]);
            Session::push('phieumuon.bar_code', $bar_code[$j]);
            Session::push('phieumuon.ten_sach', $ten_sach[$j]);
            Session::push('phieumuon.gioi_thieu', $gioi_thieu[$j]);
            Session::push('phieumuon.link_ha', $link_hinh_anh[$j]);
            Session::push('phieumuon.ngon_ngu', $ngon_ngu[$j]);
        }
        return Redirect::back()->with('success_message', 'Xóa quyển sách thành công!');
    }

    public function guiYeuCau($idqs){
        $msyc = PhieuYeuCauSach::max('ma_so_phieu');
        $id = PhieuYeuCauSach::max('id');
        $msyc = ++$msyc;
        $id = ++$id;
        $idnm = Auth::user()->id;
        $idds = DB::select(DB::raw("CALL get_id_ds(" . $idqs . ");"));
        DB::statement(DB::raw("CALL insert_yc(" . $idds[0]->id . ",'".$msyc."',".$id.",".$idnm.");"));
        return Redirect::back()->with("message","Yêu cầu của bạn đã được gửi,Quản lý sẽ xem xét và giải quyết yêu cầu của bạn");
        
    }
    public static function getNamTHLV() {
        return LuanVan::select('nam_thuc_hien')->distinct()->orderBy('nam_thuc_hien')->get();
    }

    public static function getSVTH() {
        return Svth::select('id', 'mssv', 'ho_ten_sv')->distinct()->orderBy('ho_ten_sv')->get();
    }

    public static function getGVHD() {
        return Gvhd::select('id', 'ten_gvhd')->distinct()->orderBy('ten_gvhd')->get();
    }

    public static function getNamXB() {
        return TaiLieu::select('nam_xuat_ban')->distinct()->orderBy('nam_xuat_ban')->get();
    }

    public static function getNXB() {
        return NhaXuatBan::select('id', 'ten_nxb')->distinct()->orderBy('ten_nxb')->get();
    }
    
    public static function getNgonNgu(){
         return DauSach::select('ngon_ngu_sach')->distinct()->orderBy('ngon_ngu_sach')->get();  
    }
}
