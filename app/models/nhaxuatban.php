<?php

// Model:'NhaXuatBan' - Database Table: 'nha_xuat_ban'

Class NhaXuatBan extends Eloquent
{

    protected $table='nha_xuat_ban';

    public function tailieu()
    {
        return $this->hasMany('TaiLieu');
    }

}