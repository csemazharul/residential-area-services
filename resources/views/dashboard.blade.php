
@extends('./Frontend/layout/master')

@section('title', 'Dashboard')
@push('import-css')
<link rel="stylesheet" href="{{asset('resources/frontend/assets/css/style.css')}}">
@endpush
@section('content')
		
<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
						@include('user.sidebar')
					</div>  

					<div class="col-xl-9 col-md-8">
						<div class="row">
							<div class="col-lg-4">
								<a href="{{route('user.bookings')}}" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['pending']}}</span>
									<div class="dash-widget-info">
										<span>Pending Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="user-reviews.html" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['approved']}}</span>
									<div class="dash-widget-info">
										<span>Approved Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="notifications.html" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['inprogress']}}</span>
									<div class="dash-widget-info">
										<span>Inprogress Bookings</span>
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<a href="{{route('user.bookings')}}" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['completed']}}</span>
									<div class="dash-widget-info">
										<span>Complete Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="user-reviews.html" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['cancelled']}}</span>
									<div class="dash-widget-info">
										<span>Cancel Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="notifications.html" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">{{$data['review']}}</span>
									<div class="dash-widget-info">
										<span>Reviews</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>﻿
		

@endsection
