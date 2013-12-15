<?php

class NguoiDungBaiViet extends BaseController {

    //
    public function index($type = null, $alias = null) {
        $threads = null;
        if ($type == null) {
            $threads = $this->getAllThreads();
        } else {
            if ($alias == null) {

                $threads = $this->getSomeThreads($type);
            } else {
                $threads = $this->getSomeThreads($type, $alias);
            }
        }
        return View::make('nguoidung_baiviet.index')
                        ->with('threads', $threads)
                        ->with('title', 'Các bài viết');
    }

    //
    private function getAllThreads() {
        $threads = BaiViet::join('nguoi_dung', function($join) {
                            $join->on('nguoi_dung.id', '=', 'bai_viet.id_nguoi_dang');
                        })
                ->join('loai_bai_viet', function($join) {
                            $join->on('loai_bai_viet.id', '=', 'bai_viet.id_loai_bai_viet');
                        })
                ->select('nguoi_dung.ho_ten', 'bai_viet.id', 'bai_viet.thoi_gian_dang', 'bai_viet.thoi_gian_sua', 'bai_viet.tieu_de_bai_viet', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.tom_tat_bai_viet', 'loai_bai_viet.nhom_loai', 'loai_bai_viet.alias')
                ->where("bai_viet.trang_thai_bai_viet", 1)
                ->orderBy('bai_viet.thu_tu_bai_viet', 'desc')
                ->paginate(SO_BAI_VIET_XEM_TREN_TRANG);
        return $threads;
    }

    //
    private function getSomeThreads($type, $alias = null) {
        $threads = null;
        if (is_null($alias)) {
            $threads = BaiViet::join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'bai_viet.id_nguoi_dang');
                            })
                    ->join('loai_bai_viet', function($join) {
                                $join->on('loai_bai_viet.id', '=', 'bai_viet.id_loai_bai_viet');
                            })
                    ->select('nguoi_dung.ho_ten', 'bai_viet.id', 'bai_viet.thoi_gian_dang', 'bai_viet.thoi_gian_sua', 'bai_viet.tieu_de_bai_viet', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.tom_tat_bai_viet', 'loai_bai_viet.nhom_loai', 'loai_bai_viet.alias')
                    ->where("bai_viet.trang_thai_bai_viet", 1, 'and')
                    ->where('loai_bai_viet.nhom_loai', $type)
                    ->orderBy('bai_viet.thu_tu_bai_viet', 'desc')
                    ->paginate(SO_BAI_VIET_XEM_TREN_TRANG);
        } else {
            $threads = BaiViet::join('nguoi_dung', function($join) {
                                $join->on('nguoi_dung.id', '=', 'bai_viet.id_nguoi_dang');
                            })
                    ->join('loai_bai_viet', function($join) {
                                $join->on('loai_bai_viet.id', '=', 'bai_viet.id_loai_bai_viet');
                            })
                    ->select('nguoi_dung.ho_ten', 'bai_viet.id', 'bai_viet.thoi_gian_dang', 'bai_viet.thoi_gian_sua', 'bai_viet.tieu_de_bai_viet', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.tom_tat_bai_viet', 'loai_bai_viet.nhom_loai', 'loai_bai_viet.nhom_loai', 'loai_bai_viet.alias')
                    ->where("bai_viet.trang_thai_bai_viet", 1, 'and')
                    ->where('loai_bai_viet.nhom_loai', $type, 'and')
                    ->where('loai_bai_viet.alias', $alias)
                    ->orderBy('bai_viet.thu_tu_bai_viet', 'desc')
                    ->paginate(SO_BAI_VIET_XEM_TREN_TRANG);
        }
        return $threads;
    }

    //
    public function show($type, $alias, $id) {
        $chitiet = BaiViet::join('nguoi_dung', function($join) {
                            $join->on('nguoi_dung.id', '=', 'bai_viet.id_nguoi_dang');
                        })
                ->join('loai_bai_viet', function($join) {
                            $join->on('loai_bai_viet.id', '=', 'bai_viet.id_loai_bai_viet');
                        })
                ->select('nguoi_dung.ho_ten', 'bai_viet.id', 'bai_viet.thoi_gian_dang', 'bai_viet.thoi_gian_sua', 'bai_viet.tieu_de_bai_viet', 'loai_bai_viet.mo_ta_loai_bai_viet', 'bai_viet.tom_tat_bai_viet', 'bai_viet.noi_dung_bai_viet', 'loai_bai_viet.alias','bai_viet.tags')
                ->where("bai_viet.trang_thai_bai_viet", 1)
                ->where('bai_viet.id', $id, 'and')
                ->where('loai_bai_viet.nhom_loai', $type, 'and')
                ->where('loai_bai_viet.alias', $alias)
                ->orderBy('bai_viet.thu_tu_bai_viet', 'asc')
                ->get();
          $tags = new QuanLyQuanLyBaiViet();
          $tags = $tags->convertToStringTags($chitiet[0]->tags);
          
      return View::make('nguoidung_baiviet.view')
                        ->with('chitiet', $chitiet)
                        ->with('title', 'Chi tiết bài viết')
                        ->with('tags',$tags);
    }

}
