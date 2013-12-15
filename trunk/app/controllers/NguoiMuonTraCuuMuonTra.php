<?php

class NguoiMuonTraCuuMuonTra extends BaseController {

    public function index() {
        $tinhtrang = 6;
        $idnm = Auth::user()->id;
        if (Input::has('tinhtrang')) {
            $tinhtrang = trim(Input::get('tinhtrang'));
            if ($tinhtrang != 0 && $tinhtrang != 1 && $tinhtrang != 2 && $tinhtrang != 3 && $tinhtrang != 4 && $tinhtrang != 5) {
                $tinhtrang = 6;
            }
        }
        $quyensachs = DB::select(DB::raw("CALL tra_cuu_muon_tra(" . $tinhtrang . "," . $idnm . ");"));

        General::storeevents(NGUOI_MUON_TRA_CUU_MUON_TRA);
        return View::make('nguoimuon_muontra.index_muontra')->with('title', 'Tra cứu mượn - trả trong thư viện')
                        ->with('quyensachs', $quyensachs);
    }

    public function giaHan() {
        $idctpm = Input::get('idchitietquyensach');
        $chitietsach = DB::select(DB::raw("CALL get_tt_qs_gia_han(" . $idctpm . ");"));
        return View::make('nguoimuon_muontra.index_giahan')->with('title', 'Gia hạn sách')
                        ->with('chitietqs', $chitietsach);
    }
    
    public function luuGiaHan(){
        $idctpm = Input::get('idchitietquyensach');
        $ngay_gia_han = Input::get('thoigiangiahan');
        $ngay_hen_tra = Input::get('thoigianhientai');
        $so_ngay_gia_han = (strtotime($ngay_gia_han) - strtotime($ngay_hen_tra))/86400;
        $id_dk_gh = DangKiGiaHanSach::max('id');
        $id_dk_gh = ++$id_dk_gh;
        $ngay_gia_han = date('Y-m-d',strtotime($ngay_gia_han));
        $result = DB::statement(DB::raw("CALL insert_gia_han_sach(" . $id_dk_gh . ",".$idctpm.",".$so_ngay_gia_han.",'".$ngay_gia_han."');"));
        return Redirect::to('/borrows/tables')->with('success_message','Bạn đã gia hạn thành công!');
    }
}
