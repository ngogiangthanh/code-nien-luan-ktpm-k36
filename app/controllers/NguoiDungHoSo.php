<?php

class NguoiDungHoSo extends BaseController {

	public function index()
	{
                 return View::make('nguoidung_canhan.index_hoso')->with('title','Thông tin người dùng'); 
	}

	public function store()
	{
                $id = Auth::user()->id;
                $pathfile = "";
                if(Input::hasFile('txtHinhAnh'))
                {
                    $file = Input::file('txtHinhAnh');
                    $destinationPath  = 'public/images/profiles/'.Auth::user()->ma_so_the.'/';
                    $filename = Auth::user()->ma_so_the.".".$file->getClientOriginalExtension(); 
                    $upload_success = $file->move($destinationPath, $filename);
                    $pathfile = $destinationPath.$filename;
                }
                $ht = Input::get('txtHoTen');
                $gt = Input::get('gioiTinh');
                $ns = Input::get('txtNgaySinh');
                $dc = Input::get('txtDiaChi');
                $sdt = Input::get('txtSDT');
                $dvct = Input::get('txtCongTac');
                $email = Input::get('txtEmail');
                DB::statement(DB::raw("CALL update_profile(" .$id. ",'" .$pathfile. "','".$ht."',".$gt.",'".date("Y-m-d",  strtotime($ns))."','".$dc."','".$sdt."','".$dvct."','".$email."');"));
                return Redirect::back()->with("message","Chỉnh sửa thành công");
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
