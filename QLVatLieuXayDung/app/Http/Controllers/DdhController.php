<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;// thu vien
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; // thanh cong hay that bai thi tra ve cai trang nao do
session_start();


class DdhController extends Controller
{
    public function show_ddh()
    {
    	$all_DDH= DB::table('don_dat_hang')->get();
    	$ql_DDH = view('admin.show_ddh')->with('all_DDH',$all_DDH);
    	return view('admin_layout')->with('admin.adminDDH',$ql_DDH );
    }
}