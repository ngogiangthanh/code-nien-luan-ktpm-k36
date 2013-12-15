<?php

class ThuThuQuanLyMuonTra extends BaseController {

    public function index() {
        $dsPhieuMuon = null;
        if (Input::has('txtLoaiUser') && !Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            if ($idLoaiUser != 'all') {
                $dsPhieuMuon = $this->getSomePhieuMuon($idLoaiUser);
            } else {
                $dsPhieuMuon = $this->getAllPhieuMuon();
            }
        } else if (!Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $txtTK = Input::get('txtTimKiem');
            $dsPhieuMuon = $this->getSomePhieuMuon(null, $txtTK);
        } else if (Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            $txtTK = Input::get('txtTimKiem');
            $dsPhieuMuon = $this->getSomePhieuMuon($idLoaiUser, $txtTK);
        } else {
            $dsPhieuMuon = $this->getSomePhieuMuon();
        }
        $dsPhieuMuon = $dsPhieuMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        General::storeevents(THU_THU_XEM_DANH_SACH_MUON_TRA);
        return View::make('thuthu_quanlymuontra.index')->with('title', 'Xem danh sách các phiếu mượn')
                        ->with('dsPhieuMuon', $dsPhieuMuon);
    }

    private function getAllPhieuMuon() {
        //Gọi hàm setOnlinePhieuMuon() - setPhieuTreHen()
        $this->setOnlinePhieuMuon();
        $this->setPhieuTreHen();
        //--------------------------.
        $dsPhieuMuon = null;
        $dsPhieuMuon = PhieuMuonSach::join('nguoi_dung', function($join) {
                            $join->on('phieu_muon_sach.id_nguoi_muon', '=', 'nguoi_dung.id');
                        })
                ->select('nguoi_dung.id', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.thoi_gian_lap', 'phieu_muon_sach.thoi_gian_xu_ly', 'phieu_muon_sach.trang_thai_phieu', 'nguoi_dung.ma_so_the', 'phieu_muon_sach.id_nguoi_xu_ly', 'phieu_muon_sach.id')
                ->orderBy('phieu_muon_sach.trang_thai_phieu', 'asc');
        return $dsPhieuMuon;
    }

    private function getSomePhieuMuon($txtLoaiUser = null, $txtTK = null) {
        //Gọi hàm setOnlinePhieuMuon() - setPhieuTreHen()
        $this->setOnlinePhieuMuon();
        $this->setPhieuTreHen();
        //--------------------------.
        $dsPhieuMuon = null;
        if ($txtLoaiUser != null && $txtTK == null) {
            $dsPhieuMuon = PhieuMuonSach::join('nguoi_dung', function($join) {
                                $join->on('phieu_muon_sach.id_nguoi_muon', '=', 'nguoi_dung.id');
                            })
                    ->select('nguoi_dung.id', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.thoi_gian_lap', 'phieu_muon_sach.thoi_gian_xu_ly', 'phieu_muon_sach.trang_thai_phieu', 'nguoi_dung.ma_so_the', 'phieu_muon_sach.id_nguoi_xu_ly', 'phieu_muon_sach.id')
                    ->where('phieu_muon_sach.trang_thai_phieu', $txtLoaiUser)
                    ->orderBy('phieu_muon_sach.trang_thai_phieu', 'asc');
        } else if ($txtLoaiUser == null && $txtTK != null) {
            $dsPhieuMuon = PhieuMuonSach::join('nguoi_dung', function($join) {
                                $join->on('phieu_muon_sach.id_nguoi_muon', '=', 'nguoi_dung.id');
                            })
                    ->select('nguoi_dung.id', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.thoi_gian_lap', 'phieu_muon_sach.thoi_gian_xu_ly', 'phieu_muon_sach.trang_thai_phieu', 'nguoi_dung.ma_so_the', 'phieu_muon_sach.id_nguoi_xu_ly', 'phieu_muon_sach.id')
                    ->where('nguoi_dung.ma_so_the', $txtTK)
                    ->orderBy('phieu_muon_sach.trang_thai_phieu', 'asc');
        } else if ($txtLoaiUser != null && $txtTK != null) {
            $dsPhieuMuon = PhieuMuonSach::join('nguoi_dung', function($join) {
                                $join->on('phieu_muon_sach.id_nguoi_muon', '=', 'nguoi_dung.id');
                            })
                    ->select('nguoi_dung.id', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.thoi_gian_lap', 'phieu_muon_sach.thoi_gian_xu_ly', 'phieu_muon_sach.trang_thai_phieu', 'nguoi_dung.ma_so_the', 'phieu_muon_sach.id_nguoi_xu_ly', 'phieu_muon_sach.id')
                    ->where('phieu_muon_sach.trang_thai_phieu', $txtLoaiUser, 'and')
                    ->where('nguoi_dung.ma_so_the', $txtTK)
                    ->orderBy('phieu_muon_sach.trang_thai_phieu', 'asc');
        } else {
            $dsPhieuMuon = $this->getAllPhieuMuon();
        }
        return $dsPhieuMuon;
    }

    public function create() {
        $CacSachMuon = null;
        $IdPhieuMuon = General::getIdPhieu(ThuThuQuanLyMuonTra::getMaSoVuaNhap());
        $CacSachMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
                            $join->on('chi_tiet_phieu_muon_sach.id_quyen_sach', '=', 'quyen_sach.id');
                        })
                ->join('phieu_muon_sach', function($join) {
                            $join->on('chi_tiet_phieu_muon_sach.id_phieu_muon', '=', 'phieu_muon_sach.id');
                        })
                ->join('dau_sach', function($join) {
                            $join->on('dau_sach.id', '=', 'quyen_sach.id_dau_sach');
                        })
                ->select('quyen_sach.id', 'quyen_sach.ma_bar_code', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'chi_tiet_phieu_muon_sach.ghi_chu_sach_muon', 'chi_tiet_phieu_muon_sach.id_nguoi_cap_nhat', 'chi_tiet_phieu_muon_sach.tg_cap_nhat_trang_thai', 'chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 'phieu_muon_sach.id', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'phieu_muon_sach.id_nguoi_muon', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'chi_tiet_phieu_muon_sach.thoi_gian_muon', 'phieu_muon_sach.ma_so_phieu', 'chi_tiet_phieu_muon_sach.id')
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $IdPhieuMuon);
        $CacSachMuon = $CacSachMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        General::storeevents(THU_THU_THEM_PHIEU_MUON_TRA);
        return View::make('thuthu_quanlymuontra.create')
                        ->with('title', 'Thêm phiếu mượn')
                        ->with('CacSachMuon', $CacSachMuon);
    }

    public function store() {
        if (Input::has('btnThem')) {
            $masophieu = str_replace(" ", "", Input::get('txtMaSoPhieu'));
            $nm = str_replace(" ", "", Input::get('txtIdNguoiMuon'));
            //Check Exist - Lock người dùng.
            $CountND = DB::table('nguoi_dung')
                    ->select(DB::raw('count(*) as tong'))
                    ->where('nguoi_dung.ma_so_the', $nm)
                    ->get();
            if ($CountND[0]->tong == 0) {
                return Redirect::back()
                                ->with('messagecheck1', 'Mã số thẻ không tồn tại!');
            } else {
                $TT = General::getTrangThai($nm);
                if ($TT == 0) {
                    return Redirect::back()
                                    ->with('messagecheck2', 'Tài khoản này đang bị khóa!');
                }
            }
            //----------------------.
            $nxl = str_replace(" ", "", Input::get('txtIdNguoiXuLy'));
            $idnguoimuon = General::getId($nm);
            $thoigianlap = date('Y-m-d H:i:s',  strtotime(Input::get('txtThoiGianLap')));
            $ghichu = str_replace(" ", "", Input::get('txtGhiChu'));
            $idnguoixuly = General::getId($nxl);
            $thoigianxuly = date('Y-m-d H:i:s',  strtotime(Input::get('txtThoiGianXuLy')));
            $tthoatdong = 1;
            $result = DB::table('phieu_muon_sach')
                    ->insert(array(
                'ma_so_phieu' => $masophieu,
                'id_nguoi_muon' => $idnguoimuon,
                'thoi_gian_lap' => $thoigianlap,
                'ghi_chu_phieu' => $ghichu,
                'id_nguoi_xu_ly' => $idnguoixuly,
                'thoi_gian_xu_ly' => $thoigianxuly,
                'trang_thai_phieu' => $tthoatdong,
            ));
            return Redirect::back()
                            ->with('message', 'Thêm phiếu mượn thành công!');
        }
    }

    public function storedetail() {
        if (Input::has('btnThemDetail')) {
            //Check Same sách, TG mượn - Trả của từng người dùng(CB - SV).
            $BarCode = str_replace(" ", "", Input::get('txtMaBarCode'));
            $CountSACH = DB::table('quyen_sach')
                    ->select(DB::raw('count(*) as tong'))
                    ->where('quyen_sach.ma_bar_code', $BarCode)
                    ->get();
            if ($CountSACH[0]->tong == 0) {
                return Redirect::back()
                                ->with('messagecheckdetail1', 'Sách không tồn tại!');
            }

            $IdPhieu = General::getIdPhieu(str_replace(" ", "", Input::get('txtMaPhieuMuon')));
            $idSach = General::getIdSach($BarCode);
            $thoigianmuon = date('Y-m-d',  strtotime(Input::get('txtThoiGianMuon')));
            //----------------------------------
          
            //----------------------------------
//            $thoigianhentra = Date('Y-m-d',  strtotime(Input::get('txtThoiGianHenTra')));
            $CountSACHDetail = DB::table('chi_tiet_phieu_muon_sach')
                    ->select(DB::raw('count(*) as tong'))
                    ->where('chi_tiet_phieu_muon_sach.id_quyen_sach', $idSach, 'and')
                    ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $IdPhieu)
                    ->get();
            if ($CountSACHDetail[0]->tong != 0) {
                return Redirect::back()
                                ->with('messagecheckdetail2', 'Sách đã tồn tại trong phiếu!');
            }
            $IdQuyenHan = General::getIdQuyenHan(General::getIdNguoiMuon($IdPhieu));
            $idNguoiMuon = General::getIdNguoiMuon($IdPhieu);
            $SoSach = DB::table('phieu_muon_sach')
                    ->join('chi_tiet_phieu_muon_sach', function($join) {
                                $join->on('phieu_muon_sach.id', '=', 'chi_tiet_phieu_muon_sach.id_phieu_muon');
                            })
                    ->select(DB::raw('count(*) as tong'))
                    ->where('phieu_muon_sach.id_nguoi_muon', $idNguoiMuon)
                    ->get();
            if ($SoSach[0]->tong >= 3 && $IdQuyenHan == 4) {
                return Redirect::back()
                                ->with('messagecheckdetail5', 'Theo quy định của thư viện sinh viên chỉ được mượn tối đa 3 quyển!');
            } else if ($SoSach[0]->tong >= 5 && $IdQuyenHan != 4) {
                return Redirect::back()
                                ->with('messagecheckdetail6', 'Theo quy định của thư viện cán bộ chỉ được mượn tối đa 5 quyển!');
            }
            //------------------------------------------------------------------.
                $now = time();
                $new=time();
                        $add = 86400;
                        if (General::getIdQuyenHan(General::getIdNguoiMuon(General::getIdPhieu(ThuThuQuanLyMuonTra::getMaSoVuaNhap()))) == 4) 
                            {
                            $add = $add * SO_NGAY_MUON_SV;
                        } else {
                            $add = $add * SO_NGAY_MUON_CB;
                        } 
                        $new = $add + $now;
               $thoigianhentra=date('Y-m-d', $new);
            $ghichu = str_replace("  ", " ", Input::get('txtGhiChu'));
            $idnguoixuly = General::getId(str_replace(" ", "", Input::get('txtIdUser')));
            $thoigianxuly = Date('Y-m-d H:i:s',  strtotime(Input::get('txtThoiGianCapNhatTT')));
            $tthoatdong = 1;
            $result = DB::table('chi_tiet_phieu_muon_sach')
                    ->insert(array(
                'id_phieu_muon' => $IdPhieu,
                'id_quyen_sach' => $idSach,
                'thoi_gian_muon' => $thoigianmuon,
                'thoi_gian_hen_tra' => $thoigianhentra,
                'ghi_chu_sach_muon' => $ghichu,
                'id_nguoi_cap_nhat' => $idnguoixuly,
                'tg_cap_nhat_trang_thai' => $thoigianxuly,
                'trang_thai_sach_muon' => $tthoatdong,
            ));
            return Redirect::back()
                            ->with('message', 'Thêm sách mượn thành công!');
        }
    }

    public function show() {
        $id = Input::get('txtIdPhieuMuon');
        if ($id == null || $id == "") {
            $id = General::$IdPm;
        } else {
            General::$IdPm = $id;
        }
        $dsCountdetail = DB::table('chi_tiet_phieu_muon_sach')
                ->select(DB::raw('count(*) as tong'))
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $id)
                ->get();
        $dsPhieuMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
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
                ->select('phieu_muon_sach.id', 'quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'chi_tiet_phieu_muon_sach.thoi_gian_muon', 'nguoi_dung.id_nhom_quyen_han', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.trang_thai_phieu', 'chi_tiet_phieu_muon_sach.ghi_chu_sach_muon', 'chi_tiet_phieu_muon_sach.id_nguoi_cap_nhat', 'chi_tiet_phieu_muon_sach.tg_cap_nhat_trang_thai', 'chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 'quyen_sach.ma_bar_code', 'chi_tiet_phieu_muon_sach.id')
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $id);

        if ($dsCountdetail[0]->tong != 0) {
            $dsPhieuMuon = $dsPhieuMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
            return View::make('thuthu_quanlymuontra.view')
                            ->with('title', 'Xem chi tiết phiếu mượn')
                            ->with('dsPhieuMuon', $dsPhieuMuon);
        } else {
            return View::make('thuthu_quanlymuontra.notdetail')
                            ->with('title', 'Xem chi tiết phiếu mượn');
        }
    }

