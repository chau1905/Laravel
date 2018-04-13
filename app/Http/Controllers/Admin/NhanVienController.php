<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NhanVienRequest;
use App\Models\NhanVien;
class NhanVienController extends Controller
{
	public function getList(){
		$nhanvien = NhanVien::all();
    	return view('admin.module.nhanvien.list',compact('nhanvien'));
    }
    public function getAdd(){
    	return view('admin.module.nhanvien.add');
    }
     public function postAdd(NhanVienRequest $request){
    	
    	$nhanvien = new NhanVien;
    	$nhanvien->tennhanvien = $request->txtName; 
    	$nhanvien->chucvu = $request->txtChucVu;
    	$nhanvien->diachi = $request->txtDiaChi;
    	$nhanvien->sodienthoai = $request->txtSDT;
    	$nhanvien->calam = $request->txtCaLam;
    	$nhanvien->songaylam = $request->txtSoNgayLam;
    	$nhanvien->save();
    	return redirect('admin/nhanvien/list')->with('thongbao','Thêm thành công');

    }
    public function getEdit($id){
    	$nhanvien = NhanVien::find($id);
    	return view('admin.module.nhanvien.edit',compact('nhanvien'));
    }
    public function postEdit(Request $request,$id){
    	
    	$nhanvien = NhanVien::find($id);
    	$nhanvien->tennhanvien = $request->txtName; 
    	$nhanvien->chucvu = $request->txtChucVu;
    	$nhanvien->diachi = $request->txtDiaChi;
    	$nhanvien->sodienthoai = $request->txtSDT;
    	$nhanvien->calam = $request->txtCaLam;
    	$nhanvien->songaylam = $request->txtSoNgayLam;
    	$nhanvien->save();
    	return redirect('admin/nhanvien/list')->with('thongbao','Sửa thành công');
    }
    public function getDelete($id){
    	$nhanvien = NhanVien::find($id);
    	$nhanvien ->delete();
    	return redirect('admin/nhanvien/list')->with('thongbao','Xóa thành công');
    }
}
