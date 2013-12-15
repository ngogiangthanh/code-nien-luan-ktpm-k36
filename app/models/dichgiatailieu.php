<?php

// Model:'DichGiaTaiLieu' - Database Table: 'dich_gia_tai_lieu'

Class DichGiaTaiLieu extends Eloquent
{

    protected $table='dich_gia_tai_lieu';

    public function tailieu()
    {
        return $this->belongsTo('TaiLieu');
    }

    public function dichgia()
    {
        return $this->belongsTo('DichGia');
    }

}