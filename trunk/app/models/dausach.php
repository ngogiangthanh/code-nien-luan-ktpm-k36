<?php

// Model:'DauSach' - Database Table: 'dau_sach'

Class DauSach extends Eloquent
{

    protected $table='dau_sach';
    
    public static function checkAvailable($idds){
         $result = DB::select(DB::raw("CALL kiem_tra_dau_sach_nm(" . $idds . ");"));
            if ($result[0]->dem == 0) {
                return true;
            } else {
                return false;
            }
    }
    
    public function chitietsachyeucau()
    {
        return $this->hasMany('ChiTietSachYeuCau');
    }

    public function luanvan()
    {
        return $this->hasMany('LuanVan');
    }

    public function quyensach()
    {
        return $this->hasMany('QuyenSach');
    }

    public function tailieu()
    {
        return $this->hasMany('TaiLieu');
    }

}