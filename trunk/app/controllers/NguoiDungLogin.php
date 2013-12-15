<?php

class NguoiDungLogin extends BaseController {

    public function index() {
        return View::make('nguoidung_canhan.index_login')
                        ->with('title', '.::Đăng Nhập Thư Viện Khoa::.');
    }

    public function authen() {
        $user = array('ma_so_the' => Input::get('username'),
            'password' => Input::get('password'));
        //
        if(NguoiDung::validateBanner($user['ma_so_the']))
        {
        $validation = NguoiDung::validate($user);
        if ($validation->passes()) {
            if (Auth::attempt($user)) {
                switch (Auth::user()->id_nhom_quyen_han) {
                    case 1: Session::put('role', 'quan_ly');
                        General::storeevents(NGUOI_DUNG_LOGIN + " với quyền hạn quản lý");
                        break;
                    case 2: Session::put('role', 'thu_thu');
                        General::storeevents(NGUOI_DUNG_LOGIN + " với quyền hạn thủ thư");
                        break;
                    case 3:
                    case 4: Session::put('role', 'nguoi_muon');
                        General::storeevents(NGUOI_DUNG_LOGIN + " với quyền hạn người mượn");
                        break;
                }
                return Redirect::to('/');
            }
            return Redirect::route('login')
                            ->with('error_message', 'Tài khoản hoặc mật khẩu không chính xác!')
                            ->withInput();
        } else {
            return Redirect::route('login')->withErrors($validation)->withInput();
        }
        }
        else{
            return Redirect::route('login')->withInput()->with('error_message', 'Tài khoản của bạn tạm thời đã bị khóa!');
        }
    }

    public function unregister() {
        return View::make('nguoidung_canhan.index_unregister')->with('title', '.::Đăng Kí Tài Khoản Mới::.');
    }

    public function forgotpass() {
        return View::make('nguoidung_canhan.index_forgotpass')->with('title', '.::Quên mật khẩu::.');
    }

    public function request() {
        $credentials = array('email' => Input::get('email'));
        return Password::remind($credentials);
    }

    public function destroy() {
        General::storeevents(NGUOI_DUNG_LOGOUT);
        Session::flush();
        Auth::logout();
        return Redirect::route("login");
    }
}
