<?php

// Model:'ChiTietPhieuMuonSach' - Database Table: 'chi_tiet_phieu_muon_sach'

Class ChiTietPhieuMuonSach extends Eloquent
{

    protected $table='chi_tiet_phieu_muon_sach';

    public static function kiemTraTrangThai($idctpm)
    {
        $result = DB::select(DB::raw("CALL kiem_tra_trang_thai_muon(".$idctpm.");"));
        if(count($result) == 0)
        {
            return false;
        }
        else{
            return true;
        }
    }
    
    public function dangkigiahansach()
    {
        return $this->hasMany('DangKiGiaHanSach');
    }

    public function phieumuonsach()
    {
        return $this->belongsTo('PhieuMuonSach');
    }

    public function quyensach()
    {
        return $this->belongsTo('QuyenSach');
    }

    public function nguoidung()
    {
        return $this->belongsTo('NguoiDung');
    }

}