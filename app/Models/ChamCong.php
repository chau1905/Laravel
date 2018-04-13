<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChamCong extends Model
{
    protected $table ='chamcong';
    public function nhanvien(){
    	return $this->belongsTo('App\Models\NhanVien','nhanvien_id','id');
    }
}
