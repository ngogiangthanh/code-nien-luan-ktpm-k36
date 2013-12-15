<?php

class QuanLyQuanLySach extends BaseController {

    public function index() {
        General::storeevents(QUAN_LY_QUAN_LY_DANH_SACH_SACH);
        return View::make('quanly_quanlysach.index_dssach')->with('title', 'Danh sách sách');
    }

    public function getDauSach($ngonNgu = null, $loaiSach = null, $theLoai = null, $tk = null) {
        $dauSachs = DB::table('dau_sach');  
        if(strcmp($ngonNgu,"allNN") != 0 || !is_null($ngonNgu)) {
          $dauSachs = $dauSachs->where('dau_sach.ngon_ngu_sach', $ngonNgu);
        }
          
        $dauSachs = $dauSachs->select('dau_sach.id', 'dau_sach.ten_dau_sach', 'dau_sach.gioi_thieu_sach', 'dau_sach.ngon_ngu_sach', 'dau_sach.link_hinh_anh', 'dau_sach.ghi_chu_dau_sach', 'dau_sach.tags', 'dau_sach.trang_thai_dau_sach')
                ->leftJoin('tai_lieu', function($join) {
                            $join->on('tai_lieu.id_dau_sach', '=', 'dau_sach.id');
                        })
                ->leftJoin('luan_van', function($join) {
                    $join->on('luan_van.id_dau_sach', '=', 'dau_sach.id');
                })
                            ->paginate(QUAN_LY_SO_DAU_SACH_TREN_TRANG);
        return $dauSachs;
    }

    public function index1() {
        General::storeevents(QUAN_LY_QUAN_LY_YEU_CAU_SACH);
        return View::make('quanly_quanlysach.index_ycsach')->with('title', 'Danh sách yêu cầu sách');
    }

    public function create() {
        General::storeevents(QUAN_LY_QUAN_LY_THEM_MOI_SACH);
        return View::make('quanly_quanlysach.create')->with('title', 'Thêm mới sách');
    }

    public function store() {
        if (Input::has('btnThem')) {
            $idphieu = str_replace("  ", " ", trim(Input::get('id')));
            $iddausach = str_replace("  ", " ", trim(Input::get('id-dau-sach')));
            $idnxb = str_replace("  ", " ", trim(Input::get('id-nxb')));
            $masosach = str_replace("  ", " ", trim(Input::get('ma-so-sach')));
            $mabarcode = str_replace("  ", " ", trim(Input::get('ma-barcode')));
            $loaisach = Input::get('loai-sach');
            $madeway = str_replace("  ", " ", trim(Input::get('ma-deway')));
            $macutter = str_replace("  ", " ", trim(Input::get('ma-cutter')));
            $ghichu = str_replace("  ", " ", trim(Input::get('ghi-chu')));
            $trangthai = Input::get('checkTrangthai');
            if ($trangthai == "trangthai")
                $trangthai = 1;
            else
                $tthoatdong = 0;
        }
        $result = DB::table('nguoi_dung')
                ->insert(array(
            'id_nhom_quyen_han' => $nhomquyen,
            'ma_so_the' => $mst,
            'password' => $pass,
            'ho_ten' => $hoten,
            'gioi_tinh' => $gioitinh,
            'ngay_sinh' => $ngaysinh,
            'dia_chi' => $diachi,
            'sdt' => $sdt,
            'don_vi_cong_tac' => $dvcongtac,
            'email' => $email,
            'link_avatar' => $linkavatar,
            'ngay_cap_the' => $ngaycapthe,
            'ngay_het_han' => $ngayhethan,
            'trang_thai_hoat_dong' => $tthoatdong));
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        
    }

    public function update($id) {
        //
    }

    public function destroy($id) {
        //
    }

    public static function getMaxMaSoPhieu() {
        $id_ht = PhieuNhapSach::max('id');
        $id_next = ++$id_ht;
        $ma_so_next = "PN00000";//PNXXXXX
        $ma_so_next = substr($ma_so_next,0,7-strlen($id_next)).$id_next;
        return $ma_so_next;
    }

    public static function getAllBooks() {
        $dsLoaisach = DB::table('the_loai_sach')
                ->select('mo_ta_the_loai')
                ->orderBy('mo_ta_the_loai')
                ->get();
        return $dsLoaisach;
    }

    //Liệt kê ngôn ngữ
    public static function getNgonNguSach() {
        $ngonngus = DB::table('dau_sach')
                ->select('ngon_ngu_sach')
                ->distinct()
                ->orderBy('ngon_ngu_sach')
                ->get();
        return $ngonngus;
    }

}
