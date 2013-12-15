<?php

class QuanLyQuanLyBaiViet extends BaseController {

    // Hien thi danh sach bai viet
    public function index() {
        $dsBaiViet = null;
        $count = 0;
        $dsLoaiBai = $this->getLoaiBai();
        $dsThuTu = $this->getAllThuTu();
        //
        if (Input::has('txtLoaiBai') && !Input::has('txtTimKiem')) {
            $txtLoaiBai = Input::get('txtLoaiBai');
            if ($txtLoaiBai != 'all') {
                $dsBaiViet = $this->getSomeThreads($txtLoaiBai);
                $count = $this->getCount($txtLoaiBai);
            } else {
                $dsBaiViet = $this->getSomeThreads();
                $count = $this->getCount();
            }
        } else if (!Input::has('txtLoaiBai') && Input::has('txtTimKiem')) {
            $txtTK = Input::get('txtTimKiem');
            $dsBaiViet = $this->getSomeThreads(null, $txtTK);
            $count = $this->getCount(null, $txtTK);
        } else if (Input::has('txtLoaiBai') && Input::has('txtTimKiem')) {
             $txtLoaiBai = Input::get('txtLoaiBai');
            $txtTK = Input::get('txtTimKiem');
            if ($txtLoaiBai != 'all') {
                 $dsBaiViet = $this->getSomeThreads($txtLoaiBai, $txtTK);
                 $count = $this->getCount($txtLoaiBai, $txtTK);
            }
            else{
                $dsBaiViet = $this->getSomeThreads(null, $txtTK);
                 $count = $this->getCount(null, $txtTK);
            }
        } else {
            $dsBaiViet = $this->getSomeThreads();
            $count = $this->getCount();
        }
        return View::make('quanly_quanlybaiviet.index')
                        ->with('dsBaiViet', $dsBaiViet)
                        ->with('count', $count)
                        ->with('dsThuTu', $dsThuTu)
                        ->with('loaiBai', $dsLoaiBai)
                        ->with('title', 'Danh sách bài viết');
    }

    // Hien thi trang them
    public function create() {
        $loaiBai = $this->getLoaiBai();
        return View::make('quanly_quanlybaiviet.create')
                        ->with('loaiBai', $loaiBai)
                        ->with('title', 'Thêm bài viết');
    }

    // Lưu vào csdl
    public function store() {
        $check = false;
        if (Input::get('txtHienThi') == 'true') {
            $check = true;
        }
        $data = array('id_loai_bai_viet' => Input::get('theLoai'),
            'tieu_de_bai_viet' => htmlentities(Input::get('txtTieuDe'), ENT_QUOTES, "UTF-8"),
            'tom_tat_bai_viet' => htmlentities(Input::get('txtTomTatND'), ENT_QUOTES, "UTF-8"),
            'noi_dung_bai_viet' => htmlentities(Input::get('txtNoiDung'), ENT_QUOTES, "UTF-8"),
            'id_nguoi_dang' => Auth::user()->id,
            'thoi_gian_dang' => date('Y-m-d H:i:s', time()),
            'thu_tu_bai_viet' => $this->getMaxThuTu() + 1,
            'tags' => $this->getStringIdTags($this->getArrayTags(Input::get('txtTags'))),
            'trang_thai_bai_viet' => $check);

        $valid = new BaiViet();
        $validation = $valid->validate($data);
        if ($validation->passes()) {
            $id = DB::table('bai_viet')
                    ->insertGetId($data);
            General::storeevents(QUAN_LY_THEM_BAI_VIET . " số id " . $id);
            return Redirect::back()
                            ->with('message', 'Thêm bài viết thành công!');
        } else {
            return Redirect::route('mthreads/addthreads')->withInput();
        }
    }

    // Hiển thị trang sửa
    public function edit() {
        $id = Input::get('txtIdBaiViet');
        $baiViet = DB::table('bai_viet')
                ->join('loai_bai_viet', function($join) {
                            $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                        })
                ->select('bai_viet.id', 'bai_viet.tieu_de_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'bai_viet.thoi_gian_dang', 'bai_viet.thoi_gian_sua', 'bai_viet.thu_tu_bai_viet', 'bai_viet.tags', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.id_nguoi_sua', 'bai_viet.id_nguoi_dang', 'bai_viet.trang_thai_bai_viet')
                ->where('bai_viet.id', $id)
                ->get();
        return View::make('quanly_quanlybaiviet.edit')
                        ->with('title', 'Sửa bài viết')
                        ->with('loaiBai', $this->getLoaiBai())
                        ->with('baiviet', $baiViet)
                        ->with('tags', $this->convertToStringTags($baiViet[0]->tags));
    }

