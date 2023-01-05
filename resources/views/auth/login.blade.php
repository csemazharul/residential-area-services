
@extends('./Frontend/layout/master')

@section('title', 'Login')

@section('content')

	<!-- Login Modal -->
<div class="" id="login_modal" style="padding:5px">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
		
				<div class="modal-body">
					<div class="login-header">
						<h3>Login <span></span></h3>
					</div>
					<form method="POST" action="{{ route('login') }}">
                    @csrf
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter the email address">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" name="password" class="form-control" placeholder="********">
						</div>
						<div class="text-end">	
						</div>
						<div class="d-grid log-in-four">
							<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
						</div>
						<div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Login Modal -->

@endsection    
