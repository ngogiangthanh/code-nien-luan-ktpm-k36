<?php

use Illuminate\Database\Migrations\Migration;

class CreateNhaxuatbanTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('nha_xuat_ban', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ten_nxb', 256);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('nha_xuat_ban');
    }
}