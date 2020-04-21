<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PhieuthuProduct extends Controller
{
     
     public function add_phieuthu_product()
    {
         
    	return view('admin.add_phieuthu_product');
    }

     public function save_phieuthu_product(Request $request)
     {
     	$data=array();
     	$data['MaPT']=$request->phieuthu_product_ma;
        $data['NgayThanhToan']=$request->phieuthu_product_ngay;
        $data['SoTienThu']=$request->phieuthu_product_tien;
        $data['DotThu']=$request->phieuthu_product_dot;
        $data['TrangThai']=$request->phieuthu_product_status;
        $data['DON_DAT_HANGMaDDH']=$request->phieuthu_product_maddh;
        $data['NHAN_VIENMaNV']=$request->phieuthu_product_manv;
     	
     

     	DB::table('phieu_thu')->insert($data);
     	Session::put('message','Thêm phiếu thu thành công');
     	return Redirect::to('add-phieuthu-product');
     }
    
    
   
     public function all_phieuthu_product()
    {
      
           $all_phieuthu_product= DB::table('phieu_thu')->get();
        $ql_pt= view('admin.all_phieuthu_product')->with('all_phieuthu_product',$all_phieuthu_product);

        return view('admin_layout')->with('admin.all_phieuthu_product',$ql_pt);
    }
}