    public function edit() {
        $id = Input::get('txtIdPhieuMuon');
        $PhieuMuon = PhieuMuonSach::select('*')
                ->where('phieu_muon_sach.id', $id)
                ->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        return View::make('thuthu_quanlymuontra.edit')
                        ->with('title', 'Sửa thông tin phiếu mượn')
                        ->with('PhieuMuon', $PhieuMuon);
    }

    public function editdetail() {
        $id = Input::get('txtIdPhieuMuon');
        $PhieuMuon = ChiTietPhieuMuonSach::select('*')
                ->where('chi_tiet_phieu_muon_sach.id', $id)
                ->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        return View::make('thuthu_quanlymuontra.editdetail')
                        ->with('title', 'Sửa thông tin chi tiết phiếu mượn')
                        ->with('PhieuMuon', $PhieuMuon);
    }

    public function update() {
        $id = Input::get('txtIdPhieu');
        $nm = str_replace(" ", "", Input::get('txtMaSoNguoiMuon'));
        $ghichu = str_replace("  ", " ", Input::get('txtGhiChu'));
        $tthoatdong = Input::get('trangthai');
        $idNguoixuly=General::getId(Auth::user()->ma_so_the);
        //Cập nhật trạng thái chi tiết phiếu mượn khi trạng thái phiếu mượn là 1(Được mượn).
        if ($tthoatdong == 1) {
            $RowAction = DB::update('update chi_tiet_phieu_muon_sach set trang_thai_sach_muon=' . $tthoatdong . ' where id_phieu_muon=?', array($id));
        }
        //---------------------------------------------------------
        //Cập nhật trạng thái chi tiết phiếu mượn khi trạng thái phiếu mượn là 2(Chưa xử lý).
        else if ($tthoatdong == 2) {
        $RowAction = DB::update('update chi_tiet_phieu_muon_sach set trang_thai_sach_muon=5 where id_phieu_muon=?', array($id));
        }//null.
        //--------------------------------------------------------
        //Cập nhật trạng thái phiếu mượn khi trạng thái phiếu mượn là 0(Mượn online).
        else if ($tthoatdong == 0) {
            
        }//null.
        //--------------------------------------------------------
        //Kiểm tra mã số thẻ trước khi cập nhật.
        $CountND = DB::table('nguoi_dung')
                ->select(DB::raw('count(*) as tong'))
                ->where('nguoi_dung.ma_so_the', $nm)
                ->get();
        if ($CountND[0]->tong == 0) {
            return Redirect::back()
                            ->with('messagecheck1', 'Mã số thẻ không tồn tại!');
        } else {
            $TT = General::getTrangThai($nm);
            if ($TT == 0) {
                return Redirect::back()
                                ->with('messagecheck2', 'Tài khoản này đang bị khóa!');
            }
        }
        $idnguoimuon = General::getId($nm);
        $idOld = General::getIdNguoiMuon($id);
        if($idnguoimuon!=$idOld) {
        $IdQuyenHan = General::getIdQuyenHan($idnguoimuon);
        $SoSach = DB::table('phieu_muon_sach')
                ->join('chi_tiet_phieu_muon_sach', function($join) {
                            $join->on('phieu_muon_sach.id', '=', 'chi_tiet_phieu_muon_sach.id_phieu_muon');
                        })
                ->select(DB::raw('count(*) as tong'))
                ->where('phieu_muon_sach.id_nguoi_muon', $idnguoimuon, 'OR')
                ->where('phieu_muon_sach.id_nguoi_muon', $idOld)
                ->get();
        if ($SoSach[0]->tong >= SO_SACH_MUON_SV && $IdQuyenHan == 4) {
            return Redirect::back()
                            ->with('messagecheckdetail6', 'Theo quy định của thư viện sinh viên chỉ được mượn tối đa 3 quyển!');
        } else if ($SoSach[0]->tong >= SO_SACH_MUON_CB && $IdQuyenHan != 4) {
            return Redirect::back()
                            ->with('messagecheckdetail6', 'Theo quy định của thư viện cán bộ chỉ được mượn tối đa 5 quyển!');
        }
        }
        //----------------------------------
        $RowAction = DB::update('update phieu_muon_sach set id_nguoi_muon =' . $idnguoimuon . ',ghi_chu_phieu="' . $ghichu . '",id_nguoi_xu_ly='.$idNguoixuly.', trang_thai_phieu=' . $tthoatdong . ' where id=?', array($id));
        return Redirect::back()
                        ->with('message', 'Sửa thông tin phiếu mượn thành công!');
    }

