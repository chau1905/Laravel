<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CTHD extends Model
{
    protected $table ='cthd';
    public function hoadon(){
    	return $this->belongsTo('App\Models\HoaDon','hoadon_id','id');
    }
    public function thucdon(){
    	return $this->belongsTo('App\Models\ThucDon','thucdon_id','id');
    }
}
