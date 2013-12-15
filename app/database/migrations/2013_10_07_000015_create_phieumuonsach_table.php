<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhieumuonsachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('phieu_muon_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ma_so_phieu', 20)->unique();
            $table->integer('id_nguoi_muon')->unsigned();
            $table->datetime('thoi_gian_lap');
            $table->text('ghi_chu_phieu')->nullable()->default(NULL);
            $table->integer('id_nguoi_xu_ly')->nullable()->default(NULL)->unsigned();
            $table->datetime('thoi_gian_xu_ly')->nullable()->default(NULL);
            $table->integer('trang_thai_phieu')->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('phieu_muon_sach');
    }
}