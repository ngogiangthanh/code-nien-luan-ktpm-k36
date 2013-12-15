<?php

use Illuminate\Database\Migrations\Migration;

class CreateDangkigiahansachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('dang_ki_gia_han_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_sach_muon')->unsigned();
            $table->integer('so_ngay_gia_han')->unsigned();
            $table->datetime('thoi_gian_dk_gia_han');
            $table->text('ghi_chu_gia_han')->nullable()->default(NULL);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('dang_ki_gia_han_sach');
    }
}