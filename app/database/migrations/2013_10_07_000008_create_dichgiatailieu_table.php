<?php

use Illuminate\Database\Migrations\Migration;

class CreateDichgiatailieuTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('dich_gia_tai_lieu', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_dau_sach')->unsigned();
            $table->integer('id_dich_gia')->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('dich_gia_tai_lieu');
    }
}