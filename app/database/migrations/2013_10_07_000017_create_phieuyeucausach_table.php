<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhieuyeucausachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('phieu_yeu_cau_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ma_so_phieu', 20)->unique();
            $table->integer('id_nguoi_gui')->unsigned();
            $table->datetime('thoi_gian_gui');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('phieu_yeu_cau_sach');
    }
}