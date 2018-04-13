<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    public function getList(){
    	$user = User::all();
         return view('admin.module.user.list',compact('user'));
    }
    public function getAdd(){
    	return view('admin.module.user.add');

    }
    public function postAdd(UserAddRequest $request){
    	$user = new User();
    	$user->username = $request->txtUser;
    	$user->password = Hash::make($request->txtPass); 
    	$user->level = $request->rdoLevel;
    	$user->remember_token= $request->_token;
    	$user->save();
    	return redirect('admin/user/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id){
    	$user = User::find($id);
        return view('admin.module.user.edit',compact('user'));

    }
    public function postEdit(Request $request, $id){
        $user = User::find($id);
        $user->username = $request->txtUser;
        $user->password = Hash::make($request->txtPass); 
        $user->level = $request->rdoLevel;
        //$user->remember_token= $request->_token;
        $user->save();
        return redirect('admin/user/list')->with('thongbao','Sửa thành công');
    }
    public function getDelete($id){
        $user = User::find($id);
        $user ->delete();
        return redirect('admin/user/list')->with('thongbao','Xóa thành công');
    }
}
