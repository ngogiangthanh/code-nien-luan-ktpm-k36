<?php

use Illuminate\Database\Migrations\Migration;

class CreateChitietsachyeucauTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('chi_tiet_sach_yeu_cau', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_phieu_yeu_cau')->unsigned();
            $table->integer('id_dau_sach')->unsigned();
            $table->text('ghi_chu_yeu_cau_sach')->nullable()->default(NULL);
            $table->integer('id_nguoi_xu_ly')->nullable()->default(NULL)->unsigned();
            $table->datetime('thoi_gian_xu_ly')->nullable()->default(NULL);
            $table->integer('trang_thai_sach_yc')->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('chi_tiet_sach_yeu_cau');
    }
}