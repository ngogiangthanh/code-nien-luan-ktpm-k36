<?php

use Illuminate\Database\Migrations\Migration;

class CreateNguoidungTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('nguoi_dung', function($table)
        {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_nhom_quyen_han')->unsigned();
            $table->string('ma_so_the', 15)->unique();
            $table->string('password', 256);
            $table->string('ho_ten', 256);
            $table->integer('gioi_tinh');
            $table->date('ngay_sinh');
            $table->string('dia_chi', 256)->nullable()->default(NULL);
            $table->string('sdt', 15)->nullable()->default(NULL);
            $table->string('don_vi_cong_tac', 256)->nullable()->default(NULL);
            $table->string('email', 256);
            $table->string('link_avatar', 50)->nullable()->default(NULL);
            $table->date('ngay_cap_the');
            $table->date('ngay_het_han')->nullable()->default(NULL);
            $table->integer('trang_thai_hoat_dong');
            $table->string('quyen_han', 50);
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('nguoi_dung');
    }
}