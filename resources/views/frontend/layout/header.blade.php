<style>
	.color-nav-link{
		color: black !important;
	}
</style>

@php
$dashboardRoute='';
$bookingRoute = '';
				if(isset(Auth::user()->roles)){
					$role = Auth::user()->roles->pluck('name')->first();
        // return $role;
        if ($role == 'admin') {
            // $role = 'admin';
            $route = route('admin.dashboard');
        } else if($role === 'service-provider'){
            $dashboardRoute = route('service-provider.dashboard');
						$bookingRoute = route('service-provider.bookings');
        }
        else if($role === 'user'){
            $dashboardRoute = route('dashboard');
						$bookingRoute = route('user.bookings');
        }
				}
@endphp
<!-- Header -->
		<header class="header header-three">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="index.html" class="navbar-brand logo-small">
						<img src="resources/frontend/assets/img/logo-icon-2.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
		
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
					<li>
								<a href="{{url('/')}}" target="">Home</a>
							</li>
							<li>
								<a href="{{route('categories')}}">Categories</a>
							</li>
							<li>
								<a href="{{route('services')}}">Services</a>
							</li>
							<li>
								<a href="{{route('contact-us')}}">Contacts</a>
							</li>
							<li>
								<a href="{{route('categories')}}">Feedback</a>
							</li>
							@if( !Auth::user())
							<li>
								<a href="{{route('register')}}">Register</a>
							</li>
							<li>
								<a href="{{route('login')}}">Login</a>
							</li>
							@endif

				
						</ul>
				
				</div>	


				@if(Auth::user())
				<ul class="nav header-navbar-rht">

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link color-nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-end notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti">Clear All  </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Test User has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="resources/frontend/assets/img/customer/user-02.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Nancy Olson has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="resources/frontend/assets/img/customer/user-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Ramona Kingsley has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="resources/frontend/assets/img/customer/user-04.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Ricardo Lung has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 6:20 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notifications.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('resources/frontend/assets/img/customer/user-05.jpg')}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Annette Silva has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">17 Sep 2020 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="notifications.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link color-nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}" alt="">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}" alt="">
								</div>
								<div class="user-text">
									<h6>Test User</h6>
									<p class="text-muted mb-0">User</p>
								</div>
							</div>
							<a class="dropdown-item" href="{{$dashboardRoute}}">Dashboard </a>
							<a class="dropdown-item" href="favourites.html">Favourites</a>
							<a class="dropdown-item" href="{{$bookingRoute}}">My Bookings</a>
							<a class="dropdown-item" href="user-settings.html">Profile Settings</a>
							<!-- <a class="dropdown-item" href="all-services.html">Book Services</a> -->

							<form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{route('logout')}}"   onclick="event.preventDefault();
                                this.closest('form').submit();" > <span>Log Out</span></a>
                </form>

							
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				@endif

			</nav>
		</header>
		<!-- /Header -->
		