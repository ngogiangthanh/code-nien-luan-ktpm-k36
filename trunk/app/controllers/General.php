<?php

class General extends BaseController {

    // Lưu lịch sử hoạt động
    public static $IdPm = 0;

    public static function storeevents($event) {
        DB::table('lich_su_hoat_dong')->insert(
                array(
                    'id_nguoi_dung' => Auth::user()->id,
                    'dia_chi_ip' => Request::getClientIp(),
                    'mo_ta_tac_vu' => $event,
                    'thoi_gian_tac_vu' => date('Y-m-d H:i:s', time())
        ));
        DB::statement(DB::raw('CALL delete_auto_logs(' . TG_XOA_LS_HOAT_DONG . ');')); // xoa lich su hoat dong
        if (Auth::user()->quyen_han == 'THU_THU') {
            DB::statement(DB::raw('CALL huy_phieu_muon_auto(' . TG_HUY_PHIEU_MUON . ');')); //huy phieu muon
        }
    }

    // Liệt kê loại bài viết
    public static function getLoaiBaiViet() {
        $loaibaiviets = DB::table('bai_viet')
                ->join('loai_bai_viet', function($join) {
                            $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                        })
                ->groupBy('loai_bai_viet.mo_ta_loai_bai_viet')
                ->select(DB::raw('count(*) as tong, loai_bai_viet.mo_ta_loai_bai_viet'), 'loai_bai_viet.nhom_loai', 'loai_bai_viet.alias')
                ->where('bai_viet.trang_thai_bai_viet', '=', 1)
                ->orderBy('loai_bai_viet.mo_ta_loai_bai_viet')
                ->get();
        return $loaibaiviets;
    }

    // Liệt kê luận văn
    public static function getLuanVan() {
        $luanvans = DB::table('luan_van')
                ->groupBy('luan_van.lv_cao_hoc')
                ->select(DB::raw('count(*) as tongloai, luan_van.lv_cao_hoc'))
                ->get();
        return $luanvans;
    }

    // Liệt kê tài liệu
    public static function getTaiLieu() {
        $tailieus = DB::table('tai_lieu')
                ->join('the_loai_sach', function($join) {
                            $join->on('tai_lieu.id_the_loai_sach', '=', 'the_loai_sach.id');
                        })
                ->groupBy('the_loai_sach.mo_ta_the_loai')
                ->select(DB::raw('count(*) as tongloai, the_loai_sach.mo_ta_the_loai'))
                ->orderBy('tongloai')
                ->get();
        return $tailieus;
    }

    //Liệt kê ngôn ngữ
    public static function getNgonNgu() {
        $ngonngus = DB::table('dau_sach')
                ->groupBy('dau_sach.ngon_ngu_sach')
                ->select(DB::raw('count(*) as tongsach, dau_sach.ngon_ngu_sach'))
                ->orderBy('dau_sach.ngon_ngu_sach')
                ->get();
        return $ngonngus;
    }

