<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapsachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('phieu_nhap_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ma_so_phieu_nhap', 20)->unique();
            $table->integer('id_nguoi_lap')->unsigned();
            $table->string('don_vi_cung_cap', 256);
            $table->datetime('thoi_gian_lap');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('phieu_nhap_sach');
    }
}