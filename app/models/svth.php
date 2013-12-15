<?php

// Model:'Svth' - Database Table: 'svth'

Class Svth extends Eloquent
{

    protected $table='svth';

    public function luanvan()
    {
        return $this->belongsTo('LuanVan');
    }

}