    // Lưu kết quả sửa vào CSDL
    public function update($id) {
        $check = false;
        if (Input::get('txtHienThiEdit') == 'true') {
            $check = true;
        }
        $data = array('id_loai_bai_viet' => Input::get('theLoaiEdit'),
            'tieu_de_bai_viet' => htmlentities(Input::get('txtTieuDeEdit'), ENT_QUOTES, "UTF-8"),
            'tom_tat_bai_viet' => htmlentities(Input::get('txtTomTatEdit'), ENT_QUOTES, "UTF-8"),
            'noi_dung_bai_viet' => htmlentities(Input::get('txtNoiDungEdit'), ENT_QUOTES, "UTF-8"),
            'id_nguoi_sua' => Auth::user()->id,
            'thoi_gian_sua' => date('Y-m-d H:i:s', time()),
            'tags' => $this->getStringIdTags($this->getArrayTags(Input::get('txtTagsEdit'))),
            'trang_thai_bai_viet' => $check);

        $valid = new BaiViet();
        $validation = $valid->validate($data);
        if ($validation->passes()) {
            $result = DB::table('bai_viet')
                    ->where('id', $id)
                    ->update($data);
            General::storeevents(QUAN_LY_SUA_BAI_VIET . " id số " . $id);
            return Redirect::back()
                            ->with('message', 'Sửa bài viết thành công!');
        } else {
            return Redirect::route('mthreads/editthread')
                            ->withInput();
        }
    }

    // Lưu kết quả sửa hiển thị
    public function updateHienThi() {

        $masobv = Input::get('txtMaSoBaiViet');
        $tthienthi = Input::get('txtTrangThaiHienThi');
        if ($tthienthi == 0) {
            $tthienthi = 1;
        } else {
            $tthienthi = 0;
        }
        $result = DB::table('bai_viet')
                ->where('id', $masobv)
                ->update(array('trang_thai_bai_viet' => $tthienthi));
        if ($result) {
            $kq = "Success";
            General::storeevents(QUAN_LY_SUA_BAI_VIET . " id số " . $masobv . " trạng thái hiển thị =" . $tthienthi);
        } else {
            $kq = "Fail";
        }
        return Redirect::back()
                        ->with('kq', $kq);
    }

    // Xóa bài viết
    public function destroy() {
        $id = Input::get('txtIdThread');
        BaiViet::find($id)->delete();
        General::storeevents(QUAN_LY_XOA_BAI_VIET . " id số " . $id);
        return Redirect::back()
                        ->with('message', 'Xóa thành công!');
    }

    //Lay so thu tu cao nhat
    public function getMaxThuTu() {
        $max = BaiViet::max('thu_tu_bai_viet');
        return $max;
    }

    //chuyển đổi to String Id to String Tags
    public function convertToStringTags($idString) {
        $stringTags = null;
        if (trim($idString) != null || trim($idString) != '') {
            $arrayTagsId = explode(',', $idString);
            foreach ($arrayTagsId as $value) {
                $result = Tag::select('mo_ta_tags')
                        ->find($value);
                if (!is_null($result)) {
                    $stringTags .= $result->mo_ta_tags . ",";
                }
            }
            $stringTags = substr($stringTags, 0, strlen($stringTags) - 1);
        }
        return $stringTags;
    }

    //tách tags thanh mảng tags
    private function getArrayTags($tags) {
        // Tách chuỗi thành mảng
        $tags = preg_replace('/\s\s+/', ' ', trim($tags));
        $tags = preg_replace('/,,+/', ',', $this->strtolower_utf8($tags));
        if (substr($tags, strlen($tags) - 1, strlen($tags)) == ',') {
            $tags = substr($tags, 0, strlen($tags) - 1);
        }
        $arrayTags = explode(',', $tags);
        //Xóa trùng
        foreach ($arrayTags as $key => $value) {
            $arrayTags[$key] = trim($value);
        }
        $arrayTags = array_unique($arrayTags);
        return $arrayTags;
    }

