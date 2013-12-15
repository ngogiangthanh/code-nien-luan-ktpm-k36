<?php

use Illuminate\Database\Migrations\Migration;

class CreateChitietgvhdTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('chi_tiet_gvhd', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_gvhd')->unsigned();
            $table->integer('id_luan_van')->unsigned();
            $table->integer('so_thu_tu_gvhd')->nullable()->default(NULL)->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('chi_tiet_gvhd');
    }
}