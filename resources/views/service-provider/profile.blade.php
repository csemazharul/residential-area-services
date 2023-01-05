
@extends('./Frontend/layout/master')

@section('title', 'Resendial services| Profile')

@section('content')

<div class="content">
			<div class="container">
				<div class="row"> 
					<div class="col-xl-3 col-md-4">
					@include('../service-provider/layout/sidebar')
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="tab-content pt-0">
							<div class="tab-pane show active" id="user_profile_settings">
              @if (session('success'))
    
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> {{session('success')}}
                </div>
                @endif
								<div class="widget">
									<h4 class="widget-title">Profile Settings</h4>
									<form action="{{route('service-provider.profile-update')}}" method="post" enctype="multipart/form-data">
									@csrf	
                  <div class="row">
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Name</label>
												<input class="form-control" type="text" value="{{$user->name}}" name="name">
											</div>
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Email</label>
												<input class="form-control" type="email" value="{{$user->email}}" readonly>
											</div>
							
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Mobile Number</label>
												<input class="form-control no_only" type="text" value="{{$user->provider->contact}}" name="contact"  required>
											</div>
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Profile Picture</label>
												<input class="" type="file" name="profile_picture"  required>
											</div>
											<div class="col-xl-12">
												<h5 class="form-title">Address</h5>
											</div>
								
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Division</label>
												<select class="form-control form-select" name="division_id" id="division_id">
													<option disabled selected>Select Division</option>
                          @foreach($divisions as $division)
                          <option value="{{$division->id}}" @php if($division->id==$user->provider->division_id) { echo 'selected'; } @endphp >{{$division->bn_name}}</option>
                          @endforeach
												</select>
											</div>
                      <div class="form-group col-xl-6">
												<label class="me-sm-2">District</label>
												<select class="form-control form-select" name="district_id" id="district_id">
													<option disabled selected>Select District</option>
												</select>
											</div>
                      <div class="form-group col-xl-12">
												<label class="me-sm-2">Address</label>
												<input type="text" class="form-control" name="address_details" value="{{$user->provider->address_details}}">
											</div>
                      
											<div class="form-group col-xl-6">
												<label class="me-sm-2">Password</label>
												<input class="form-control no_only" type="text" name="password"  required>
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
  @section('script')
<script type="text/javascript">


actionElementById('division_id', 'District', '{{url('get-district')}}', 'district_id');
function actionElementById(elementId, title, url, actionElementId) {
  const eventName = document.getElementById(elementId);
  const actionEvent = document.getElementById(actionElementId)
  eventName.addEventListener('change', function(e) {
    const param = e.target.value;
    if (actionEvent) {
      const route = url + '/' + param;
      const data = fetchData(route);
      console.log(data)
      data.then(items => {
        let options = `<option value="">Select ${title}</option>`;
        items.forEach(item => {
          options += `<option value="${item.id}">${item.bn_name}</option>`;
        });
        actionEvent.innerHTML = options;
      });
    } else {
      element.innerHTML = '';
    }
  });
}

function fetchData(url, data = {}) {
  return fetch(`${url}`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })
    .then(res => res.json())
    .catch(err => {
      return err
    })
}


</script>
@stop 