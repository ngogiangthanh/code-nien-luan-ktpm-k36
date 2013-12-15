<?php

// Model:'Gvhd' - Database Table: 'gvhd'

Class Gvhd extends Eloquent
{

    protected $table='gvhd';

    public function chitietgvhd()
    {
        return $this->belongsToMany('ChiTietGvhd');
    }
}