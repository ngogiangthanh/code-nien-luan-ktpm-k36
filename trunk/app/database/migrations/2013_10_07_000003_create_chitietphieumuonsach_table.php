<?php

use Illuminate\Database\Migrations\Migration;

class CreateChitietphieumuonsachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('chi_tiet_phieu_muon_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_phieu_muon')->unsigned();
            $table->integer('id_quyen_sach')->unsigned();
            $table->date('thoi_gian_muon');
            $table->date('thoi_gian_hen_tra');
            $table->text('ghi_chu_sach_muon')->nullable()->default(NULL);
            $table->integer('id_nguoi_cap_nhat')->nullable()->default(NULL)->unsigned();
            $table->datetime('tg_cap_nhat_trang_thai')->nullable()->default(NULL);
            $table->integer('trang_thai_sach_muon')->nullable()->default(NULL)->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('chi_tiet_phieu_muon_sach');
    }
}