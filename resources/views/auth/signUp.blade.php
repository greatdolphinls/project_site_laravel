@extends('auth.layout')

@section('content')
	<form class="register-form" action="signUp" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		<input type="hidden" name="adminEditFlag" value="0"/>
		<h3>Sign Up</h3>
		
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="email" name="email"/>
			</div>
		</div>
		<p class="text-center" style="color: #44b6ae">{{Session::get('error')}}</P>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="password" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">confirm password</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="confirm password" name="confirm_password"/>
				</div>
			</div>
		</div>
		<div class="form-actions">
			<a href="{{ url('/')}}"  id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i> back </a>
			<button type="submit" id="register-submit-btn" class="btn green-haze pull-right">
				Sign up <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
@endsection
