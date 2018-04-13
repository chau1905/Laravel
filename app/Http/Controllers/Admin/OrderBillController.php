<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderBillController extends Controller
{
    public function getBan(){
    	return view ('admin.module.orderbill.ban');
    }

}