    public function updatedetail() {
        $id = Input::get('txtidChitietPhieu');
        $BarCode = str_replace(" ", "", Input::get('txtMaBarCode'));
        $idSach = General::getIdSach($BarCode);
//        $thoigianmuon = Input::get('txtThoiGianMuon');
        $thoigianhentra = Input::get('txtThoiGianHenTra');
        $ghichu = str_replace("  ", " ", Input::get('txtGhiChu'));
        $tthoatdong = Input::get('trangthai');
        $idNguoiCapNhat=  General::getId(Auth::user()->ma_so_the);
        //Kiểm tra trạng thái chi tiết phiếu mượn -> quyển sách -> đầu sách ->banner.
        $tthoatdongold = General::getTrangThaiSachMuon($id);
        if ($tthoatdong != $tthoatdongold) {
            //Trạng thái sách trả
            if ($tthoatdong == 0) {
                $now = date('Y-m-d', time());
                if ($thoigianhentra < $now) {
                    $idNguoiMuon = General::getIdNguoiMuon(General::getIdPhieuMuon($id));
                    $CountBanner = DB::table('banned_tk')
                            ->select(DB::raw('count(*) as tong'))
                            ->where('banned_tk.id_nguoi_bi_banned', $idNguoiMuon)
                            ->get();
                    if ($CountBanner[0]->tong == 0) {
                        $idNguoiBiBan = $idNguoiMuon;
                        $SoNgayBan = SO_NGAY_BANNED_LAN_NHAT;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 0;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'so_ngay_banned' => $SoNgayBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    } else if ($CountBanner[0]->tong == 1) {
                        $idNguoiBiBan = $idNguoiMuon;
                        $SoNgayBan = SO_NGAY_BANNED_LAN_HAI;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 0;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'so_ngay_banned' => $SoNgayBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    } else {
                        $idNguoiBiBan = $idNguoiMuon;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 1;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    }
                }
            } else if ($tthoatdong == 2) {
                $now = date('Y-m-d', time());
                if ($thoigianhentra < $now) {
                    $idNguoiMuon = General::getIdNguoiMuon(General::getIdPhieuMuon($id));
                    $CountBanner = DB::table('banned_tk')
                            ->select(DB::raw('count(*) as tong'))
                            ->where('banned_tk.id_nguoi_bi_banned', $idNguoiMuon)
                            ->get();
                    if ($CountBanner[0]->tong == 0) {
                        $idNguoiBiBan = $idNguoiMuon;
                        $SoNgayBan = SO_NGAY_BANNED_LAN_NHAT;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 0;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'so_ngay_banned' => $SoNgayBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    } else if ($CountBanner[0]->tong == 1) {
                        $idNguoiBiBan = $idNguoiMuon;
                        $SoNgayBan = SO_NGAY_BANNED_LAN_HAI;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 0;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'so_ngay_banned' => $SoNgayBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    } else {
                        $idNguoiBiBan = $idNguoiMuon;
                        $NgayBatDau = $now;
                        $LyDo = "Trả sách trể hẹn";
                        $IdNguoiBan = General::getId(Auth::user()->ma_so_the);
                        $ThoiGianTacVu = date('Y-m-d H:i:s', time());
                        $TrangThaiBan = 1;

                        $result = DB::table('banned_tk')
                                ->insert(array(
                            'id_nguoi_bi_banned' => $idNguoiBiBan,
                            'ngay_bat_dau' => $NgayBatDau,
                            'ly_do_banned' => $LyDo,
                            'id_nguoi_banned' => $IdNguoiBan,
                            'thoi_gian_tac_vu' => $ThoiGianTacVu,
                            'trang_thai_ban' => $TrangThaiBan,
                        ));
                    }
                }
                //-------------------.
            } else if ($tthoatdong == 3) {
                $idQuyenSach = $idSach;
                //Cập nhật sách mượn (quyển sach).
                $RowAction = DB::update('update quyen_sach set trang_thai_sach=0 where id=?', array($idQuyenSach));
                //-------------------------------.
                $idDauSach = General::getIdDauSach($idQuyenSach);
                $CountDauSach = DB::table('quyen_sach')
                        ->select(DB::raw('count(*) as tong'))
                        ->where('quyen_sach.id_dau_sach', $idDauSach, 'and')
                        ->where('quyen_sach.trang_thai_sach', 1)
                        ->get();
                if ($CountDauSach[0]->tong == 0) {
                    //Cập nhật đầu sách (đầu sách).
                    $RowAction = DB::update('update dau_sach set trang_thai_dau_sach=0 where id=?', array($idDauSach));
                    //-------------------------------.
                }
            }
        }
        $ThoiGianTraOld = General::getThoiGianHenTra($id);
        if ($ThoiGianTraOld != $thoigianhentra) {
            $IdGiaHan = $id;
            $SoNgayGiaHan = date('d', strtotime($thoigianhentra)) - date('d', strtotime($ThoiGianTraOld));
            $ThoiGianDKGH = date('Y-m-d H:i:s', time());
            $GhiChu = "Gia hạn trược tiếp với thủ thư";
            $result = DB::table('dang_ki_gia_han_sach')
                    ->insert(array(
                'id_sach_muon' => $IdGiaHan,
                'so_ngay_gia_han' => $SoNgayGiaHan,
                'thoi_gian_dk_gia_han' => $ThoiGianDKGH,
                'ghi_chu_gia_han' => $GhiChu,
            ));
        }
        //--------------------------------------------------------------------------.
        $RowAction = DB::update('update chi_tiet_phieu_muon_sach set id_quyen_sach ="' . $idSach . '",thoi_gian_hen_tra="' . $thoigianhentra . '",id_nguoi_cap_nhat='.$idNguoiCapNhat.', ghi_chu_sach_muon="' . $ghichu . '",trang_thai_sach_muon=' . $tthoatdong . ' where id=?', array($id));
        return Redirect::back()
                        ->with('message', 'Sửa thông tin phiếu mượn thành công!');
    }

