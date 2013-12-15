<?php

use Illuminate\Database\Migrations\Migration;

class CreateBannedtkTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('banned_tk', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_nguoi_bi_banned')->unsigned();
            $table->integer('so_ngay_banned')->unsigned();
            $table->date('ngay_bat_dau');
            $table->string('ly_do_banned', 256);
            $table->integer('id_nguoi_banned')->unsigned();
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
        Schema::drop('banned_tk');
    }
}