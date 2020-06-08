@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			
			<div class="review-payment">
				<h1>Đặt hàng thành công.</h1>
				<h5 style="margin: 50px 0;font-size: 25px; ">Cảm ơn bạn đã mua sắm tại " thichgiay.ga ".<br/>Đơn hàng của bạn sẽ được giao sớm nhất có thể.<br/>Vui lòng chuẩn bị trước số tiền "{{Cart::total().' '.'VNĐ'}}" để thanh toán.<br/>Chúc quý khách mua sắm vui vẻ.</h5>
			</div>
			
			<a href="http://localhost/MyLaravel/trang-chu" class="active">

				<button type="Submit" class="btn btn-success">
											Tiếp tục mua sắm
											</button>


			</a>

				{{-- <button type="submit" class="btn btn-default">Tiếp tục mua sắm</button>
			</form> --}}
			<form action="{{URL::to('/order-place')}}" method="POST">
						{{ csrf_field() }}
			
			</form>
		</div>
	</section> <!--/#cart_items-->

@endsection