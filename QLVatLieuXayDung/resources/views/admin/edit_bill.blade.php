@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           SỬA HÓA ĐƠN
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

                                @foreach($edit_bill as $key => $editbill)

                                <form role="form" action="{{URL::to('/update-bill/'.$editbill->MaHD)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng</label>
                                    <input type="text" class="form-control" name="tenKH" class="form-control" value="{{$editbill->TenKH}}">
                                </div>    
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Ngày lập HD</label>
                                    <input type="text" class="form-control" name="ngaylap" class="form-control" value="{{$editbill->NgayLapHD}}">
                                    
                                </div>    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên vật tư</label>
                                    <input type="text" class="form-control" name="tenVT" class="form-control" value="{{$editbill->TenVT}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                   <input type="text" class="form-control" name="soluong" class="form-control" value="{{$editbill->SoLuong}}">
                                </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn vị</label>
                                    <input type="text" class="form-control" name="donvi" class="form-control" value="{{$editbill->DonVi}}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                      <input type="text" class="form-control" name="trangthai" class="form-control" value="{{$editbill->TrangThai}}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Thành tiền</label>
                                       <input type="text" class="form-control" name="thanhtien" class="form-control" value="{{$editbill->ThanhTien}}">

                                </div>
                                 {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Mã khách hàng</label>
                                     <input type="text" class="form-control" name="maKH" class="form-control" value="{{$editbill->KHACH_HANGMaKH}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Mã nhân viên</label>
                                     <input type="text" class="form-control" name="maNV" class="form-control" value="{{$editbill->NHAN_VIENMaNV}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Mã DDH</label>
                                     <input type="text" class="form-control" name="maDDH" class="form-control" value="{{$editbill->DON_DAT_HANGMaDDH}}">
                                </div>  --}}
                                
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật hóa đơn</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

        </div>
@endsection