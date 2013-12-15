<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

// Model:'NguoiDung' - Database Table: 'nguoi_dung'

Class NguoiDung extends Eloquent implements UserInterface, RemindableInterface {

    public $table = 'nguoi_dung';
    protected $hidden = array('password');
    public static $rules = array(
        'ma_so_the' => 'required|min:3',
        'password' => 'required|min:3'
    );

    public static function validate($data) {
        return Validator::make($data, static::$rules);
    }

    public static function validateBanner($msnd) {
        $result = DB::select(DB::raw("CALL kiem_tra_login(" . $msnd . ");"));
        if ($result[0]->dem == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getReminderEmail() {
        return $this->email;
    }

    public function baivietRelatedByIdNguoiDang() {
        return $this->hasMany('BaiVietRelatedByIdNguoiDang');
    }

    public function baivietRelatedByIdNguoiSua() {
        return $this->hasMany('BaiVietRelatedByIdNguoiSua');
    }

    public function bannedtkRelatedByIdNguoiBanned() {
        return $this->hasMany('BannedTkRelatedByIdNguoiBanned');
    }

    public function bannedtkRelatedByIdNguoiBiBanned() {
        return $this->hasMany('BannedTkRelatedByIdNguoiBiBanned');
    }

    public function chitietphieumuonsach() {
        return $this->hasMany('ChiTietPhieuMuonSach');
    }

    public function chitietsachyeucau() {
        return $this->hasMany('ChiTietSachYeuCau');
    }

    public function lichsuhoatdong() {
        return $this->hasMany('LichSuHoatDong');
    }

    public function phieumuonsachRelatedByIdNguoiMuon() {
        return $this->hasMany('PhieuMuonSachRelatedByIdNguoiMuon');
    }

    public function phieumuonsachRelatedByIdNguoiXuLy() {
        return $this->hasMany('PhieuMuonSachRelatedByIdNguoiXuLy');
    }

    public function phieunhapsach() {
        return $this->hasMany('PhieuNhapSach');
    }

    public function phieuyeucausach() {
        return $this->hasMany('PhieuYeuCauSach');
    }

    public function quyensach() {
        return $this->hasMany('QuyenSach');
    }

}