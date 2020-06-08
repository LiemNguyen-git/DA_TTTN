 <!DOCTYPE html>
<html lang="en">

<head>
	

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ | Thích Giày</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precompoassetsed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body background="control-carousel" style="background-image:url('public/frontend/images/backgound2.jpg'); background-repeat: no-repeat; background-size: cover;">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li>THÔNG TIN: NHÓM 1- D16_TH04 </li>
								<li><a href="tel:0944408844"><i class="fa fa-phone" ></i> </a></li>
								<h4> Thành viên: Liêm-Nguyên-Thạch-Phúc</h>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
								<li><a>Lớp: D16_TH04 </a></li>
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="http://localhost/MyLaravel/trang-chu"><img src="{{asset('public/frontend/images/logo3.png')}}" style="height: 80px; width: 200px;" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right" >
							<ul class="nav navbar-nav" >
								{{-- <li><a style="color: #FE2EF7;" href="https://drive.google.com/file/d/1CsKwPK36v_U6kHY9JkNSYyFGbn8CBMsB/view?usp=sharing"><i class="fa fa-user"></i> Link source code và database</a></li> --}}
								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id != NULL)
									{
										
								?>
								<li><a href="{{URL::to('/logout-checkout')}}" style="font-weight: bold;"><i class="fa fa-lock"></i>{{$customer_name = Session::get('customer_name')}}-Đăng xuất</a></li>
									
								<?php
									}else{
								?>

								<li><a href="{{URL::to('/login-checkout')}}" style="font-weight: bold;"><i class="fa fa-lock"></i> Đăng nhập </a></li>

								<?php
								}
								?>		


								<?php
									$customer_id = Session::get('customer_id');
									$order_id = Session::get('order_id');
									if($customer_id != NULL)
									

								?>
								<li ><a href="{{URL::to('/show-order')}}" style="font-weight: bold;"><i class="fa fa-shopping-cart"></i> Xem lại đơn hàng </a></li>
								
								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id != NULL && $shipping_id == NULL)
									{

								?>
								<li><a href="{{URL::to('/checkout')}}" style="font-weight: bold;"><i class="fa fa-crosshairs"></i> Thanh toán </a></li>
								

								<?php
									}
									elseif($customer_id != NULL && $shipping_id != NULL)
									{
								?>

								<li><a href="{{URL::to('/payment')}}" style="font-weight: bold;"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

								<?php
								}else{
								?>			
								<li><a href="{{URL::to('/login-checkout')}}" style="font-weight: bold;"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<?php
								}
								?>	

								
								<li><a href="{{URL::to('/show-cart')}}" style="font-weight: bold;"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>


								
							</ul>
								
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row" >
					<div class="mainmenu pull-left" >
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active"><h4>TRANG CHỦ</h4></a></li>
								<li><a href="{{URL::to('/')}}" class="active"><h4>NEW FASHION</h4></a></li>
								<li><a href="{{URL::to('/')}}" class="active"><h4>BLOG</h4></a></li>
								<li class="dropdown"><a href="#"><h4>DANH MỤC GIÀY</h4><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	@foreach($category as $key => $cate)
	                                        <li><a href="{{URL::to('/loai-san-pham/'.$cate->category_id)}}">{{$cate->category_name}} </a></li>
											
										@endforeach
                                    </ul>
                                </li> 
							
									
								<li class="dropdown"><a href="#"><h4>THƯƠNG HIỆU GIÀY</h4><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    		@foreach($brand as $key => $brand)

	                                        <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{$brand->brand_name}} </a></li>
											
											@endforeach
                                    </ul>
                                </li> 

							</ul>
						</div>
						<div class="col-sm-4" style="text-align: left;">
						<?php 
								$keywords_search= isset($_POST['keywords_search'])?$_POST['keywords_search']:'';
							?>
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
							{{csrf_field()}}
							
						<div class="search_box pull-right">
							<input type="text" name="keywords_search" style=" color:#GGG;width:200px;" value="<?php echo $keywords_search; ?>"/>
							<input type="submit" style="margin-top: 0; color:#GGG;width:100px; font-size: 20px;" name="search_items" class="btn btn-info btn-sm" value="Tìm Kiếm" />
						</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                           <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span></span>GIÀY STORE</h1>
                                    <h2>Nâng nêu bàn chân VIỆT</h2>
                                    <p>Nâng tầm giá trị cuộc sống. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img style="height: 300px; width: 800px;" src="{{asset('public/frontend/images/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{('public/frontend/images/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span></span>GIÀY STORE</h1>
                                    <h2>Nâng nêu bàn chân VIỆT</h2>
                                    <p>Thời trang cá tính. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img style="height: 300px; width: 800px;" src="{{asset('public/frontend/images/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{('public/frontend/images/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span></span>GIÀY STORE</h1>
                                    <h2>Nâng nêu bàn chân VIỆT</h2>
                                    <p>Phong cách dộc đáo. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img style="height: 300px; width: 800px;" src="{{asset('public/frontend/images/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->

		<div class="header-bottom"><!--header-bottom-->
			
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	
	<section>
		<div class="container">
			<div class="row">
				
				
				<div class="col-sm-12 padding-right">
					
					@yield('content') 
					
					
					
					
				</div>
		{{-- 	</div>
		</div> --}}
	</section>
	
	<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget" style="align-content: center;">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Danh Mục</h2>
							<ul class="nav nav-pills nav-stacked">
								
								<li><a href="#">Thời trang nam</a></li>
								<li><a href="#">Thời trang nam</a></li>
								<li><a href="#">Phụ kiện nổi bật</a></li>
								<li><a href="#">Chai xịt rửa giày</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản đổi trả</a></li>
								<li><a href="#">Chính sách bảo hành</a></li>
								<li><a href="#">Chính sách hoàn tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu về </h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình liên kết</a></li>
								<li><a href="#">Bản quyền</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Khuyến mãi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bảo hành 1 năm</a></li>
								<li><a href="#">Tích điểm khách hàng</a></li>
								<li><a href="#">Giảm 10% ngày sinh nhật</a></li>
								<li><a href="#">Giảm 20% ngày lễ</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản đổi trả</a></li>
								<li><a href="#">Chính sách bảo hành</a></li>
								<li><a href="#">Chính sách hoàn tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Thông tin mua hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="tel:0999.888.777">Mua hàng: 0999.888.777</a></li>
								<li><a href="tel:0999.888.888">Khiếu nại: 0999.888.888</a></li>
								<li><a href="tel:0999.888.666">Hỗ trợ trả góp: 0999.888.666</a></li>
								<li><a href="tel:0999.888.999">Hỗ trợ kỹ thuật: 0999.888.999</a></li>
								
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<h3 class="pull-left" style="text-align: center;">Hãy đến với GIAY STORE chúng tôi luôn chào đón bạn.</h3>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>'
</html>