<?php

use Illuminate\Database\Migrations\Migration;

class CreateLuanvanTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('luan_van', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_dau_sach')->unsigned();
            $table->string('ma_luan_van', 20);
            $table->string('ma_chuyen_de', 20)->nullable()->default(NULL);
            $table->string('ma_ca_biet', 20)->nullable()->default(NULL);
            $table->integer('nam_thuc_hien')->nullable()->default(NULL);
            $table->integer('lv_cao_hoc');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('luan_van');
    }
}