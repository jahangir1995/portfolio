<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="{{asset('backend/css/login.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-reg-panel">


		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>

		<form action="{{route('admin.login')}}" method="POST">@csrf
			<div class="white-panel">
		@include('admin.alert');

				<div class="login-show">
					<h2>LOGIN</h2>
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" class="button" value="Login">
					<a href="">Forgot password?</a>
				</div>
			</form>

				<div class="register-show">
					<h2>REGISTER</h2>
					<input type="text" placeholder="Email">
					<input type="password" placeholder="Password">
					<input type="password" placeholder="Confirm Password">
					<input type="button" value="Register">
				</div>
			</div>
		
	</div>


<script src="{{asset('backend/js/login.js')}}" ></script>