    //Liệt kê sách mới cập nhật
    public static function getSachMoiCapNhat() {
        $sachmois = DB::table('phieu_nhap_sach')->distinct()
                ->join('quyen_sach', function($join) {
                            $join->on('phieu_nhap_sach.id', '=', 'quyen_sach.id_phieu_nhap');
                        })
                ->join('dau_sach', function($join) {
                            $join->on('quyen_sach.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->whereBetween('phieu_nhap_sach.thoi_gian_lap', array(date("Y-m-d H:i:s", time() - (7 * 24 * 60 * 60)), date("Y-m-d H:i:s", time())))
                ->select('dau_sach.ten_dau_sach')
                ->orderBy('phieu_nhap_sach.thoi_gian_lap')
                ->orderBy('dau_sach.ten_dau_sach')
                ->paginate(5);
        return $sachmois;
    }

    //
    public static function randomPassword() {
        $length = 10;
        $allow = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=";
        $i = 1;
        $ret = "";
        while ($i <= $length) {
            $max = strlen($allow) - 1;
            $num = rand(0, $max);
            $temp = substr($allow, $num, 1);
            $ret = $ret . $temp;
            $i++;
        }
        return $ret;
    }

    //Lấy địa chỉ IP
    public static function getRealIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    //Lấy mã số thẻ
    public static function getMst($id) {

        $mst = NguoiDung::select('ma_so_the')->where('id', $id)->get();
        return $mst[0]->ma_so_the;
    }

    //Lấy id nhóm quyền hạn
    public static function getIdQuyenHan($id) {

        $idQh = NguoiDung::select('id_nhom_quyen_han')->where('id', $id)->get();
        return $idQh[0]->id_nhom_quyen_han;
    }

    //Lấy id người mượn.
    public static function getIdNguoiMuon($idPhieu) {

        $idNguoiMuon = PhieuMuonSach::select('id_nguoi_muon')->where('id', $idPhieu)->get();
        return $idNguoiMuon[0]->id_nguoi_muon;
    }

    //Lấy trạng thái.
    public static function getTrangThai($mst) {
        $TrangThai = NguoiDung::select('trang_thai_hoat_dong')->where('ma_so_the', $mst)->get();
        return $TrangThai[0]->trang_thai_hoat_dong;
    }

    //Lấy id người dùng
    public static function getId($mst) {

        $id = NguoiDung::select('id')->where('ma_so_the', $mst)->get();
        return $id[0]->id;
    }

    //Lấy họ tên người dùng
    public static function getHoten($mst) {

        $HoTen = NguoiDung::select('ho_ten')->where('ma_so_the', $mst)->get();
        return $HoTen[0]->ho_ten;
    }

    //Lấy mã BarCode
    public static function getBarCode($id) {

        $BarCode = QuyenSach::select('ma_bar_code')->where('id', $id)->get();
        return $BarCode[0]->ma_bar_code;
    }

    //Lấy id phiếu mượn sách
    public static function getIdPhieuMuon($id) {

        $IdPhieuMuon = ChiTietPhieuMuonSach::select('id_phieu_muon')->where('id', $id)->get();
        return $IdPhieuMuon[0]->id_phieu_muon;
    }

    public static function getTrangThaiSachMuon($id) {

        $TrangThaiSachMuon = ChiTietPhieuMuonSach::select('trang_thai_sach_muon')->where('id', $id)->get();
        return $TrangThaiSachMuon[0]->trang_thai_sach_muon;
    }

    //Lấy mã số phiếu mượn sách
    public static function getMaPhieuMuon($id) {
        $MaPM = PhieuMuonSach::select('ma_so_phieu')->where('id', $id)->get();
        return $MaPM[0]->ma_so_phieu;
    }

    //Lấy SĐT người dùng
    public static function getSDT($mst) {

        $SDT = NguoiDung::select('sdt')->where('ma_so_the', $mst)->get();
        return $SDT[0]->sdt;
    }

    //Lấy Email
    public static function getEmail($mst) {

        $Email = NguoiDung::select('email')->where('ma_so_the', $mst)->get();
        return $Email[0]->email;
    }

    //Lấy đơn vị
    public static function getDonVi($mst) {

        $DonVi = NguoiDung::select('don_vi_cong_tac')->where('ma_so_the', $mst)->get();
        return $DonVi[0]->don_vi_cong_tac;
    }

    //Lấy id phiếu mượn sách từ mã số phiếu
    public static function getIdPhieu($msp) {

        $id = PhieuMuonSach::select('id')->where('ma_so_phieu', $msp)->get();
        return $id[0]->id;
    }

    //Lấy id sách
    public static function getIdSach($barcode) {

        $id = QuyenSach::select('id')->where('ma_bar_code', $barcode)->get();
        return $id[0]->id;
    }

    public static function getIdDauSach($idQuyenSach) {
        $idDauSach = QuyenSach::select('id_dau_sach')->where('id', $idQuyenSach)->get();
        return $idDauSach[0]->id_dau_sach;
    }

    //Lấy tg hẹn trả.
    public static function getThoiGianHenTra($id) {
        $idThoiGianHenTra = ChiTietPhieuMuonSach::select('thoi_gian_hen_tra')->where('id', $id)->get();
        return $idThoiGianHenTra[0]->thoi_gian_hen_tra;
    }

    public static function recursive_array_search($needle, $haystack) {
        $check = FALSE;
        for ($i = 0; $i < count($haystack); $i++) {
            if ($needle == $haystack[$i]) {
                $check = true;
                break;
            }
        }
        return $check;
    }

}
