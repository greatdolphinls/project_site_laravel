@extends('auth.layout')

@section('content')
	<form class="login-form" action="signIn" method="POST" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		<h3 class="form-title">Sign In</h3>
		<p class="text-center" style="color: #44b6ae">{{Session::get('error')}}</P>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="email" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> remember token </label>
			<button type="submit" class="btn green-haze pull-right">
				Sign In <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="row">
			<div class="forget-password">
				<div class="col-sm-4">
					<p>
						<a href="{{ url('signUp')}}" id="forget-password">
							Sign Up</a>
					</p>
				</div>
			</div>
		</div>
	</form>
@endsection
