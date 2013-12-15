<?php

class QuanLyQuanLyHeThong extends BaseController {

    public function indexTV() {
        $hoatdongnguoidung = LichSuHoatDong::join('nguoi_dung', function($join) {
                            $join->on('nguoi_dung.id', '=', 'lich_su_hoat_dong.id_nguoi_dung');
                        })
                ->select('nguoi_dung.ma_so_the', 'lich_su_hoat_dong.dia_chi_ip', 'lich_su_hoat_dong.mo_ta_tac_vu', 'lich_su_hoat_dong.thoi_gian_tac_vu')
                ->orderBy('lich_su_hoat_dong.thoi_gian_tac_vu', 'desc')
                ->paginate(QUAN_LY_SO_HOAT_DONG_TREN_TRANG);
        return View::make('quanly_hethong.index_tacvu')
                        ->with('hoatdongnguoidung', $hoatdongnguoidung)
                        ->with('title', 'Các tác vụ hệ thống');
        
    }

    public function indexBK() {
        $back_up = null;
        $restore = null;
        if(Input::has('btn_ex'))
            {
                $back_up = $this->backup();
            }
        if(Input::has('btn_im'))
        {
            $restore = $this->restore();
        }
        return View::make('quanly_hethong.index_backup')
                        ->with('title', 'Backup hệ thống')->with('backup', $back_up)->with('restore', $restore);
    }
    public function destroy($id) {

    }
    public function backup(){
        return "vừa nhấn submit";
    }
    public function restore(){
        return "vừa nhấn restore";
    }
    

}
