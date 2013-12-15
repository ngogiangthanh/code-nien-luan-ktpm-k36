<?php

// Model:'ChiTietSachYeuCau' - Database Table: 'chi_tiet_sach_yeu_cau'

Class ChiTietSachYeuCau extends Eloquent
{

    protected $table='chi_tiet_sach_yeu_cau';

    public function phieuyeucausach()
    {
        return $this->belongsTo('PhieuYeuCauSach');
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