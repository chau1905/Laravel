<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table ='hoadon';
    public function ban(){
    	return $this->belongsTo('App\Models\Ban','ban_id','id');
    }
    public function nhanvien(){
    	return $this->belongsTo('App\Models\NhanVien','nhanvien_id','id');
    }
    public function cthd(){
    	return $this->hasMany('App\Models\CTHD','hoadon_id','id');
    }
}