    //CHUYỂN ĐỔI HOA TỪ UTF-8 SANG UTF-8 THƯỜNG
    private function strtolower_utf8($string) {
        $convert_to = array(
            'à', 'á', 'ạ', 'ả', 'ã', 'â', 'ầ', 'ấ', 'ậ', 'ẩ', 'ẫ', 'ă', 'ằ', 'ắ', 'ặ', 'ẳ', 'ẵ', 'è', 'é', 'ẹ', 'ẻ', 'ẽ', 'ê', 'ề', 'ế', 'ệ', 'ể', 'ễ',
            'ì', 'í', 'ị', 'ỉ', 'ĩ', 'ò', 'ó', 'ọ', 'ỏ', 'õ', 'ô', 'ồ', 'ố', 'ộ', 'ổ', 'ỗ', 'ơ', 'ờ', 'ớ', 'ợ', 'ở', 'ỡ', 'ù', 'ú', 'ụ', 'ủ', 'ũ', 'ư',
            'ừ', 'ứ', 'ự', 'ử', 'ữ', 'ỳ', 'ý', 'ỵ', 'ỷ', 'ỹ', 'đ');
        $convert_from = array(
            'À', 'Á', 'Ạ', 'Ả', 'Ã', 'Â', 'Ầ', 'Ấ', 'Ậ', 'Ẩ', 'Ẫ', 'Ă', 'Ằ', 'Ắ', 'Ặ', 'Ẳ', 'Ẵ', 'È', 'É', 'Ẹ', 'Ẻ', 'Ẽ', 'Ê', 'Ề', 'Ế', 'Ệ', 'Ể', 'Ễ',
            'Ì', 'Í', 'Ị', 'Ỉ', 'Ĩ', 'Ò', 'Ó', 'Ọ', 'Ỏ', 'Õ', 'Ô', 'Ồ', 'Ố', 'Ộ', 'Ổ', 'Ỗ', 'Ơ', 'Ờ', 'Ớ', 'Ợ', 'Ở', 'Ỡ', 'Ù', 'Ú', 'Ụ', 'Ủ', 'Ũ', 'Ư',
            'Ừ', 'Ứ', 'Ự', 'Ử', 'Ữ', 'Ỳ', 'Ý', 'Ỵ', 'Ỷ', 'Ỹ', 'Đ');
        $string = strtolower($string);
        return str_replace($convert_from, $convert_to, $string);
    }

    //lấy chuỗi id tags
    private function getStringIdTags($arrayTags) {
        $stringId = null;
        foreach ($arrayTags as $key => $value) {
            $ids = DB::table('tags')
                    ->select('id')
                    ->where('mo_ta_tags', $value)
                    ->get();
            if ($ids == null) {
                $idAdd = DB::table('tags')
                        ->insertGetId(array('mo_ta_tags' => $value));
                $stringId .= $idAdd . ",";
            } else {
                $stringId .= $ids[0]->id . ",";
            }
        }
        $stringId = substr($stringId, 0, strlen($stringId) - 1);
        return $stringId;
    }

    //lấy loại bài viết
    public function getLoaiBai() {
        $dsLoaiBai = LoaiBaiViet::select('id', 'mo_ta_loai_bai_viet')
                ->orderBy('mo_ta_loai_bai_viet')
                ->get();
        return $dsLoaiBai;
    }

    // lấy số lượng bài viết
    private function getCount($txtLoaiBai = null, $txtTK = null) {
        $count = 0;
        if ($txtLoaiBai != null && $txtTK == null) {
            $count = BaiViet::where('id_loai_bai_viet', $txtLoaiBai)
                    ->count();
        } else if ($txtLoaiBai == null && $txtTK != null) {
            $count = count($this->getSomeThreads(null,$txtTK)); //edit
        } else if ($txtLoaiBai != null && $txtTK != null) {
            $count = count($this->getSomeThreads($txtLoaiBai,$txtTK)); //edit
        } else {
            $count = BaiViet::count();
        }
        return $count;
    }

    // lấy danh sách tất cả bài viết
    private function getAllThreads() {
        $dsBaiViet = DB::table('bai_viet')
                ->join('loai_bai_viet', function($join) {
                            $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                        })
                ->select('bai_viet.id', 'bai_viet.tieu_de_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'bai_viet.thu_tu_bai_viet', 'bai_viet.tags', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.trang_thai_bai_viet')
                ->orderBy('bai_viet.thu_tu_bai_viet', 'desc')
                ->paginate(QUAN_LY_SO_BAI_VIET_TREN_TRANG);
        return $dsBaiViet;
    }

