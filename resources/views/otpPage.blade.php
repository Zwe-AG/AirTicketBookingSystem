<!DOCTYPE html>
<html lang="en">
<head>
	<title> AccountLogin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/7856/7856126.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signIn/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signIn/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signIn/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset('signIn/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('signIn/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signIn/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signIn/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signIn/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{{asset('signIn/>css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signIn/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://cdn.pixabay.com/photo/2017/06/05/11/01/airport-2373727__480.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Phone OTP Generate
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="{{route('otp#generate')}}" method="POST">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter Your Registered Phone">
						<input class="input100" type="phone" name="phone" placeholder="Enter Your Registered Phone" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Generate
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('signIn/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("signIn/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signIn/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('signIn/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signIn/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signIn/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('signIn/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signIn/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('signIn/js/main.js')}}"></script>

</body>
</html>

