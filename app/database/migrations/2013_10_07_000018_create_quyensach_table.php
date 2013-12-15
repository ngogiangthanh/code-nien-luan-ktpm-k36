<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuyensachTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('quyen_sach', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_phieu_nhap')->nullable()->default(NULL)->unsigned();
            $table->integer('id_dau_sach')->unsigned();
            $table->string('ma_so_quyen_sach', 20)->nullable()->default(NULL);
            $table->string('ma_bar_code', 50)->nullable()->default(NULL);
            $table->string('ma_dewey', 10)->nullable()->default(NULL);
            $table->string('ma_cutter', 10)->nullable()->default(NULL);
            $table->text('ghi_chu_quyen_sach')->nullable()->default(NULL);
            $table->integer('id_nguoi_cap_nhat')->nullable()->default(NULL)->unsigned();
            $table->datetime('tg_cap_nhat_trang_thai')->nullable()->default(NULL);
            $table->integer('trang_thai_sach')->unsigned();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('quyen_sach');
    }
}