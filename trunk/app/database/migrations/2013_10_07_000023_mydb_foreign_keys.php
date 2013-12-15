<?php

class MydbForeignKeys
{
    /**
    * Make changes to the database.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('bai_viet', function($table)
        {
            // Foreign Keys for table 'bai_viet'

            $table->foreign('id_loai_bai_viet')->references('id')->on('loai_bai_viet');
            $table->foreign('id_nguoi_dang')->references('id')->on('nguoi_dung');
            $table->foreign('id_nguoi_sua')->references('id')->on('nguoi_dung');
        });

        Schema::table('banned_tk', function($table)
        {
            // Foreign Keys for table 'banned_tk'

            $table->foreign('id_nguoi_banned')->references('id')->on('nguoi_dung');
            $table->foreign('id_nguoi_bi_banned')->references('id')->on('nguoi_dung');
        });

        Schema::table('chi_tiet_gvhd', function($table)
        {
            // Foreign Keys for table 'chi_tiet_gvhd'

            $table->foreign('id_gvhd')->references('id')->on('gvhd');
            $table->foreign('id_luan_van')->references('id')->on('luan_van');
        });

        Schema::table('chi_tiet_phieu_muon_sach', function($table)
        {
            // Foreign Keys for table 'chi_tiet_phieu_muon_sach'

            $table->foreign('id_nguoi_cap_nhat')->references('id')->on('nguoi_dung');
            $table->foreign('id_phieu_muon')->references('id')->on('phieu_muon_sach');
            $table->foreign('id_quyen_sach')->references('id')->on('quyen_sach');
        });

        Schema::table('chi_tiet_sach_yeu_cau', function($table)
        {
            // Foreign Keys for table 'chi_tiet_sach_yeu_cau'

            $table->foreign('id_dau_sach')->references('id')->on('dau_sach');
            $table->foreign('id_nguoi_xu_ly')->references('id')->on('nguoi_dung');
            $table->foreign('id_phieu_yeu_cau')->references('id')->on('phieu_yeu_cau_sach');
        });

        Schema::table('dang_ki_gia_han_sach', function($table)
        {
            // Foreign Keys for table 'dang_ki_gia_han_sach'

            $table->foreign('id_sach_muon')->references('id')->on('chi_tiet_phieu_muon_sach');
        });

        Schema::table('dich_gia_tai_lieu', function($table)
        {
            // Foreign Keys for table 'dich_gia_tai_lieu'

            $table->foreign('id_dau_sach')->references('id')->on('tai_lieu');
            $table->foreign('id_dich_gia')->references('id')->on('dich_gia');
        });

        Schema::table('lich_su_hoat_dong', function($table)
        {
            // Foreign Keys for table 'lich_su_hoat_dong'

            $table->foreign('id_nguoi_dung')->references('id')->on('nguoi_dung');
        });

        Schema::table('luan_van', function($table)
        {
            // Foreign Keys for table 'luan_van'

            $table->foreign('id_dau_sach')->references('id')->on('dau_sach');
        });

        Schema::table('phieu_muon_sach', function($table)
        {
            // Foreign Keys for table 'phieu_muon_sach'

            $table->foreign('id_nguoi_muon')->references('id')->on('nguoi_dung');
            $table->foreign('id_nguoi_xu_ly')->references('id')->on('nguoi_dung');
        });

        Schema::table('phieu_nhap_sach', function($table)
        {
            // Foreign Keys for table 'phieu_nhap_sach'

            $table->foreign('id_nguoi_lap')->references('id')->on('nguoi_dung');
        });

        Schema::table('phieu_yeu_cau_sach', function($table)
        {
            // Foreign Keys for table 'phieu_yeu_cau_sach'

            $table->foreign('id_nguoi_gui')->references('id')->on('nguoi_dung');
        });

        Schema::table('quyen_sach', function($table)
        {
            // Foreign Keys for table 'quyen_sach'

            $table->foreign('id_dau_sach')->references('id')->on('dau_sach');
            $table->foreign('id_nguoi_cap_nhat')->references('id')->on('nguoi_dung');
            $table->foreign('id_phieu_nhap')->references('id')->on('phieu_nhap_sach');
        });

        Schema::table('svth', function($table)
        {
            // Foreign Keys for table 'svth'

            $table->foreign('id_luan_van')->references('id')->on('luan_van');
        });

        Schema::table('tai_lieu', function($table)
        {
            // Foreign Keys for table 'tai_lieu'

            $table->foreign('id_dau_sach')->references('id')->on('dau_sach');
            $table->foreign('id_nxb')->references('id')->on('nha_xuat_ban');
            $table->foreign('id_the_loai_sach')->references('id')->on('the_loai_sach');
        });

    }

    /**
    * Revert the changes to the database.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('bai_viet', function($table)
        {
            // Drop Foreign Keys for table 'bai_viet'

            $table->dropForeign('bai_viet_id_loai_bai_viet_foreign');
            $table->dropForeign('bai_viet_id_nguoi_dang_foreign');
            $table->dropForeign('bai_viet_id_nguoi_sua_foreign');
        });

        Schema::table('banned_tk', function($table)
        {
            // Drop Foreign Keys for table 'banned_tk'

            $table->dropForeign('banned_tk_id_nguoi_banned_foreign');
            $table->dropForeign('banned_tk_id_nguoi_bi_banned_foreign');
        });

        Schema::table('chi_tiet_gvhd', function($table)
        {
            // Drop Foreign Keys for table 'chi_tiet_gvhd'

            $table->dropForeign('chi_tiet_gvhd_id_gvhd_foreign');
            $table->dropForeign('chi_tiet_gvhd_id_luan_van_foreign');
        });

        Schema::table('chi_tiet_phieu_muon_sach', function($table)
        {
            // Drop Foreign Keys for table 'chi_tiet_phieu_muon_sach'

            $table->dropForeign('chi_tiet_phieu_muon_sach_id_nguoi_cap_nhat_foreign');
            $table->dropForeign('chi_tiet_phieu_muon_sach_id_phieu_muon_foreign');
            $table->dropForeign('chi_tiet_phieu_muon_sach_id_quyen_sach_foreign');
        });

        Schema::table('chi_tiet_sach_yeu_cau', function($table)
        {
            // Drop Foreign Keys for table 'chi_tiet_sach_yeu_cau'

            $table->dropForeign('chi_tiet_sach_yeu_cau_id_dau_sach_foreign');
            $table->dropForeign('chi_tiet_sach_yeu_cau_id_nguoi_xu_ly_foreign');
            $table->dropForeign('chi_tiet_sach_yeu_cau_id_phieu_yeu_cau_foreign');
        });

        Schema::table('dang_ki_gia_han_sach', function($table)
        {
            // Drop Foreign Keys for table 'dang_ki_gia_han_sach'

            $table->dropForeign('dang_ki_gia_han_sach_id_sach_muon_foreign');
        });

        Schema::table('dich_gia_tai_lieu', function($table)
        {
            // Drop Foreign Keys for table 'dich_gia_tai_lieu'

            $table->dropForeign('dich_gia_tai_lieu_id_dau_sach_foreign');
            $table->dropForeign('dich_gia_tai_lieu_id_dich_gia_foreign');
        });

        Schema::table('lich_su_hoat_dong', function($table)
        {
            // Drop Foreign Keys for table 'lich_su_hoat_dong'

            $table->dropForeign('lich_su_hoat_dong_id_nguoi_dung_foreign');
        });

        Schema::table('luan_van', function($table)
        {
            // Drop Foreign Keys for table 'luan_van'

            $table->dropForeign('luan_van_id_dau_sach_foreign');
        });

        Schema::table('phieu_muon_sach', function($table)
        {
            // Drop Foreign Keys for table 'phieu_muon_sach'

            $table->dropForeign('phieu_muon_sach_id_nguoi_muon_foreign');
            $table->dropForeign('phieu_muon_sach_id_nguoi_xu_ly_foreign');
        });

        Schema::table('phieu_nhap_sach', function($table)
        {
            // Drop Foreign Keys for table 'phieu_nhap_sach'

            $table->dropForeign('phieu_nhap_sach_id_nguoi_lap_foreign');
        });

        Schema::table('phieu_yeu_cau_sach', function($table)
        {
            // Drop Foreign Keys for table 'phieu_yeu_cau_sach'

            $table->dropForeign('phieu_yeu_cau_sach_id_nguoi_gui_foreign');
        });

        Schema::table('quyen_sach', function($table)
        {
            // Drop Foreign Keys for table 'quyen_sach'

            $table->dropForeign('quyen_sach_id_dau_sach_foreign');
            $table->dropForeign('quyen_sach_id_nguoi_cap_nhat_foreign');
            $table->dropForeign('quyen_sach_id_phieu_nhap_foreign');
        });

        Schema::table('svth', function($table)
        {
            // Drop Foreign Keys for table 'svth'

            $table->dropForeign('svth_id_luan_van_foreign');
        });

        Schema::table('tai_lieu', function($table)
        {
            // Drop Foreign Keys for table 'tai_lieu'

            $table->dropForeign('tai_lieu_id_dau_sach_foreign');
            $table->dropForeign('tai_lieu_id_nxb_foreign');
            $table->dropForeign('tai_lieu_id_the_loai_sach_foreign');
        });

    }
}