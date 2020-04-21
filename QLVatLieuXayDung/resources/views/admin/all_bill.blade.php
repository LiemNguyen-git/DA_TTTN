@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách hóa đơn
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-8">
      </div>
      <div class="col-sm-3">
        
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
            <th>Mã hóa đơn</th>
            <th>Tên KH</th>
            <th>Ngày lập HD</th>
            <th>Tên VT</th>
            <th>Số lượng</th>
            <th>Đơn vị</th>
            <th>Trạng thái</th>
            <th>Thành Tiền</th>
            
        
            

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          @foreach($all_bill as $key => $bill)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $bill->MaHD }}</td>
            <td>{{ $bill->TenKH }}</td>
            <td>{{ $bill->NgayLapHD }}</td>
            <td>{{ $bill->TenVT }}</td>
            <td>{{ $bill->SoLuong }}</td>
            <td>{{ $bill->DonVi }}</td>
            <td>
              <span class="text-ellipsis">
              <?php
               if($bill->TrangThai==0){
                ?>
                <a href="">Thành công</a>
                <?php
                 }else{
                ?>  
                 <a href="">Thành công</a>
                <?php
               }
              ?>
            </span>
            </td>
            <td>{{ $bill->ThanhTien }}</td>
            <td>
                  <a href="{{URL::to('/edit-bill/'.$bill->MaHD)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i> 
                  <a onclick="return confirm('Bạn có chắc muốn xóa hóa đơn này không?')" href="{{URL::to('/delete-bill/'.$bill->MaHD)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
            
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