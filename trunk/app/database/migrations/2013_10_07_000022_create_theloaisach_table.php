<?php

use Illuminate\Database\Migrations\Migration;

class CreateTheloaisachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('the_loai_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('mo_ta_the_loai', 256);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('the_loai_sach');
    }
}