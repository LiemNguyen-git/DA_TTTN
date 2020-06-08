@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tìm kiếm loại sản phẩm
    </div>
    <div class="row w3-res-tb">
     
     {{--  <div class="col-sm-3">
      </div> --}}
      <div class="col-sm-5">
        <form action="{{URL::to('/tim-kiem-loai')}}" method="POST">
              {{csrf_field()}}
        <div class="input-group">
          <input type="text" class="input-sm form-control" name="keywords_search" placeholder="Nhập loại sản phẩm cần tìm kiếm">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">Tìm</button>
          </span>
        </div>
        <h4>Số loại sản phẩm tìm được là:
              <?php
            $na = Count($category);
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
            <th>Tên loại</th>
            <th>Mô tả loại sản phẩm</th>
            <th>Hiển thị</th>
            <th>Ngày thêm</th>
            

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          @foreach($category as $key => $cate_pro)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->category_name }}</td>
            <td>{{ $cate_pro->category_desc }}</td>
            <td><span class="text-ellipsis">
    <!-- kich hoat san pham -->
                <?php

                  if($cate_pro->category_status==0)
                    {
                ?>
                      <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"> <span class="fa-thumb-styling fa fa-thumbs-up"></span> </a>
                <?php
                    }
                  else
                    {
                ?>
                      <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"> <span class="fa-thumb-styling fa fa-thumbs-down"></span> </a>
                <?php
                    }

                ?>

            </span></td>
            <td>{{ $cate_pro->created_at }}</td>
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i> 
    <!-- pencil-square co nghia la  -->
    <!-- onclick kiem tra xoa -->
              <a onclick="return confirm('Bạn có chắc muốn xóa loại giày này không?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active" ui-toggle-class="">
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