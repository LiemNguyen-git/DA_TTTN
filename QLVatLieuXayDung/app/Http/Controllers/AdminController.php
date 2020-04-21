<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin_login');
    }
    public function show_admin()
    {
    	return view('admin.tongquan');
    }public function show_tongquan(Request $request)
    {
    	$admin_email = $request->admin_email;
    	$admin_pass = md5($request->admin_pass);
    	$result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_pass',$admin_pass)->first();
    	if($result)
    	{
    		session::put('admin_email',$result->admin_email);
    		Session::put('admin_pass',$result->admin_pass);
    		return view('admin.tongquan');
    	}
    	else  
    	{
    		return Redirect::to('admin');
    	}
    	
    	
    	//echo '<pre>';
    	//print_r($result);
    	//echo '<pre>';
    	
    }
}