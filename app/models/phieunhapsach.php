<?php

// Model:'PhieuNhapSach' - Database Table: 'phieu_nhap_sach'

Class PhieuNhapSach extends Eloquent
{

    protected $table='phieu_nhap_sach';

    public function quyensach()
    {
        return $this->hasMany('QuyenSach');
    }

    public function nguoidung()
    {
        return $this->belongsTo('NguoiDung');
    }

}