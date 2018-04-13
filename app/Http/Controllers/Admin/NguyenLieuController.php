<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NguyenLieu;
use App\Http\Requests\NguyenLieuRequest;
class NguyenLieuController extends Controller
{
    public function getList(){
    	$nguyenlieu = NguyenLieu::all();
    	return view('admin.module.nguyenlieu.list',compact('nguyenlieu'));
    }
    public function getAdd(){
    	return view('admin.module.nguyenlieu.add');
    }
    public function postAdd(NguyenLieuRequest $request){
    	
    	$nguyenlieu = new NguyenLieu;
    	$nguyenlieu->tennguyenlieu = $request->txtName; 
    	$nguyenlieu->soluong = $request->txtSoLuong;
    	$nguyenlieu->donvitinh = $request->txtDonViTinh;
    	$nguyenlieu->giatien = $request->txtPrice;
    	$nguyenlieu->tinhtrang = $request->txtTinhTrang;
    	$nguyenlieu->save();
    	return redirect('admin/nguyenlieu/list')->with('thongbao','Thêm thành công');

    }
    public function getEdit($id){
    	$nguyenlieu = NguyenLieu::find($id);
    	return view('admin.module.nguyenlieu.edit',compact('nguyenlieu'));
    }
    public function postEdit(Request $request,$id){
    	
    	$nguyenlieu = NguyenLieu::find($id);
    	$nguyenlieu->tennguyenlieu = $request->txtName; 
    	$nguyenlieu->soluong = $request->txtSoLuong;
    	$nguyenlieu->donvitinh = $request->txtDonViTinh;
    	$nguyenlieu->giatien = $request->txtPrice;
    	$nguyenlieu->tinhtrang = $request->txtTinhTrang;
    	$nguyenlieu->save();
    	return redirect('admin/nguyenlieu/list')->with('thongbao','Sửa thành công');
    }
    public function getDelete($id){
    	$nguyenlieu = NguyenLieu::find($id);
    	$nguyenlieu ->delete();
    	return redirect('admin/nguyenlieu/list')->with('thongbao','Xóa thành công');
    }
    
}
