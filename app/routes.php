<?php

include('config/constant/constant.php');
include('config/constant/roles.php');
include('lib/img/ImageLib.php');
include('config/constant/excel_reader.php');

Route::group(array('before' => 'auth'), function() {
            Route::get('/', array('as' => 'index', 'uses' => 'NguoiDungBaiViet@index'));
            //----------- Thong tin ca nhan
            Route::get('profile', array('as' => 'profile', 'uses' => 'NguoiDungHoSo@index'));
            Route::get('box', array('as' => 'box', 'uses' => 'NguoiDungThongBao@index'));
            //Route::get('changepass', array('as' => 'changepass', 'uses' => 'NguoiDungDoiMatKhau@index'));
            //Route::post('changepass', array('uses' => 'NguoiDungDoiMatKhau@update','before' => 'csrf'));
            Route::get('logout', array('as' => 'logout', 'uses' => 'NguoiDungLogin@destroy'));
            //-----------
            Route::get('news', array('as' => 'news', 'uses' => 'NguoiDungBaiViet@index'));
            Route::get('news/{type}', 'NguoiDungBaiViet@index')
                    ->where(array('type' => '[A-Za-z]+'));
            Route::get('news/{type}/{alias}', 'NguoiDungBaiViet@index')
                    ->where(array('type' => '[A-Za-z]+', 'alias' => '[A-Za-z]+'));
            Route::get('news/{type}/{alias}/{id}', 'NguoiDungBaiViet@show')
                    ->where(array('type' => '[A-Za-z]+', 'alias' => '[A-Za-z]+', 'id' => '[0-9]+'));
            Route::post('edituser', array('before' => 'csrf', 'uses' => 'NguoiDungHoSo@store'));
            //----------- Nguoi muon
            if (Session::get('role') == 'nguoi_muon') {
                Route::get('borrows', array('as' => 'borrows', 'uses' => 'NguoiMuonTraCuuSach@index'));
                Route::get('borrows/searches', array('as' => 'borrows/searches', 'uses' => 'NguoiMuonTraCuuSach@index'));
                Route::get('borrows/xemchitiet/{loai}/{id}', array('as' => 'borrows/xemchitiet/{loai}/{id}', 'uses' => 'NguoiMuonTraCuuSach@show'))
                        ->where(array('loai' => '[A-Za-z_]+', 'id' => '[0-9]+'));
                Route::get('deletesach/{stt}', array('as' => 'deletesach/{id}', 'uses' => 'NguoiMuonTraCuuSach@destroy'))
                        ->where(array('stt' => '[0-9]+'));
                Route::post('borrows/addbook', array('before' => 'csrf', 'uses' => 'NguoiMuonTraCuuSach@create'));
                Route::get('phieumuon', array('as' => 'phieumuon', 'uses' => 'NguoiMuonTraCuuSach@viewPhieuMuon'));
                Route::get('borrows/tables', array('as' => 'borrows/tables', 'uses' => 'NguoiMuonTraCuuMuonTra@index'));
                Route::post('guiphieumuon', array('before' => 'csrf', 'uses' => 'NguoiMuonTraCuuSach@store'));
                Route::get('yeucau/{id}', array('as' => 'yeucau/{id}', 'uses' => 'NguoiMuonTraCuuSach@guiYeuCau'))
                        ->where(array('id' => '[0-9]+'));
                Route::post('giahan', array('before' => 'csrf', 'uses' => 'NguoiMuonTraCuuMuonTra@giaHan'));
                Route::post('luugiahan', array('before' => 'csrf', 'uses' => 'NguoiMuonTraCuuMuonTra@luuGiaHan'));
            }
            //----------- Thu thu
            else if (Session::get('role') == 'thu_thu') {
                Route::get('mborrows', array('as' => 'mborrows', 'uses' => 'ThuThuQuanLyMuonTra@index'));
                Route::get('mborrows/listborrows', array('as' => 'mborrows/listborrows', 'uses' => 'ThuThuQuanLyMuonTra@index'));
                Route::get('mborrows/addborrows', array('as' => 'mborrows/addborrows', 'uses' => 'ThuThuQuanLyMuonTra@create'));
                Route::post('mborrows/deleteborrows', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@destroy'));
                Route::post('mborrows/deleteborrowsdetail', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@destroydetail'));
                Route::post('mborrows/deleteborrowsdetailtemp', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@destroydetailtemp'));
                Route::post('mborrows/update', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@update'));
                Route::post('mborrows/updatedetail', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@updatedetail'));
                Route::get('mborrows/edit', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@edit'));
                Route::get('mborrows/editdetail', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@editdetail'));
                Route::post('mborrows/detailborrows', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@show'));
                Route::get('mborrows/printt', array('as' => 'mborrows/printt', 'uses' => 'ThuThuQuanLyMuonTra@printt'));
                Route::get('mborrows/printdetail', array('as' => 'mborrows/printdetail', 'uses' => 'ThuThuQuanLyMuonTra@printdetail'));
                Route::post('mborrows/addborrows', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@store'));
                Route::post('mborrows/addborrowsdetail', array('before' => 'csrf', 'uses' => 'ThuThuQuanLyMuonTra@storedetail'));

                Route::get('ttreports', array('as' => 'ttreports', 'uses' => 'ThuThuThongKe@index'));
                Route::get('ttreports/reports1', array('as' => 'ttreports/reports1', 'uses' => 'ThuThuThongKe@index'));
                Route::get('ttreports/reports2', array('as' => 'ttreports/reports2', 'uses' => 'ThuThuThongKe@index1'));
                Route::get('ttreports/printt1', array('as' => 'ttreports/printt1', 'uses' => 'ThuThuThongKe@printt1'));
                Route::get('ttreports/printt2', array('as' => 'ttreports/printt2', 'uses' => 'ThuThuThongKe@printt2'));
                //new
                Route::get('svpayments', array('as' => 'svpayments', 'uses' => 'QuanLyThanhToanRaTruong@index'));
                Route::get('svpayments/dropouts', array('as' => 'svpayments/dropouts', 'uses' => 'ThuThuThanhToanRaTruong@index1'));
                Route::get('svpayments/pass', array('as' => 'svpayments/pass', 'uses' => 'ThuThuThanhToanRaTruong@index'));
                
                Route::post('uploadexcel', array('before' => 'csrf', 'uses' => 'ThuThuThanhToanRaTruong@uploadexcel'));
                
                //------
            }
            //---------- Quan ly
            else if (Session::get('role') == 'quan_ly') {
                Route::get('musers', array('as' => 'musers', 'uses' => 'QuanLyQuanLyNguoiDung@index'));
                Route::get('musers/listusers', array('as' => 'musers/listusers', 'uses' => 'QuanLyQuanLyNguoiDung@index'));
                Route::get('musers/addusers', array('as' => 'musers/addusers', 'uses' => 'QuanLyQuanLyNguoiDung@create'));
                Route::post('musers/addusers', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyNguoiDung@store'));
                Route::get('mthreads', array('as' => 'mthreads', 'uses' => 'QuanLyQuanLyBaiViet@index'));

                Route::post('musers/deleteuser', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyNguoiDung@destroy'));
                Route::get('musers/edituser', array('before' => 'csrf', 'as' => 'musers/edituser', 'uses' => 'QuanLyQuanLyNguoiDung@edit'));
                Route::post('musers/detailsuser', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyNguoiDung@show'));

                Route::get('mthreads/addthreads', array('as' => 'mthreads/addthreads', 'uses' => 'QuanLyQuanLyBaiViet@create'));
                Route::get('mthreads/listthreads', array('as' => 'mthreads/listthreads', 'uses' => 'QuanLyQuanLyBaiViet@index'));
                Route::get('mthreads/editthread', array('before' => 'csrf', 'as' => 'editthread', 'uses' => 'QuanLyQuanLyBaiViet@edit'));
                Route::post('mthreads/addthreads', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyBaiViet@store'));
                Route::post('mthreads/updatethread/{id}', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyBaiViet@update'));
                Route::post('deletethreads', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyBaiViet@destroy'));
                Route::post('mthreads/hienThiThreads', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyBaiViet@updateHienThi'));
                Route::post('mthreads/thuTuThreads', array('before' => 'csrf', 'uses' => 'QuanLyQuanLyBaiViet@sapXepThuTu'));

                Route::get('mbooks', array('as' => 'mbooks', 'uses' => 'QuanLyQuanLySach@index'));
                Route::get('mbooks/addbooks', array('as' => 'mbooks/addbooks', 'uses' => 'QuanLyQuanLySach@create'));
                Route::get('mbooks/listbooks', array('as' => 'mbooks/listbooks', 'uses' => 'QuanLyQuanLySach@index'));
                Route::get('mbooks/viewrequirs', array('as' => 'mbooks/viewrequirs', 'uses' => 'QuanLyQuanLySach@index1'));
                Route::get('svpayments', array('as' => 'svpayments', 'uses' => 'QuanLyThanhToanRaTruong@index'));
                Route::get('mtasks', array('as' => 'mtasks', 'uses' => 'QuanLyQuanLyHeThong@index'));

                Route::get('mtasks/taskusers', array('as' => 'mtasks/taskusers', 'uses' => 'QuanLyQuanLyHeThong@indexTV'));
                Route::get('mtasks/backups', array('as' => 'mtasks/backups', 'uses' => 'QuanLyQuanLyHeThong@indexBK'));
            }
        });
Route::group(array('before' => 'guest'), function() {
            Route::get('login', array('as' => 'login', 'uses' => 'NguoiDungLogin@index'));
            Route::get('unregister', array('as' => 'unregister', 'uses' => 'NguoiDungLogin@unregister'));
            Route::get('forgotpass', array('as' => 'forgotpass', 'uses' => 'NguoiDungLogin@forgotpass'));
            Route::post('login', array('before' => 'csrf', 'uses' => 'NguoiDungLogin@authen'));
            Route::post('forgotpass', array('uses' => 'NguoiDungLogin@request'));
        });
