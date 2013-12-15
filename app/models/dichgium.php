<?php

// Model:'DichGium' - Database Table: 'dich_gia'

Class DichGium extends Eloquent
{

    protected $table='dich_gia';

    public function dichgiatailieu()
    {
        return $this->belongsToMany('DichGiaTaiLieu');
    }
}