<?php

use Illuminate\Database\Migrations\Migration;

class CreateSvthTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('svth', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_luan_van')->unsigned();
            $table->string('mssv', 10)->nullable()->default(NULL);
            $table->string('ho_ten_sv', 256);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('svth');
    }
}