    //lấy danh sách bài viết theo yêu cầu
    private function getSomeThreads($txtLoaiBai = null, $txtTK = null) {
        $dsBaiViet = null;
        if ($txtLoaiBai != null && $txtTK == null) {
            $dsBaiViet = DB::table('bai_viet')
                    ->join('loai_bai_viet', function($join) {
                                $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                            })
                    ->select('bai_viet.id', 'bai_viet.tieu_de_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'bai_viet.thu_tu_bai_viet', 'bai_viet.tags', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.trang_thai_bai_viet')
                    ->where('bai_viet.id_loai_bai_viet', $txtLoaiBai)
                    ->orderBy('bai_viet.thu_tu_bai_viet', 'desc')
                    ->paginate(QUAN_LY_SO_BAI_VIET_TREN_TRANG);
        } else if ($txtLoaiBai == null && $txtTK != null) {
            $array_id_thread = $this->getIdThreads($this->stringToIdTags($txtTK));
            if(count($array_id_thread)!=0){
            $dsBaiViet = DB::table('bai_viet')
                    ->join('loai_bai_viet', function($join) {
                                $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                            })
                    ->select('bai_viet.id', 'bai_viet.tieu_de_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'bai_viet.thu_tu_bai_viet', 'bai_viet.tags', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.trang_thai_bai_viet')
                    ->whereIn('bai_viet.id', $array_id_thread)
                    ->paginate(QUAN_LY_SO_BAI_VIET_TREN_TRANG);
            }
        } else if ($txtLoaiBai != null && $txtTK != null) {
            $array_id_thread = $this->getIdThreads($this->stringToIdTags($txtTK));
            if(count($array_id_thread)!=0){
            $dsBaiViet = DB::table('bai_viet')
                    ->join('loai_bai_viet', function($join) {
                                $join->on('bai_viet.id_loai_bai_viet', '=', 'loai_bai_viet.id');
                            })
                    ->select('bai_viet.id', 'bai_viet.tieu_de_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'bai_viet.thu_tu_bai_viet', 'bai_viet.tags', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.trang_thai_bai_viet')
                    ->where('bai_viet.id_loai_bai_viet', $txtLoaiBai,'and')
                    ->whereIn('bai_viet.id', $array_id_thread)
                    ->paginate(QUAN_LY_SO_BAI_VIET_TREN_TRANG);
            }
        } else {
            $dsBaiViet = $this->getAllThreads();
        }
        return $dsBaiViet;
    }

    //lấy tất cả thứ tự
    private function getAllThuTu($txtLoaiBai = null, $txtTK = null) {
        $thutu = null;
        if ($txtLoaiBai != null && $txtTK == null) {
            $thutu = BaiViet::select('id', 'thu_tu_bai_viet')
                    ->where('id_loai_bai_viet', $txtLoaiBai)
                    ->orderBy('thu_tu_bai_viet', 'desc')
                    ->get();
        } else if($txtLoaiBai == null && $txtTK == null){
            $thutu = BaiViet::select('thu_tu_bai_viet', 'id')
                    ->orderBy('thu_tu_bai_viet', 'desc')
                    ->get();
        }
        return $thutu;
    }

    //sắp xếp thứ tự bài viết
    public function sapXepThuTu() {
        $idSX = Input::get('txtIdThread');
        $ttSX = Input::get('txtThuTuThread');
        $idBiSX = Input::get('txtIdThreadKe');
        $ttBiSX = Input::get('txtThuTuThreadKe');

        DB::table('bai_viet')
                ->where('id', $idSX)
                ->update(array('thu_tu_bai_viet' => $ttBiSX));
        DB::table('bai_viet')
                ->where('id', $idBiSX)
                ->update(array('thu_tu_bai_viet' => $ttSX));
        return Redirect::back();
    }
    
    //chuyển đổi chuỗi tìm kiếm thành tags có trong CSDL
    public function stringToIdTags($string){
        $string = preg_replace('/\s\s+/', ' ', $this->strtolower_utf8(trim($string)));
        $array_string = explode(' ', $string);
        $array_tags_id = array();
        $index = 0;
        foreach($array_string as $key => $value){
          $array_id = Tag::select('id')
                                ->distinct()
                                ->where("mo_ta_tags","like",$value."%")
                                ->orWhere("mo_ta_tags","like","%".$value)
                                ->orWhere("mo_ta_tags","like","%".$value."%")
                                ->get();
          if(count($array_id) != 0)
          {
              foreach($array_id as $id)
              {
                  $array_tags_id[$index++] = $id->id;
              }
          }
        }
        
        return array_unique($array_tags_id);
    }
    
    //lấy id các bài viết có các tags tương ứng
    public function getIdThreads($array_id_tags){
        $all_id_threads = BaiViet::select('id','tags')
                            ->where('tags','!=','')
                            ->get();
        $result_id = array();
        $index = 0;
        foreach($all_id_threads as $thread)
        {
            $array_id_tags_thread = explode(',', $thread->tags);
            foreach($array_id_tags_thread as $key => $value)
            {
               if(array_search($value, $array_id_tags))
               {
                   $result_id[$index++] = $thread->id;
               }
            }
        }
        return array_unique($result_id);
    }
}
