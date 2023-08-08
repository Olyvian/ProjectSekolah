<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function datavoucher(){
        return view('Dashboard');
    }
    public function insertvoucher(){
        return view('insertvoucher');
    }
}
