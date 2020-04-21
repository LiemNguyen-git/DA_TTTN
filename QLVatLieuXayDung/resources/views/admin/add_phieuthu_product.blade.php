 @extends('admin_layout')
 @section('admin_content') 

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            LẬP PHIẾU THU
                        </header>
                        <div class="panel-body">
                            <?php
                              $message=Session::get('message');
                              if($message)
                              {
                                 echo $message;
                                 Session::put('message',null);
                              }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-phieuthu-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Phiếu Thu</label>
                                    <input type="label" name="phieuthu_product_ma" class="form-control" id="exampleInputEmail1" placeholder="Mã Phiếu Thu">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Thanh Toán</label>
                                    <input type="date" name="phieuthu_product_ngay" class="form-control" id="exampleInputEmail1" placeholder="Ngày Thanh Toán">
                                </div>
                                 <div class="form-group">
                                    <label for="text">Số Tiền Thu</label>
                                    <input type="text" name="phieuthu_product_tien" class="form-control" id="exampleInputEmail1" placeholder="Số Tiền Thu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đợt Thu</label>
                                    <input type="text" name="phieuthu_product_dot" class="form-control" id="exampleInputEmail1" placeholder="Đợt Thu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                         <select name="phieuthu_product_status" class="form-control input-sm m-bot15">
                                                 <option value="0"> Hiển Thị</option>
                                                 <option value="1">Ẩn</option>
                                                
                                         </select>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Đơn Đặt Hàng</label>
                                    <input type="label" name="phieuthu_product_madhh" class="form-control" id="exampleInputEmail1" placeholder="Mã Đơn Đặt Hàng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Nhân Viên</label>
                                    <input type="label" name="phieuthu_product_manv" class="form-control" id="exampleInputEmail1" placeholder="Mã Nhân Viên0">
                                </div>
                               
                               
                              
                                
                                <button type="submit" name="add_phieuthu_product" onclick="return confirm('Bạn có muốn thêm  ?')" class="btn btn-info">Thêm Phiếu Thu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

@endsection