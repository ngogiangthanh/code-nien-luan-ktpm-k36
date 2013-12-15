<?php

// Model:'LoaiBaiViet' - Database Table: 'loai_bai_viet'

Class LoaiBaiViet extends Eloquent
{

    protected $table='loai_bai_viet';

    public function baiviet()
    {
        return $this->hasMany('BaiViet');
    }

}