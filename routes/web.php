<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('chao', function () {
    return view('chao');
});
Route::get('test',function(){
  return view('admin.module.nhanvien.add');
});
Route::prefix('admin')->group(function () {
    Route::prefix('nguyenlieu')->group(function () {
      Route::get('list','Admin\NguyenLieuController@getList');
      Route::get('add','Admin\NguyenLieuController@getAdd');
      Route::post('add','Admin\NguyenLieuController@postAdd');
      Route::get('edit/{id}','Admin\NguyenLieuController@getEdit');
      Route::post('edit/{id}','Admin\NguyenLieuController@postEdit');
      Route::get('delete/{id}','Admin\NguyenLieuController@getDelete');
    });
    Route::prefix('sanpham')->group(function () {
      Route::get('list','Admin\SanPhamController@getList');
      Route::get('add','Admin\SanPhamController@getAdd');
      Route::post('add','Admin\SanPhamController@postAdd');
      Route::get('edit/{id}','Admin\SanPhamController@getEdit');
      Route::post('edit/{id}','Admin\SanPhamController@postEdit');
      Route::get('delete/{id}','Admin\SanPhamController@getDelete');
    });
    Route::prefix('user')->group(function () {
      Route::get('list','Admin\UserController@getList');
      Route::get('add','Admin\UserController@getAdd');
      Route::post('add','Admin\UserController@postAdd');
      Route::get('edit/{id}','Admin\UserController@getEdit');
      Route::post('edit/{id}','Admin\UserController@postEdit');
      Route::get('delete/{id}','Admin\UserController@getDelete');
    });
    Route::prefix('nhanvien')->group(function () {
      Route::get('list','Admin\NhanVienController@getList');
      Route::get('add','Admin\NhanVienController@getAdd');
      Route::post('add','Admin\NhanVienController@postAdd');
      Route::get('edit/{id}','Admin\NhanVienController@getEdit');
      Route::post('edit/{id}','Admin\NhanVienController@postEdit');
      Route::get('delete/{id}','Admin\NhanVienController@getDelete');
    });
    Route::prefix('orderbill')->group(function () {
      Route::get('ban','Admin\OrderBillController@getBan');
      Route::get('add','Admin\OrderBillController@getAdd');
      Route::post('add','Admin\OrderBillController@postAdd');
    });
});