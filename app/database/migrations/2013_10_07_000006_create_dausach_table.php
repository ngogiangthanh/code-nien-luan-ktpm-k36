<?php

use Illuminate\Database\Migrations\Migration;

class CreateDausachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('dau_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ten_dau_sach', 1024);
            $table->text('gioi_thieu_sach')->nullable()->default(NULL);
            $table->string('ngon_ngu_sach', 50);
            $table->string('link_hinh_anh', 256)->nullable()->default(NULL);
            $table->text('ghi_chu_dau_sach')->nullable()->default(NULL);
            $table->string('tags', 256)->nullable()->default(NULL);
            $table->integer('trang_thai_dau_sach');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('dau_sach');
    }
}