
@extends('./Frontend/layout/master')

@section('title', 'Online Home services| Profile')

@section('content')
<div class="content">
			<div class="container">
				<div class="row"> 
					<div class="col-xl-3 col-md-4">
          @include('user.sidebar')
			
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="tab-content pt-0">
							<div class="tab-pane show active" id="user_profile_settings">
								<div class="widget">
									<!-- session alert message show -->
									@if (session('success'))
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											{{ session('success') }}
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										@endif
									<h4 class="widget-title">Profile Settings</h4>
									<form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="row">
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Name</label>
												<input class="form-control" name="name" type="text" value="{{Auth::user()->name}}" >
											</div>
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Email</label>
												<input class="form-control"  type="email" value="{{Auth::user()->email}}" readonly>
											</div>
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Phone</label>
												<input class="form-control" name="contact" type="text" value="{{Auth::user()->contact}}" >
											</div>
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Picture</label>
												<input class="form-control" name="picture" type="file" >
											</div>
											<div class="form-group col-xl-12">
												<button name="form_submit" id="form_submit" class="btn btn-primary ps-5 pe-5" type="submit">Update</button>
											</div> 
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  @endsection    