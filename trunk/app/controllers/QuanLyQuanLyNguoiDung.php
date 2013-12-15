<?php
class QuanLyQuanLyNguoiDung extends BaseController {

    public function index() {
        $dsNguoiDung = null;
        if (Input::has('txtLoaiUser') && !Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            if ($idLoaiUser != 'all') {
                $dsNguoiDung = $this->getSomeUser($idLoaiUser);
            } else {
                $dsNguoiDung = $this->getSomeUser();
            }
        } else if (!Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $txtTK = Input::get('txtTimKiem');
            $dsNguoiDung = $this->getSomeUser(null, $txtTK); //edit
        } else if (Input::has('txtLoaiUser') && Input::has('txtTimKiem')) {
            $idLoaiUser = Input::get('txtLoaiUser');
            $txtTK = Input::get('txtTimKiem');
            $dsNguoiDung = $this->getSomeUser($idLoaiUser, $txtTK); //edit
        } else {
            $dsNguoiDung = $this->getSomeUser();
        }
        return View::make('quanly_quanlynguoidung.index')
                        ->with('title', 'Danh sách người dùng')
                        ->with('dsNguoiDung', $dsNguoiDung);
    }

    private function getAllUser() {
        $dsNguoiDung = NguoiDung::orderBy('ma_so_the')->paginate(QUAN_LY_SO_NGUOI_DUNG_TREN_TRANG);
        return $dsNguoiDung;
    }

    private function getSomeUser($txtLoaiUser = null, $txtTK = null) {
        $dsNguoiDung = null;
        if ($txtLoaiUser != null && $txtTK == null) {
            $dsNguoiDung = NguoiDung::orderBy('ma_so_the')
                    ->where('id_nhom_quyen_han', '=', $txtLoaiUser)
                    ->paginate(QUAN_LY_SO_NGUOI_DUNG_TREN_TRANG);
        } else if ($txtLoaiUser == null && $txtTK != null) {
            $dsNguoiDung = $this->getAllUser(); //edit
        } else if ($txtLoaiUser != null && $txtTK != null) {
            $dsNguoiDung = NguoiDung::orderBy('ma_so_the')
                    ->where('id_nhom_quyen_han', '=', $txtLoaiUser)
                    ->paginate(QUAN_LY_SO_NGUOI_DUNG_TREN_TRANG); //edit
        } else {
            $dsNguoiDung = $this->getAllUser();
        }
        return $dsNguoiDung;
    }

    public function create() {
        return View::make('quanly_quanlynguoidung.create')
                        ->with('title', 'Thêm người dùng');
    }

    public function store() {
        if(Input::has('btnThem')){
            $nhomquyen = Input::get('quyen');
            $mst = str_replace(" ","",Input::get('txtMaSoThe'));
            $pass = Hash::make(General::randomPassword());
            $hoten = str_replace("  "," ",trim(Input::get('txtHoTen')));
            $gioitinh = Input::get('gioiTinh');
            $ngaysinh = Input::get('txtNgaySinh');
            $email = str_replace(" ","",Input::get('txtEmail'));
            $ngaycapthe = Input::get('txtNgayCapThe');
            
            $ngayhethan = null;
            if(Input::get('txtNgayHetHan') != ""){
                $ngayhethan = Input::get('txtNgayHetHan');
            }
            $tthoatdong = 0;
            if (Input::get('checkHoatDong') == "hoatdong") {
                $tthoatdong = 1;
            } else {
                $tthoatdong = 0;
            }
            
        $result = DB::table('nguoi_dung')
                ->insert(array(
                        'id_nhom_quyen_han'=>$nhomquyen,
                        'ma_so_the' =>$mst,
                        'password' =>$pass,
                        'ho_ten' =>$hoten,
                        'gioi_tinh'=>$gioitinh,
                        'ngay_sinh'=>$ngaysinh,
                        'email'=>$email,
                        'ngay_cap_the'=>$ngaycapthe,
                        'ngay_het_han'=>$ngayhethan,
                        'trang_thai_hoat_dong'=>$tthoatdong ));
        General::storeevents(QUAN_LY_THEM_NGUOI_DUNG." có mã số thẻ ".$mst);
        return Redirect::back()
                        ->with('message', 'Thêm người dùng thành công!');
    }
    }

    public function show() {
        $id =  Input::get('txtIdUser');
        $nguoiDung = NguoiDung::select('*')
                ->find($id);
        return View::make('quanly_quanlynguoidung.view')
                ->with('title','Xem chi tiết người dùng')
                ->with('nguoiDung',$nguoiDung);
    }

    public function edit() {
        $id = Input::get('txtIdUser');
        $nguoiDung = NguoiDung::select('*')
                ->find($id);
        return View::make('quanly_quanlynguoidung.edit')
                        ->with('title', 'Sửa thông tin người dùng')
                        ->with('nguoiDung', $nguoiDung);
    }

    public function update($id) {
        $arrayUser = Input::all();
        NguoiDung::where('id', '=', $id)->update($arrayUser);
        return Redirect::back()
                        ->with('message', 'Sửa thông tin người dùng thành công!');
    }

    public function destroy() {
        $id = Input::get('txtIdUser');
        $result = false;
        try{
        $link = NguoiDung::find($id)->select('link_avatar');
        \Illuminate\Filesystem\Filesystem::delete($link->link_avatar);
        $result = NguoiDung::find($id)->delete();  
        
        } catch (Exception $ex) {
           $result = false; 
        }
        return Redirect::back()
            ->with('result',$result);
    }
    public static function getMaxIdUser(){
        $id = NguoiDung::max('id');
        return $id;
    }
}
