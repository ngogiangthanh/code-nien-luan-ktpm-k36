<?php

// Model:'LuanVan' - Database Table: 'luan_van'

Class LuanVan extends Eloquent
{

    protected $table='luan_van';
    
    public static function getGVHD($idlv){
         $result = DB::select(DB::raw("CALL get_gvhd(" . $idlv . ");"));
         return $result;
    }

    public static function getSVTH($idlv){
         $result = DB::select(DB::raw("CALL get_svth(" . $idlv . ");"));
         return $result;
    }
    public function chitietgvhd()
    {
        return $this->belongsToMany('ChiTietGvhd');
    }
    public function svth()
    {
        return $this->hasMany('Svth');
    }

    public function dausach()
    {
        return $this->belongsTo('DauSach');
    }

}