@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách khách hàng
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-8">
      </div>
      <div class="col-sm-3">
        <form action="{{URL::to('/tim-kiem-khach-hang')}}" method="POST">
              {{csrf_field()}}
        <div class="input-group">
          <input type="text" class="input-sm form-control" name="keywords_search" placeholder="Nhập thương hiệu cần tìm kiếm">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">Tìm</button>
          </span>
        </div>
        <h4>Số khách hàng tìm được là:
              <?php
            $na = Count($customer);
               echo "$na";
            ?>
            </h4>
      </form>
      </div>
    </div>
    <div class="table-responsive">
<!-- thong bao kich hoat danh muc -->
      <?php
              $message = Session::get('message');
              if($message)//neu ton tai thi moi in ra message
                  {
                      echo $message;
                      Session::put('message',null);
                  }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Mật khẩu</th>
            <th>Địa chỉ</th>
            <th>Trạng Thái</th>
            

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          @foreach($customer as $key => $customer1)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $customer1->customer_name }}</td>
            <td>{{ $customer1->customer_email }}</td>
            <td>{{ $customer1->customer_phone }}</td>
            <td>{{ $customer1->customer_password }}</td>
            <td>{{ $customer1->customer_address }}</td>
            <td><span class="text-ellipsis">
    <!-- kich hoat san pham -->
                <?php

                  if($customer1->customer_status==0)
                    {
                ?>
                      <a href="{{URL::to('/unactive-customer/'.$customer1->customer_id)}}"> <span class="fa-thumb-styling fa fa-thumbs-up"></span> </a>
                <?php
                    }
                  else
                    {
                ?>
                      <a href="{{URL::to('/active-customer/'.$customer1->customer_id)}}"> <span class="fa-thumb-styling fa fa-thumbs-down"></span> </a>
                <?php
                    }

                ?>

            </span></td>
            
            
            
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection