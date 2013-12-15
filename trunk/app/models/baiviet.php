<?php

// Model:'BaiViet' - Database Table: 'bai_viet'

Class BaiViet extends Eloquent
{

    protected $table='bai_viet';
    public $rules = array(
                'tieu_de_bai_viet' => 'required',
                'tom_tat_bai_viet' => 'required|min:12',
                'noi_dung_bai_viet' =>'required|min:12'
	);

    public function validate($data){
            return Validator::make($data, $this->rules);
        }
    public function loaibaiviet()
    {
        return $this->belongsTo('LoaiBaiViet');
    }

    public function nguoidungRelatedByIdNguoiDang()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiDang');
    }

    public function nguoidungRelatedByIdNguoiSua()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiSua');
    }

}