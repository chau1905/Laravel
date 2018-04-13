<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThucDon extends Model
{
    protected $table ='thucdon';
    public function loaimon(){
    	return $this->belongsTo('App\Models\LoaiMon','loaimon_id','id');
    }
    public function cthd(){
    	return $this->hasMany('App\Models\CTHD','thucdon_id','id');
    }
}
