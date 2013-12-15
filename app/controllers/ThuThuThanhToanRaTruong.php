<?php

class ThuThuThanhToanRaTruong extends BaseController {

    public function index() {
        $dsSachMuonChuaTra = null;
        $dsSachMuonChuaTra = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
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
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 1, 'or')
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 2, 'or')
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 3)
                ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        $dsSachMuonChuaTra = $dsSachMuonChuaTra->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        General::storeevents(QUAN_LY_THANH_TOAN_SV_RA_TRUONG);
        return View::make('thuthu_thanhtoanratruong.index_ratruong')
                        ->with('title', 'Thanh toán sinh viên ra trường')
                        ->with('dsSachMuonChuaTra', $dsSachMuonChuaTra);
    }

    public function index1() {
        $dsSachMuonChuaTra = null;
        $dsSachMuonChuaTra = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
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
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 1, 'or')
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 2, 'or')
                ->where('chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 3)
                ->orderBy('chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'desc');
        $dsSachMuonChuaTra = $dsSachMuonChuaTra->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        General::storeevents(QUAN_LY_THANH_TOAN_SV_NGHI_HOC);
        return View::make('thuthu_thanhtoanratruong.index_nghihoc')
                        ->with('title', 'Thanh toán sinh viên nghỉ học')
                        ->with('dsSachMuonChuaTra', $dsSachMuonChuaTra);
    }

    public function create() {
        //
    }

    public function uploadexcel() {
            $file = Input::file('txtexcel');
            $destinationPath = 'public/excel/';
            $filename = $file->getClientOriginalName();
            $uploadSuccess = Input::file('txtexcel')->move($destinationPath, $filename);
            return Redirect::back();
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update($id) {
        //
    }

    public function destroy($id) {
        //
    }

}