    public function destroy() {
        $id = Input::get('txtIdPhieuMuon');
        $result = false;
        try {
            $result = PhieuMuonSach::find($id)->delete();
        } catch (Exception $ex) {
            $result = false;
        }
        return Redirect::back()
                        ->with('result', $result);
    }

    public function destroydetail() {
        $id = Input::get('txtIdPhieuMuon');
        $idPhieuMuon = General::getIdPhieuMuon($id);
        $result = false;
        try {
            $result = ChiTietPhieuMuonSach::find($id)->delete();
        } catch (Exception $ex) {
            $result = false;
        }
        $dsCountdetail = DB::table('chi_tiet_phieu_muon_sach')
                ->select(DB::raw('count(*) as tong'))
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $idPhieuMuon)
                ->get();
        $dsPhieuMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
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
                ->select('phieu_muon_sach.id', 'quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'chi_tiet_phieu_muon_sach.thoi_gian_muon', 'nguoi_dung.id_nhom_quyen_han', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.trang_thai_phieu', 'chi_tiet_phieu_muon_sach.ghi_chu_sach_muon', 'chi_tiet_phieu_muon_sach.id_nguoi_cap_nhat', 'chi_tiet_phieu_muon_sach.tg_cap_nhat_trang_thai', 'chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 'quyen_sach.ma_bar_code', 'chi_tiet_phieu_muon_sach.id')
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $idPhieuMuon);

