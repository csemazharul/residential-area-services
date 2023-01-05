
@extends('./Frontend/layout/master')

@section('title', 'Resendial services')

@section('content')
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
					@include('../service-provider/layout/sidebar')
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">My Bookings</h4>
							</div>
							<div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select">
										<option>All</option>
										<option>Pending</option>
										<option>Inprogress</option>
										<option>Complete Request</option>
										<option>Rejected</option>
										<option>Cancelled</option>
										<option>Completed</option>
									</select>
								</div>
							</div>
						</div>
						
						@foreach($bookings as $booking)
						@php
                              
						$service_image = preg_replace('/[\]["]/i', '', $booking->service->image);
						$image = explode(',', str_replace( '\\', '', $service_image ));

						$status = '';
						if($booking->status == 0){
						$status = 'Pending';
						}elseif($booking->status == 1){
						$status = 'Approved';
						}elseif($booking->status == 2){
						$status = 'Inprogress';
						}elseif($booking->status == 3){
						$status = 'Completed';
						}elseif($booking->status == 4){
						$status = 'Cancelled';
						}
						@endphp
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="service-details.html" class="booking-img">
										<img src="{{asset('storage/uploads/'.$image[0]) }}" alt="{{$image[0]}}" height="120px" width="120px">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="service-details.html">{{$booking->service->name}}</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span>{{ \Carbon\Carbon::parse($booking->created_a)->format('d-m-Y')}} <span class="badge badge-pill badge-prof bg-warning">{{$status}}</span>
											</li>
											<li>
												<span>Service Date</span> {{$booking->bookDetails->service_date}} 
											</li>
											<li><span>Amount</span> BDT {{$booking->service->price}}</li>
											<li><span>Location</span>{{$booking->bookDetails->address}}, {{$booking->district->name}} ,{{$booking->division->name}}. </li>
											<li><span>Phone</span> {{$booking->bookDetails->contact}}</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs me-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('resources/frontend/assets/img/provider/provider-04.jpg')}}">
												</div>
												{{$booking->provider->name}}
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
								<a href="" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i>User Request Accept</a>
								<a href="" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Request</a>
								<a href="" class="btn btn-sm bg-info-light"><i class="fas fa-spinner"></i> Inprogress</a>
								<a href="" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Complete</a>
								</div>
							</div>
						</div>
						@endforeach
				
						<div class="pagination">
							<ul>
								<li class="active">
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li class="arrow">
									<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div> 
@endsection