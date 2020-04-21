<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//admin
Route::get  ('/admin','AdminController@index');
Route::get  ('/ql_admin','AdminController@show_admin');
Route::post ('/admin-tongquan','AdminController@show_tongquan');

//Route::get('/ql_congno','AdminController@thongke_pt');
//QL danh muc 
Route::get('/add-category-product','CategoryProduct@themdanhmuc');
Route::get('/all-category-product','CategoryProduct@hienthidanhmuc');
Route::post('/save-category-product','CategoryProduct@luudanhmuc');

 //QL_Hóa Đon
Route::get('/add-bill', 'HoadonController@add_bill');
Route::get('/all-bill', 'HoadonController@all_bill');
Route::get('/delete-bill/{MaHD}', 'HoadonController@delete_bill');
Route::post('/save-bill', 'HoadonController@save_bill');
Route::get('/edit-bill/{MaHD}', 'HoadonController@edit_bill');
Route::post('/update-bill/{MaHD}', 'HoadonController@update_bill');

//QL kho
Route::get('/add-kho','dmKho@add_kho');
Route::get('/all-kho','dmKho@all_kho');
Route::post('/save-kho','dmKho@save_kho');

//QL PT
Route::get('/add-phieuthu-product','PhieuthuProduct@add_phieuthu_product');
Route::get('/all-phieuthu-product','PhieuthuProduct@all_phieuthu_product');
Route::post('/save-phieuthu-product','PhieuthuProduct@save_phieuthu_product');

//QL Dondat hang
Route::get('/show-ddh','DdhController@show_ddh');
