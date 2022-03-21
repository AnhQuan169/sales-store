<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Seo meta --}}
	{{-- <meta name="description" content="{{$meta_desc}}"> --}}
    <meta name="author" content="Nguyễn Anh Quân">
	<meta name="robots" content="">
	{{-- <meta name="keywords" content="{{$meta_keywords}}">
	<link rel="canonical" href="{{$url_cannical}}"> --}}
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico">
	{{-- Seo meta --}}

    {{-- <title>{{$meta_title}}</title> --}}
	<title>QK store</title>
    <link href="{{asset('public/client/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/client/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/client/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/client/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/client/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/client/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/client/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/client/css/sweetalert.css')}}" rel="stylesheet">

	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/client/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/client/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/client/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/client/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle" style="text-align: center;">
			@if (session()->has('message'))
				<div class="alert alert-success">
					{{session()->get('message')}}
				</div>
			@elseif (session()->has('error'))
				<div class="alert alert-danger">
					{{session()->get('error')}}
				</div>
			@endif
		</div>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/client/images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
								@if (Session::get('customer_id')!=null && Session::get('shipping_id')==null)
									<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								@elseif(Session::get('customer_id')!=null && Session::get('shipping_id')!=null)
									<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								@else
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								@endif
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
								@if (Session::get('customer_id'))
									<li class="dropdown">
										<a data-toggle="dropdown" class="dropdown-toggle" style="" >
											<span class="username">
												<?php 
													$name = Session::get('customer_name');
													if($name){
														echo $name;
													}
							
												?>
											</span>
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu extended logout">
											<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-logout"></i>Đăng xuất</a></li>
										</ul>
									</li>
								@else
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<form action="{{URL::to('/search-product')}}" method="POST">
							{{ csrf_field() }}
							<div class="search_box pull-right">
								<input type="text" name="keyword_product" placeholder="Tìm kiếm sản phẩm"/>
								<input type="submit" style="margin-top:0;color:white;font-size:15px;width: 100px;" name="search_item" class="btn btn-primary get" value="Tìm kiếm" />
							</div>								
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
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
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/client/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/client/images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/client/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/client/images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/client/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('public/client/images/home/pricing.png')}}" class="pricing" alt="" />
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach ($category as $key => $cate_pro )
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/category-product/'.$cate_pro->category_id)}} ">{{$cate_pro->category_name}}</a></h4>
									</div>
								</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								@foreach ($brand as $key => $brand_pro )
									<ul class="nav nav-pills nav-stacked">
										<li><a href="{{URL::to('/brand-product/'.$brand_pro->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand_pro->brand_name}}</a></li>
									</ul>
								@endforeach
								
							</div>
						</div><!--/brands_products-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
				<!-- Sử dụng  để gọi lại đoạn nội dung trong home.blade.php với tên được đặt là 'content' ở bên file kia -->
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/client/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/client/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/client/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/client/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/client/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/client/js/jquery.js')}}"></script>
	<script src="{{asset('public/client/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/client/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/client/js/price-range.js')}}"></script>
    <script src="{{asset('public/client/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/client/js/main.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="{{asset('public/client/js/sweetalert.js')}}"></script>

	{{-- Xây dụng mã captcha --}}
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	{{-- Share Facebook --}}
	{{-- <div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="AdZgI5zJ"></script>
	 --}}
	
	 {{-- Thêm sản phẩm vào giỏ hàng với Ajax --}}
	<script type="text/javascript">
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				var id = $(this).data('id');
				
				var cart_product_id = $('.cart_product_id_'+id).val();
				var cart_product_name = $('.cart_product_name_'+id).val();
				var cart_product_image = $('.cart_product_image_'+id).val();
				var cart_product_price = $('.cart_product_price_'+id).val();
				var cart_product_qty = $('.cart_product_qty_'+id).val();
				var _token = $('input[name="_token"]').val();
				
				$.ajax({
					url: '{{url('/add-cart-ajax')}}',
					method: "POST",
					data:{cart_product_id:cart_product_id, 
						cart_product_name:cart_product_name, 
						cart_product_image:cart_product_image, 
						cart_product_price:cart_product_price, 
						cart_product_qty:cart_product_qty,
						_token:_token},
					success:function(data){
						swal({
							title: "Đã thêm sản phẩm vào giỏ hàng",
							text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
							showCancelButton: true,
							cancelButtonText: "Xem tiếp",
							confirmButtonClass: "btn-success",
							confirmButtonText: "Đi đến giỏ hàng",
							closeOnConfirm: false
						},
						function() {
							window.location.href = "{{url('/show-cart')}}";
						});
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			// Chọn tỉnh, huyện, xã với Ajax
			$('.choose').on('change',function(){
				var action = $(this).attr('id');
				var dd_id = $(this).val();
				var _token = $('input[name="_token"]').val();
				var result = '';
				if(action=='city'){
					result = 'province';
				}else{
					result = 'wards';
				}
				$.ajax({
					url: '{{url('/select-delivery-home')}}',
					method: 'POST',
					data:{action:action,dd_id:dd_id,_token:_token},
					success:function(data){
						$('#'+result).html(data);
					}
				});
			});
		})
	</script>

	<script>
		$(document).ready(function(){
			$('.calculator_delivery').click(function(){
				var city_id = $('.city').val();
				var qh_id = $('.province').val();
				var xa_id = $('.wards').val();
				var _token = $('input[name="_token"]').val();
				if(city_id=='' || qh_id =="" || xa_id==""){
					alert("Hãy chọn địa điểm để tính phí vận chuyển");
				}else{
					$.ajax({
						url: '{{url('/calculator-fee')}}',
						method: 'POST',
						data:{city_id:city_id,qh_id:qh_id,xa_id:xa_id,_token:_token},
						success:function(data){
							location.reload();
						}
					});
				}
				
			});
		});
	</script>
	
</body>
</html>