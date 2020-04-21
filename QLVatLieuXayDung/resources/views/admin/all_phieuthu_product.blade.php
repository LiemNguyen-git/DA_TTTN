 @extends('admin_layout')
 @section('admin_content') 

    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách phiếu thu
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <?php
         $message=Session::get('message');
         if($message)
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
            <th>Mã Phiếu Thu</th>
            <th>Ngày thanh toán</th>
            <th>Số tiền thu</th>
            <th>Đợt Thu</th>
            <th>Trạng Thái</th>
            <th>Mã Đơn Đặt Hàng</th>
            <th>Mã Nhân Viên</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_phieuthu_product as $key =>$phieuthu_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $phieuthu_pro->MaPT }}</td>
            <td>{{$phieuthu_pro->NgayThanhToan}}</td>
            <td>{{$phieuthu_pro->SoTienThu}}</td>
            <td>{{$phieuthu_pro->DotThu}}</td>
          
           {{--  <td>{{$phieuthu_pro->DON_DAT_HANGMaDHH}}</td>
            <td>{{$phieuthu_pro->NHAN_VIENMaNV}}</td> --}}
             <td>
                <span class="text-ellipsis">
                  <?php 
                  if( $phieuthu_pro->TrangThai==0 ){
                    echo 'Ẩn';
                  }

                  else
                  { 
                    echo 'Hện';
        
                  } 
                  ?>

                </span>
          </td>
            
           {{--  <td>
              <a href="{{URL::to('/edit-phieuthu-product/'.$phieuthu_pro->phieuthu_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
               </a>
               <a onclick="return confirm('Bạn có muốn xóa ?')" href="{{URL::to('/delete-phieuthu-product/'.$phieuthu_pro->phieuthu_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
               </a>

            </td> --}}
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection