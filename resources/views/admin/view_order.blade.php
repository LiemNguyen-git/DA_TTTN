@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin chi tiết đơn hàng và vận chuyển
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
            <th>Tên người nhận</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Địa chỉ nhận hàng</th>
            <th>Số điện thoại</th>
            
           
            
           
            

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>   

          @foreach($order_by_id as $order_detail)
          
         
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $order_detail->customer_name }} </td>
            <td>{{ $order_detail->shipping_name }}</td>
            <td>{{ $order_detail->product_name }} </td>
            <td>{{ $order_detail->order_quantity}} </td>
            <td>{{ $order_detail->product_price}} </td>
            <td>{{ $order_detail->shipping_address }} </td>
            <td>{{ $order_detail->customer_phone }} </td>
            
            
          </tr>  
          @endforeach
          
        </tbody>
      </table>
      <td >Tổng tiền:{{ $order_detail->total_money}}</td>
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