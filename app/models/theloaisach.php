<?php

// Model:'TheLoaiSach' - Database Table: 'the_loai_sach'

Class TheLoaiSach extends Eloquent
{

    protected $table='the_loai_sach';

    public function tailieu()
    {
        return $this->hasMany('TaiLieu');
    }

}