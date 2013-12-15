<?php

// Model:'PhieuYeuCauSach' - Database Table: 'phieu_yeu_cau_sach'

Class PhieuYeuCauSach extends Eloquent
{

    protected $table='phieu_yeu_cau_sach';

    public function chitietsachyeucau()
    {
        return $this->hasMany('ChiTietSachYeuCau');
    }

    public function nguoidung()
    {
        return $this->belongsTo('NguoiDung');
    }

}