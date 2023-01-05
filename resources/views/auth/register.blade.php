@extends('./Frontend/layout/master')

@section('title', 'Register')

@section('content')
	<!-- User Register Modal -->
	<div class="" id="user-register" style="padding:5px" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Register</h3>
					</div>
					<form action="{{ route('register') }}">
						<div class="form-group form-focus">
							<label class="focus-label">Name</label>
							<input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter the name">
						</div>

                        <div class="form-group">
											<label>Account Type <span class="text-danger"></span></label>
                                            <select class="form-control form-select" name="role">
                            <option selected>Selected</option>
                            <option value="user">user</option>
                             <option value="service-provider">service-provider</option>
                         </select>
										</div>

						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="text" class="form-control" value="{{old('name')}}" placeholder="Enter the email" name="email" value="{{old('email')}}" required >
						</div>
					
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input class="form-control" placeholder="********"  type="password"
                                name="password"
                                required autocomplete="new-password">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Confirm Password</label>
							<input class="form-control" placeholder="********"  type="password"
                                name="password_confirmation"
                                required autocomplete="new-password">
						</div>
						<div class="text-end">
							<a class="forgot-link" href="{{ route('login') }}">Already have an account?</a>
						</div>
						<div class="d-grid">
							<button class="btn btn-info btn-block btn-lg login-btn" type="submit">Register</button>
						</div>
			
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>

@endsection
