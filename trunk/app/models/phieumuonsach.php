<?php

// Model:'PhieuMuonSach' - Database Table: 'phieu_muon_sach'

Class PhieuMuonSach extends Eloquent
{

    protected $table='phieu_muon_sach';

    public static function countSachDaMuon($idnm)
    {
         $result = DB::select(DB::raw("CALL count_so_sach_muon(" . $idnm . ");"));
         return $result[0]->sl_da_muon;
    }
    public static function chitietphieumuonsach()
    {
        return $this->hasMany('ChiTietPhieuMuonSach');
    }

    public function nguoidungRelatedByIdNguoiMuon()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiMuon');
    }

    public function nguoidungRelatedByIdNguoiXuLy()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiXuLy');
    }

}