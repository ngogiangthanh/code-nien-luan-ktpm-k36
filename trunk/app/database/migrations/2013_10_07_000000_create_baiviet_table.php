<?php

use Illuminate\Database\Migrations\Migration;

class CreateBaivietTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bai_viet', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_loai_bai_viet')->unsigned();
            $table->string('tieu_de_bai_viet', 256);
            $table->text('tom_tat_bai_viet');
            $table->text('noi_dung_bai_viet');
            $table->integer('id_nguoi_dang')->unsigned();
            $table->datetime('thoi_gian_dang');
            $table->integer('id_nguoi_sua')->nullable()->default(NULL)->unsigned();
            $table->datetime('thoi_gian_sua')->nullable()->default(NULL);
            $table->integer('thu_tu_bai_viet')->unsigned();
            $table->string('tags', 256)->nullable()->default(NULL);
            $table->integer('trang_thai_bai_viet');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('bai_viet');
    }
}