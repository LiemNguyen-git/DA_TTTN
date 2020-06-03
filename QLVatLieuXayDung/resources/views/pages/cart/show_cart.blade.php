@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="http://localhost/MyLaravel/trang-chu">Trang chủ</a></li>
				  <li class="active" style="font-size: 50px;">Giỏ hàng của bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info" style="width: 1000px;">
				<?php
					$content = Cart::content();
					
				?>
				<table class="table table-condensed" style="width: 1000px;">
					<thead>
						<tr class="cart_menu" >
							<td class="image">Hình ảnh</td>
							
							<td class="description">Tên SP</td>
							
							<td class="price">Giá</td>
							{{-- <td class="size">Kích thước</td>
							<td class="color">Màu</td> --}}
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td>Xóa</td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product" style="width: 200px;">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="100" alt="" /></a>
							</td>
							
							<td class="cart_description" style="width: 200px;">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>{{$v_content->id}}</p>
							</td>
							<td class="cart_price" style="width: 200px;">
								<p>{{number_format($v_content->price).' '.'VNĐ'}}</p>
							</td>
							{{-- <td class="cart_size">
								<p>{{$v_content->options->size}}</p>
							</td>
							<td class="cart_color">
								<p>{{$v_content->options->color}}</p>
							</td> --}}
							<td class="cart_quantity" style="width: 200px;">
								<div class="cart_quantity_button">

									<form action="{{URL::to('/update-cart-quantity')}}" method="POST">

										{{ csrf_field() }}
									
									<input class="cart_quantity_input" style="width:80px;" type="text" name="cart_quantity" value="{{$v_content->qty}}" {{-- autocomplete="off" size="2" --}}>
									
									<input type="hidden" name="rowId_cart" value="{{$v_content->rowId}}" class="form-control">
									<input type="submit" name="update_qty" value="Cập nhật" class="btn_default btn-sm">
									</form>

								</div>
							</td>
							<td class="cart_total" style="width: 200px;">
								<p class="cart_total_price">
									
										<?php

										$subtotal= $v_content->price * $v_content->qty;
										echo number_format($subtotal).' '.'VNĐ';

										?>

								</p>
							</td>
							<td class="cart_delete" style="width: 200px;">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i>Xóa sản phẩm</a>
							</td>
						</tr>

						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Tổng hóa đơn của bạn là:</h3>
				
			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Thuế <span>000..</span></li>
							<li>Phí vận chuyển <span>Free</span></li>
						
							<li>Thành tiền <span>{{Cart::subtotal().' '.'VNĐ'}}</span></li>
						</ul>
							{{-- <a class="btn btn-default update" href="">Update</a> --}}
							   	


								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id != NULL && $shipping_id == NULL)
									{

								?>
								<a href="{{URL::to('/checkout')}}" class="btn btn-default check_out"> Thanh toán </a>
								

								<?php
									}
									elseif($customer_id != NULL && $shipping_id != NULL)
									{
								?>

								<a href="{{URL::to('/payment')}}" class="btn btn-default check_out">Thanh toán</a>

								<?php
								}else{
								?>			
								<a href="{{URL::to('/login-checkout')}}" class="btn btn-default check_out"> Thanh toán</a>
								<?php
								}
								?>	
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

@endsection