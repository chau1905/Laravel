<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table ='nhanvien';
    public function chamcong()
    {
    	return $this->hasMany('App\Models\ChamCong','nhanvien_id','id');
    }
    public function hoadon()
    {
    	return $this->hasMany('App\Models\HoaDon','nhanvien_id','id');
    }
    public function cthd(){
    	return $this->hasManyThrough('App\Models\CTHD','App\Models\HoaDon','nhanvien_id','hoadon_id','id');
    }
}
