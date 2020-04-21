<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
 
class dmKho extends Controller
{
  //
	public function add_kho()
	{
		return view('admin.add_kho');
	}
	public function all_kho()
	{

		
		$all_kho= DB::table('vat_tu')->get();
		$manager_kho=view('admin.all_kho')->with('all_kho',$all_kho);
		return view('admin_layout')->with('admin.all_kho',$manager_kho);
	}
	public function save_kho(Request $request)
	{
		$data = array();
		
		$data['DonGia']= $request->kho_dongia;
		$data['TenVT']= $request->kho_vt;
		$data['SoLuong']= $request->kho_sl;
		$data['MoTa']= $request->kho_mota;
		

		DB::table('vat_tu')->insert($data);
		
		Session::put('message','Thêm thành công');
		return Redirect :: to ('add-kho');
	}
}
?>