<?php

// Model:'QuyenSach' - Database Table: 'quyen_sach'

Class QuyenSach extends Eloquent
{

    protected $table='quyen_sach';

    public function chitietphieumuonsach()
    {
        return $this->hasMany('ChiTietPhieuMuonSach');
    }

    public function phieunhapsach()
    {
        return $this->belongsTo('PhieuNhapSach');
    }

    public function dausach()
    {
        return $this->belongsTo('DauSach');
    }

    public function nguoidung()
    {
        return $this->belongsTo('NguoiDung');
    }

}