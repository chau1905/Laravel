<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    protected $table ='ban';
    public function hoadon()
    {
    	return $this->hasMany('App\Models\HoaDon','ban_id','id');
    }
    public function cthd(){
    	return $this->hasManyThrough('App\Models\CTHD','App\Models\HoaDon','ban_id','hoadon_id','id');
    }
}
