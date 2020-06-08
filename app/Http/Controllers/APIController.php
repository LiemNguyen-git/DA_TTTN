<?php

namespace App\Http\Controllers;
use App\APISanPhamModel;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = APISanPhamModel::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $cate = new APISanPhamModel;
         $data = APISanPhamModel::where('category_name', $request->category_name)->count();
         if($data > 0)
         {
                return response()->json(["message"=>"Loại sản phẩm đã tồn tại."]);
         }
         else{
                $cate -> category_name = $request -> category_name;
                $cate->save();
                return response()->json(["message"=>"Thêm loại sản phẩm thành công."]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $data = APISanPhamModel::where('category_id', $category_id)->get();
        return response()->json($data);
         
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $data = APISanPhamModel::where('category_id',$category_id)->get();
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $cate = new APISanPhamModel;
        $category_name = $cate->category_name = $request->category_name;
        $a=$cate->where('category_id',$category_id)->update(['category_name' => $category_name]);
        if($a>0)
        {
            return response(["message"=>"Cập nhật loại sản phẩm thành công."],200);
        }
        else
        {
            return response(["message"=>"Cập nhật loại sản phẩm không thành công."], 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $a=APISanPhamModel::where('category_id', $category_id)->delete();
         if($a>0)
            {
            return response(["message"=>"Xóa loại sản phẩm thành công."],200);
            }
        else
            {
                return response(["message"=>"Xóa loại sản phẩm không thành công !!Không có sản phẩm này."], 500);
            }
    }
}
