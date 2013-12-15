<?php

// Model:'DangKiGiaHanSach' - Database Table: 'dang_ki_gia_han_sach'

Class DangKiGiaHanSach extends Eloquent
{

    protected $table='dang_ki_gia_han_sach';

    public function chitietphieumuonsach()
    {
        return $this->belongsTo('ChiTietPhieuMuonSach');
    }
    
    public static function kiemTraTrangThai($idctpm)
    {
        $result = DB::select(DB::raw("CALL kiem_tra_so_lan_gia_han(".$idctpm.");"));
        if($result[0]->dem+1 > SO_LAN_GIA_HAN_TOI_DA)
        {
            return false;
        }
        else{
            return true;
        }
    }

}