@extends('admin_layout')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             Vật tư
                            
                            <?php
                            $message =Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                              
                        </header>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-kho')}}" method="post">
                                    {{ csrf_field() }}
                                
                                </div>
                                <br></br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên vật tư :</label>
                                    <textarea  class="form-control" name="kho_vt" id="exampleInputPassword1" placeholder="Vật tư"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng :</label>
                                    <textarea style="resize: none" rows="1" class="form-control" name="kho_sl" id="exampleInputPassword1" placeholder="Số lượng"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Đơn giá :</label>
                                    <textarea style="resize: none" class="form-control" name="kho_dongia" id="exampleInputPassword1" placeholder="Đơn giá"></textarea>
                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả :</label>
                                    <textarea style="resize: none" class="form-control" name="kho_mota" id="exampleInputPassword1" placeholder="Đơn giá"></textarea>
                                </div>
                                
                                
                            </select>
                                </div>
                               
                                <button type="submit"name="kho_px" class="btn btn-info">Thêm vật tư</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection