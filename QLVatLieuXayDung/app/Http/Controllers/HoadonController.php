<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class HoadonController extends Controller
{
   //hàm hiển thị tất cả hóa đơn
    public function add_bill()
    {
        
        $KH = DB::table('khach_hang')->orderby('MaKH','desc')->get();
        $DDH = DB::table('don_dat_hang')->orderby('MaDDH','desc')->get();
        $NV = DB::table('nhan_vien')->orderby('MaNV','desc')->get();
        $VT = DB::table('vat_tu')->orderby('MaVT','desc')->get();
        return view('admin.add_bill')->with('KH',$KH)->with('DDH',$DDH)->with('NV',$NV)->with('VT',$VT);
    
    }

    
    public function all_bill()
        {
            $all_bill = DB::table('hoa_don')
            ->join('don_dat_hang','don_dat_hang.MaDDH','=','hoa_don.DON_DAT_HANGMaDDH')
            ->orderby('hoa_don.MaHD','desc')->get();
            $manager_bill = view('admin.all_bill')->with('all_bill',$all_bill);
            return view('admin_layout')->with('admin.all_bill',$manager_bill);//trang admin-layout se chua all_bill la bien $manager_bill
        }      
  
    public function delete_bill($MaHD)
        {
            /*$this->AuthLogin();*/
            DB::table('hoa_don')->where('MaHD',$MaHD)->delete();
            Session::put('message','Xóa hóa đơn thành công.');
            return Redirect::to('all-bill');
        }

    public function save_bill(Request $request)
        {
            $data = array();
            $data['TenKH'] = $request->tenKH;
            $data['NgayLapHD'] = $request->ngaylap;
            $data['TenVT'] = $request->tenVT;
            $data['SoLuong'] = $request->soluong;
            $data['DonVi'] = $request->donvi;
            $data['TrangThai'] = $request->trangthai;
            $data['ThanhTien'] = $request->thanhtien;
            $data['KHACH_HANGMaKH'] = $request->maKH;
            $data['NHAN_VIENMaNV'] = $request->maNV;
            $data['DON_DAT_HANGMaDDH'] = $request->maDDH;
                
            DB::table('hoa_don')->insert($data);
            Session::put('message','Thêm hóa đơn thành công');
            return Redirect::to('all-bill');
        }

    public function edit_bill($MaHD)
    {
        $KH = DB::table('khach_hang')->orderby('MaKH','desc')->get();
        $DDH = DB::table('don_dat_hang')->orderby('MaDDH','desc')->get();
        $NV = DB::table('nhan_vien')->orderby('MaNV','desc')->get();
        $VT = DB::table('vat_tu')->orderby('MaVT','desc')->get();

        $edit_bill = DB::table('hoa_don')->where('MaHD',$MaHD)->get();
        $manager_bill = view('admin.edit_bill')->with('edit_bill',$edit_bill)->with('KH',$KH)->with('DDH',$DDH)->with('NV',$NV)->with('VT',$VT);

        return view('admin_layout')->with('admin.edit_bill',$manager_bill);
    }

    public function update_bill(Request $request,$MaHD)
    {
         $data = array();
            $data['TenKH'] = $request->tenKH;
            $data['NgayLapHD'] = $request->ngaylap;
            $data['TenVT'] = $request->tenVT;
            $data['SoLuong'] = $request->soluong;
            $data['DonVi'] = $request->donvi;
            $data['TrangThai'] = $request->trangthai;
            $data['ThanhTien'] = $request->thanhtien;
            /*$data['KHACH_HANGMaKH'] = $request->maKH;
            $data['NHAN_VIENMaNV'] = $request->maNV;
            $data['DON_DAT_HANGMaDDH'] = $request->maDDH;*/
                
                DB::table('hoa_don')->where('MaHD',$MaHD)->update($data);     
                Session::put('message','Cập nhật hóa đơn thành công.');
                return Redirect::to('all-bill');
    }
}