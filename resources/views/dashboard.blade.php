
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
								<a href="user-bookings.html" class="dash-widget dash-bg-1">
									<span class="dash-widget-icon">2</span>
									<div class="dash-widget-info">
										<span>Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="user-reviews.html" class="dash-widget dash-bg-2">
									<span class="dash-widget-icon">0</span>
									<div class="dash-widget-info">
										<span>Reviews</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="notifications.html" class="dash-widget dash-bg-3">
									<span class="dash-widget-icon">1</span>
									<div class="dash-widget-info">
										<span>Notification</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>﻿
		

@endsection
