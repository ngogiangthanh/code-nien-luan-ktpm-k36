<?php

use Illuminate\Database\Migrations\Migration;

class CreateLichsuhoatdongTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('lich_su_hoat_dong', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_nguoi_dung')->unsigned();
            $table->integer('dia_chi_ip')->unsigned();
            $table->string('mo_ta_tac_vu', 256);
            $table->datetime('thoi_gian_tac_vu');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('lich_su_hoat_dong');
    }
}