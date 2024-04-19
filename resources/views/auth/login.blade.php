<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:29:27 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>W3CRM Customer Relationship Management</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{url('assets/images/favicon.png')}}">
	<link href="{{url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
   <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
							<!-- <p>Sign in to your account to start using W3CRM</p> -->
						</div>
						<form method="POST" action="{{ route('login') }}">
            @csrf
        

			<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input class="form-control form-control"  type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" >
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
							</div>
							
        
						
          


			<div class="mb-4">
								<label class="mb-1 text-dark">Password</label>
								<input class="form-control form-control"  type="password" id="password" name="password" placeholder="Password">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
							</div>
							


							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
        
        </form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index.html"><img src="images/logo-full.png" class="mb-3 logo-dark" alt=""></a>
							<a href="index.html"><img src="images/logi-white.png" class="mb-3 logo-light" alt=""></a>
							
							<p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
						</div>
						<div class="login-media text-center">
							<img src="{{url('assets/images/login.png')}}" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="{{url('assets/vendor/global/global.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{url('assets/js/deznav-init.js')}}"></script>
<script src="{{url('assets/js/demo.js')}}"></script>
  <script src="{{url('assets/js/custom.js')}}"></script>
<script src="{{url('assets/js/styleSwitcher.js')}}"></script>

</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:29:29 GMT -->
</html>