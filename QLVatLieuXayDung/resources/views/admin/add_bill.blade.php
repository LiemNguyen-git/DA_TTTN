@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           LẬP HÓA ĐƠN
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-bill')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng</label>
                                    <select name="tenKH" class="form-control input-sm m-bot15">
                                        @foreach($KH as $key => $kh)
                                            <option value="{{$kh->TenKH}}">{{$kh->TenKH}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>    
                                <div class="form-group">
                                    <?php 
                                    use Carbon\Carbon;
                                    ?>
                                    <label for="exampleInputEmail1">Ngày lập HD</label>
                                    <input type="" name="ngaylap" value="<?php echo Carbon::now('Asia/Ho_Chi_Minh'); ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                                    
                                </div>    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên vật tư</label>
                                    <select name="tenVT" class="form-control input-sm m-bot15">
                                        @foreach($DDH as $key => $ddh)
                                            <option value="{{$ddh->TenVT}}">{{$ddh->TenVT}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                   <select name="soluong" class="form-control input-sm m-bot15">
                                        @foreach($DDH as $key => $ddh)
                                            <option value="{{$ddh->SoLuong}}">{{$ddh->SoLuong}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn vị</label>
                                    <select name="donvi" class="form-control input-sm m-bot15">
                                        @foreach($DDH as $key => $ddh)
                                            <option value="{{$ddh->DonVi}}">{{$ddh->DonVi}}</option>
                                        @endforeach
                                            
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                      <select name="trangthai" class="form-control input-sm m-bot15">
                                            <option value="1">Thành công</option>
                                            <option value="0">Chờ xử lý</option>
                                            
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Thành tiền</label>
                                       <select name="thanhtien" class="form-control input-sm m-bot15">
                                        @foreach($DDH as $key => $ddh)
                                            <option value="{{$ddh->ThanhTien}}">{{$ddh->ThanhTien}}</option>
                                        @endforeach
                                            
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã khách hàng</label>
                                      <select name="maKH" class="form-control input-sm m-bot15">
                                        @foreach($KH as $key => $kh)
                                            <option value="{{$kh->MaKH}}">{{$kh->MaKH}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Mã nhân viên</label>
                                      <select name="maNV" class="form-control input-sm m-bot15">
                                        @foreach($NV as $key => $nv)
                                            <option value="{{$nv->MaNV}}">{{$nv->MaNV}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Mã DDH</label>
                                      <select name="maDDH" class="form-control input-sm m-bot15">
                                        @foreach($DDH as $key => $ddh)
                                            <option value="{{$ddh->MaDDH}}">{{$ddh->MaDDH}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div> 
                                
                                <button type="submit" name="add_product" class="btn btn-info">Xuất và Lưu hóa đơn</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection