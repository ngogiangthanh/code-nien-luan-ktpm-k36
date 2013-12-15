<?php

use Illuminate\Database\Migrations\Migration;

class CreateTailieuTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('tai_lieu', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_dau_sach')->unsigned();
            $table->integer('id_nxb')->nullable()->default(NULL)->unsigned();
            $table->string('ten_cac_tac_gia', 1024)->nullable()->default(NULL);
            $table->integer('id_the_loai_sach')->nullable()->default(NULL)->unsigned();
            $table->string('nam_xuat_ban', 10)->nullable()->default(NULL);
            $table->string('lan_xuat_ban', 10)->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('tai_lieu');
    }
}