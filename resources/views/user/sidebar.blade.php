<div class="mb-4">
							<div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
								<img alt="profile image" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}" class="avatar-lg rounded-circle">
								<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<h6 class="mb-0">Test User</h6>
									<p class="text-muted mb-0">Member Since Apr 2020</p>
								</div>
							</div>
						</div>
						<div class="widget settings-menu">
							<ul role="tablist" class="nav nav-tabs">
								<li class="nav-item current">
									<a href="{{url('/dashboard')}}" class="nav-link">
										<i class="fas fa-chart-line"></i> <span>Dashboard</span>
									</a>
								</li>
								<li class="nav-item current">
									<a href="{{route('user.bookings')}}" class="nav-link">
										<i class="far fa-calendar-check"></i> <span>My Bookings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{url('/user/profile')}}" class="nav-link">
										<i class="far fa-user"></i> <span>Profile Settings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{route('user.favorites')}}" class="nav-link">
										<i class="fas fa-heart"></i> <span>Favourites</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{route('user.reviews')}}" class="nav-link">
										<i class="far fa-star"></i> <span>Reviews</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="user-payment.html" class="nav-link">
										<i class="fas fa-hashtag"></i> <span>Payment</span>
									</a>
								</li>
							</ul>
						</div>