<?php

// Model:'BannedTk' - Database Table: 'banned_tk'

Class BannedTk extends Eloquent
{

    protected $table='banned_tk';

    public function nguoidungRelatedByIdNguoiBiBanned()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiBiBanned');
    }

    public function nguoidungRelatedByIdNguoiBanned()
    {
        return $this->belongsTo('NguoiDungRelatedByIdNguoiBanned');
    }

}