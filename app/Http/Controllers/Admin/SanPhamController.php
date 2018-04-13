<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ThucDon;

class SanPhamController extends Controller
{
    public function getList(){
    	$sanpham = ThucDon::all();
    	return view('admin.module.sanpham.list',compact('sanpham'));
    }
    public function getAdd(){
    	return view('admin.module.sanpham.add');
    }
    public function postAdd(Request $request){
    	
    	$sanpham = new ThucDon;
    	$sanpham->tenmon = $request->txtName; 
    	$sanpham->loaimon_id = $request->txtLoai;
    	$sanpham->dongia = $request->txtGia;
    	$sanpham->donvitinh = $request->txtDonVi;
    	$sanpham->save();
    	return redirect('admin/sanpham/list')->with('thongbao','Thêm thành công');

    }
}
