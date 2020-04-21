@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Them danh muc san pham
                        </header>
                        
                        <div class="panel-body">
                              <?php 
                                $message = Session::get('message');
                                if($message)
                                {
                                    echo '<span>'.$message.'</span>';
                                    Session::put('message',null);
                                }

                            ?>


                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ten danh muc</label>
                                    <input type="text" name="ten_dm" class="form-control" id="exampleInputEmail1" placeholder="Ten danh muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mo ta</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="mota_dm" id="exampleInputPassword1" placeholder="Mo ta"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trang thái</label>
                                      <select name="trangthai_dm" class="form-control input-sm m-bot15">
                                            <option value="0">an</option>
                                            <option value="1">hien thi</option>
                                            
                            </select>
                                <button type="submit" name="add_category_product" class="btn btn-info">Them danh muc</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

@endsection



           