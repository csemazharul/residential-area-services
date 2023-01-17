
@extends('./Frontend/layout/master')

@section('title', 'Online Home services')

@section('content')
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
					@include('user.sidebar')
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">User Bookings</h4>
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
 
									$service_image = preg_replace('/[\]["]/i', '', $booking->serviceDetails->image);
									$images = explode(',', str_replace( '\\', '', $service_image ));
					
						@endphp
						<div class="bookings">
							<div class="booking-list">
								<div class="booking-widget">
									<a href="{{url('/services/'.$booking->service->id)}}" class="booking-img">
										<img src="{{asset('uploads/'.$images[0])}}" alt="User Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="{{url('/services/'.$booking->service->id)}}">{{$booking->service->name}}</a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span>{{ \Carbon\Carbon::parse($booking->created_a)->format('d-m-Y')}} <span class="badge badge-pill badge-prof bg-warning">{{$status}}</span>
											</li>
											<li>
												<span>Service </span> {{$booking->package->name}} 
											</li>
											<li>
												<span>Service Date</span> {{$booking->bookDetails->service_date}} 
											</li>
											<li><span>Amount</span> ৳ {{$booking->bookDetails->amount}}</li>
											<li><span>Location</span>{{$booking->bookDetails->address}}, {{$booking->district->name}} ,{{$booking->division->name}}. </li>
											<li><span>Phone</span> {{$booking->bookDetails->contact}}</li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs me-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('uploads/profile_picture/'.$booking->provider->picture) }}">
												</div>
												{{$booking->provider->name}}
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-action">
						
								<a href="" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel the Request</a>

								</div>
							</div>
						</div>
						@endforeach
						
						<div class="pagination">
						@if ($bookings->lastPage() > 1)
                                    <ul>
                                        <li class="{{ ($bookings->currentPage() == 1) ? 'disabled' : '' }}">
                                            <a href="{{ $bookings->url(1) }}">
                                                <i class="fas fa-angle-left"></i></a>
                                        </li>
                                        @for ($i = 1; $i <= $bookings->lastPage(); $i++)
                                            <li class="{{ ($bookings->currentPage() == $i) ? 'active' : '' }}">
                                                <a href="{{ $bookings->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($bookings->currentPage() == $bookings->lastPage()) ? 'arrow' : '' }}">
                                            <a href="{{ $bookings->url($bookings->currentPage()+1) }}">
                                                <i class="fas fa-angle-right" ></i> </a>
                                        </li>
                                    </ul>
                                @endif
						</div>

					</div>
				</div>
			</div>
		</div> 
@endsection