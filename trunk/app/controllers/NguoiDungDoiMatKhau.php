<?php

class NguoiDungDoiMatKhau extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        General::storeevents(NGUOI_DUNG_DOI_MAT_KHAU);
        return View::make('nguoidung_canhan.index_doimatkhau')->with('title', 'Đổi mật khẩu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('doimatkhaus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $credentials = array('password' => Input::get('oldpassword'));
        $user = Auth::user()->ma_so_the;
        $password = Input::get('newpassword');
        if (Hash::check($password, Auth::user()->password)) {
            Auth::user()->password = Hash::make($password);
            Auth::user()->save();
            return Redirect::back()->with('flash', 'Your password has been reset');
        }
        else{
            
            return Redirect::back()->with('reason', 'Your password has not been reset');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return View::make('doimatkhaus.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return View::make('doimatkhaus.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
