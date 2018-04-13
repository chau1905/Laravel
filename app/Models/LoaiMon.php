<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiMon extends Model
{
    protected $table ='loaimon';
     public function thucdon()
    {
    	return $this->hasMany('App\Models\ThucDon','loaimon_id','id');
    }
    public function cthd(){
    	return $this->hasManyThrough('App\Models\CTHD','App\Models\ThucDon','loaimon_id','thucdon_id','id');
    }
}
