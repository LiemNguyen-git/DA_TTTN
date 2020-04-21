<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CategoryProduct extends Controller
{
    public function themdanhmuc(){ 
    	return view('admin.add_category_product');

    }

    public function hienthidanhmuc(){

        $all_category_product= DB::table('danh_muc')->get();
        $manager_category_product= view('admin.all_category_product')->with('all_category_product',$all_category_product);

    	return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
        

    }

    public function luudanhmuc(Request $request){

    	$data=array();
    	$data['ten_dm']=$request->ten_dm;
    	$data['trang_thai']=$request->trangthai_dm;
    	$data['mo_ta']=$request->mota_dm;

    	DB::table ('danh_muc')->insert($data);
    	Session::put('message','Them danh muc thanh cong');
    	return view('admin.add_category_product');

    }
  
}