        if ($dsCountdetail[0]->tong != 0) {
            $dsPhieuMuon = $dsPhieuMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
            return View::make('thuthu_quanlymuontra.view')
                            ->with('title', 'Xem chi tiết phiếu mượn')
                            ->with('dsPhieuMuon', $dsPhieuMuon);
        } else {
            return View::make('thuthu_quanlymuontra.notdetail')
                            ->with('title', 'Xem chi tiết phiếu mượn');
        }
    }

    public function destroydetailtemp() {
        $id = Input::get('txtIdPhieuMuon');
        $idPhieuMuon = General::getIdPhieuMuon($id);
        $result = false;
        try {
            $result = ChiTietPhieuMuonSach::find($id)->delete();
        } catch (Exception $ex) {
            $result = false;
        }
        return Redirect::back()
                        ->with('result', $result);
    }

    public function printt() {
        if (Input::has('txtLoaiUser') && !Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            if ($idLoaiUser != 'all') {
                $dsPhieuMuon = $this->getSomePhieuMuon($idLoaiUser);
            } else {
                $dsPhieuMuon = $this->getAllPhieuMuon();
            }
        } else if (!Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $txtTK = Input::get('txtTimKiem');
            $dsPhieuMuon = $this->getSomePhieuMuon(null, $txtTK);
        } else if (Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            $txtTK = Input::get('txtTimKiem');
            $dsPhieuMuon = $this->getSomePhieuMuon($idLoaiUser, $txtTK);
        } else {
            $dsPhieuMuon = $this->getSomePhieuMuon();
        }
        $dsPhieuMuon = $dsPhieuMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        return View::make('thuthu_quanlymuontra.print')
                        ->with('title', 'In danh sách các phiếu mượn')
                        ->with('dsPhieuMuon', $dsPhieuMuon);
    }

    public function printdetail() {
        $IdDetail = Input::get('txtIdDetail');
        $dsPhieuMuon = QuyenSach::join('chi_tiet_phieu_muon_sach', function($join) {
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
                ->select('phieu_muon_sach.id', 'quyen_sach.id', 'chi_tiet_phieu_muon_sach.id_quyen_sach', 'chi_tiet_phieu_muon_sach.id_phieu_muon', 'dau_sach.id', 'quyen_sach.id_dau_sach', 'dau_sach.ten_dau_sach', 'dau_sach.ngon_ngu_sach', 'phieu_muon_sach.id_nguoi_muon', 'nguoi_dung.id', 'nguoi_dung.ma_so_the', 'chi_tiet_phieu_muon_sach.thoi_gian_hen_tra', 'chi_tiet_phieu_muon_sach.thoi_gian_muon', 'nguoi_dung.id_nhom_quyen_han', 'phieu_muon_sach.ma_so_phieu', 'phieu_muon_sach.trang_thai_phieu', 'chi_tiet_phieu_muon_sach.ghi_chu_sach_muon', 'chi_tiet_phieu_muon_sach.id_nguoi_cap_nhat', 'chi_tiet_phieu_muon_sach.tg_cap_nhat_trang_thai', 'chi_tiet_phieu_muon_sach.trang_thai_sach_muon', 'quyen_sach.ma_bar_code', 'chi_tiet_phieu_muon_sach.id')
                ->where('chi_tiet_phieu_muon_sach.id_phieu_muon', $IdDetail);
        $dsPhieuMuon = $dsPhieuMuon->paginate(QUAN_LY_SO_PHIEU_MUON_TREN_TRANG);
        return View::make('thuthu_quanlymuontra.printdetail')
                        ->with('title', 'Bảng in chi tiết phiếu mượn')
                        ->with('dsPhieuMuon', $dsPhieuMuon);
    }

    public static function getMaxMaSoPhieuMuon() {
        $a = PhieuMuonSach::max('ma_so_phieu');
        $len = strlen($a);
        $so = '';
        $chuoi = '';
        $kq = "PM";
        for ($i = 0; $i < $len; $i++) {
            if (is_numeric($a[$i])) {
                $so = $so . $a[$i];
            } else {
                $chuoi = $chuoi . $a[$i];
            }
        }
        $num = (int) $so;
        if ($num != null) {
            $num++;
            if ($num > 9999) {
                $kq = $kq . $num;
            } else if ($num > 999) {
                $kq = $kq . "0" . $num;
            } else if ($num > 99) {
                $kq = $kq . "00" . $num;
            } else if ($num > 9) {
                $kq = $kq . "000" . $num;
            } else {
                $kq = $kq . "0000" . $num;
            }
            return $kq;
        }
    }

    public static function getMaSoVuaNhap() {
        $a = PhieuMuonSach::max('ma_so_phieu');
        return $a;
    }

    public function setOnlinePhieuMuon() {
        //Cập nhật phiếu mượn online nếu không đến nhận -> Bị hủy
        $now = time();
        $add = 86400 * SO_NGAY_HEN_LAY_SACH_MUON_ONLINE;
        $new = date('Y-m-d H:i:s', $now - $add);
        $RowAction = DB::update('update phieu_muon_sach set trang_thai_phieu=2 where trang_thai_phieu=0 and thoi_gian_lap<?', array($new));
        //-------------------------------------------------------
    }

    public function setPhieuTreHen() {
        //Cập nhật phiếu mượn 'Đang mượn' nếu hết hạn  -> 'Chưa trả
        $new = date('Y-m-d H:i:s', time());
        $RowAction = DB::update('update chi_tiet_phieu_muon_sach set trang_thai_sach_muon=2 where trang_thai_sach_muon=1 and thoi_gian_hen_tra<?', array($new));
        //-------------------------------------------------------
    }

}
