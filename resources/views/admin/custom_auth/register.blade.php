<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Trang Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/admin/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/admin/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('public/admin/js/jquery2.0.3.min.js')}}"></script>

<link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng ký</h2>
		<?php 
			$message = Session::get('message');
			if($message){
				echo '<span class="text-alert">',$message,'</span>';
				Session::put('message', null);
			}

		?>
		<form action="{{URL::to('/register')}}" method="post">
			{{-- Đảm bảo bảo mật --}}
			{{ csrf_field() }}
			@foreach ($errors->all() as $val)
				<p>{{$val}}</p>
			@endforeach
			<input type="text" class="ggg" name="admin_name" value="{{old('admin_name')}}" placeholder="Điền tên" >
            <input type="email" class="ggg" name="admin_mail" value="{{old('admin_mail')}}" placeholder="Điền email" >
            <input type="text" class="ggg" name="admin_phone" value="{{old('admin_phone')}}" placeholder="Điền số điện thoại" >
			<input type="password" class="ggg" name="admin_password" placeholder="Điền mật khẩu" >
			<span><input type="checkbox" />Nhớ đăng nhập</span>
			<h6><a href="#">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng ký" name="login">
		</form>

		<a href="{{URL::to('/register-auth')}}">Đăng ký Auth</a>
		<br/>
		<a href="{{URL::to('/login-auth')}}">Đăng nhập Auth</a>
		
		<!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
</div>

</div>
<script src="{{asset('public/admin/js/bootstrap.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/admin/js/scripts.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/admin/js/jquery.scrollTo.js')}}"></script>

{{-- Xây dụng mã captcha --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
</body>
</html>
