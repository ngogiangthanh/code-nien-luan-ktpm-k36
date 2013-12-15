<?php

// Model:'ChiTietGvhd' - Database Table: 'chi_tiet_gvhd'

Class ChiTietGvhd extends Eloquent
{

    protected $table='chi_tiet_gvhd';

    public function gvhd()
    {
        return $this->belongsTo('Gvhd');
    }

    public function luanvan()
    {
        return $this->belongsTo('LuanVan');
    }

}