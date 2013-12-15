<?php

class ThuThuThongKe extends BaseController {

    public function index() {
        return View::make('thuthu_thongke.index_report1')
                        ->with('title', 'Danh sách các sách trể hẹn');
        General::storeevents(THU_THU_THONG_KE_SACH_TRE_HEN);
    }

    public function getSachTreHen($NgonNgu = null) {
        $now = date('Y-m-d', time());
        $dsSachMuon = null;
        if ($NgonNgu == null || $NgonNgu == 'allNN') {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->where('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', '<', $now,'and')
                    ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon',1)                
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        } else {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->where('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', '<', $now, 'and')
                    ->where('dau_sach.ngon_ngu_sach', $NgonNgu,'and')
                    ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon',1)
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        }
        $dsSachMuon = $dsSachMuon->paginate(QUAN_LY_SACH_TRE_HEN_TREN_TRANG);
        return $dsSachMuon;
    }

    public function index1() {
        General::storeevents(THU_THU_THONG_KE_SACH_MUON_NHIEU);
        return View::make('thuthu_thongke.index_report2')->with('title', 'Thống kê sách mượn nhiều');
    }

    public function getSachMuonNhieu($NgonNgu = null) {
        $now = date('Y-m-d', time());
        $dsSachMuon = null;
        if ($NgonNgu == null || $NgonNgu == 'allNN') {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        } else {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->where('dau_sach.ngon_ngu_sach', $NgonNgu,'and')
                    ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon',1)
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        }
        $dsSachMuon = $dsSachMuon->paginate(QUAN_LY_SACH_TRE_HEN_TREN_TRANG);
        return $dsSachMuon;
    }

    public function printt1() {
        $NgonNgu = Input::get('txtNgonNgu');
        $now = date('Y-m-d', time());
        $dsSachMuon = null;
        if ($NgonNgu == null || $NgonNgu == 'allNN') {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->orderBy('dau_sach.ngon_ngu_sach', 'asc');
        } else {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->where('dau_sach.ngon_ngu_sach', $NgonNgu)
                    ->orderBy('dau_sach.ngon_ngu_sach', 'asc');
        }
        $dsSachMuon = $dsSachMuon->get();
        return View::make('thuthu_thongke.print1')
                        ->with('title', 'In danh sách các sách trể hẹn')
                        ->with('dsSachMuon', $dsSachMuon);
    }

    public function printt2() {
        $now = date('Y-m-d', time());
        $NgonNgu = Input::get('txtNgonNgu');
        $dsSachMuon = null;
        if ($NgonNgu == null || $NgonNgu == 'allNN') {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        } else {
            $dsSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                            })
                    ->join('phieu_muon_sach', function($join) {
                                $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                            })
                    ->join('dau_sach', function($join) {
                                $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                            })
                    ->join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'phieu_muon_sach.id_nguoi_muon');
                            })
                    ->select('quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'quyen_sach.ma_bar_code')
                    ->where('dau_sach.ngon_ngu_sach', $NgonNgu)
                    ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        }
        $dsSachMuon = $dsSachMuon->get();
        return View::make('thuthu_thongke.print2')
                        ->with('title', 'In danh sách các sách mượn nhiều')
                        ->with('dsSachMuon', $dsSachMuon);
    }

}
