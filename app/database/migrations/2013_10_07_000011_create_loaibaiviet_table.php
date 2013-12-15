<?php

use Illuminate\Database\Migrations\Migration;

class CreateLoaibaivietTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('loai_bai_viet', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('mo_ta_loai_bai_viet', 50)->unique();
            $table->string('nhom_loai', 10);
            $table->string('alias', 10);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('loai_bai_viet');
    }
}