@extends('layout.admin.dashboard')

@section('content')
<div>
	<div class="container">
		<div class="row">
			<div class="col border border-primary d-flex justify-content-center rounded offset-3 col-md-6">
				<div id="login-box" class="col-md-12">
					<form id="login-form1" class="form bg-1" action="" method="post">
						<h2 class="text-left text-info">Login</h2>
							<br>
							<div class="form-group">
							<div class="input-group-append">
								<div class="input-group-text"><span data-feather="user"></span></div>
								<input type="text" placeholder="Username" name="username" id="username" class="form-control"></input>
							</div>
							</div>

						<div class="form-group">
							<div class="input-group-append">
								<div class="input-group-text"><span data-feather="key"></span></div>
								<input type="text" placeholder="Password" name="username" id="username" class="form-control"></input>
							</div>
						</div>

						<div class="form-group ">
							<input id="remember-me" name="remember-me" type="checkbox">
							<span class="text-info"> Remember me</span>
							<div class="float-right text-right">
							    <a href="#" class="text-info" >Forgot Password?</a>
							</div>
						</div>
					    <div class="form-group">
							<span class="text-right float-right">
									<a href="#" class="text-info">sign up </a>
									<input type="submit" name="submit" class="btn btn-info btn-md" value="Log In">
							</span>
							<br>
					    </div>
						<br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
