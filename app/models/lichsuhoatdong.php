<?php

// Model:'LichSuHoatDong' - Database Table: 'lich_su_hoat_dong'

Class LichSuHoatDong extends Eloquent
{

    protected $table='lich_su_hoat_dong';

    public function nguoidung()
    {
        return $this->belongsTo('NguoiDung');
    }

}