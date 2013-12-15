<?php

// Model:'TaiLieu' - Database Table: 'tai_lieu'

Class TaiLieu extends Eloquent
{

    protected $table='tai_lieu';

    public function dichgiatailieu()
    {
        return $this->belongsToMany('DichGiaTaiLieu');
    }
    public function dausach()
    {
        return $this->belongsTo('DauSach');
    }

    public function nhaxuatban()
    {
        return $this->belongsTo('NhaXuatBan');
    }

    public function theloaisach()
    {
        return $this->belongsTo('TheLoaiSach');
    }

}