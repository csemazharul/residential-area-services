<style>
	.color-nav-link{
		color: black !important;
	}
	/* Dropdown menu for language options */
.navbar .language-options ul {
  position: absolute;
  background-color: #333;
  color: #fff;
  display: none;
}

.nnavbar .language-options:hover ul {
  display: block;
}

.navbar nav .language-options ul li {
  margin: 0;
}
</style>

@php
use App\Models\Notifications;

$dashboardRoute='';
$bookingRoute = '';
$profileRoute='';
$providerNotifications=[];
$userNotifications=[];
$userUnseenCount=0;
$providerUnseenCount=0;

$locale = App::currentLocale();
$isUser = true;
				if(isset(Auth::user()->roles)){
					$role = Auth::user()->roles->pluck('name')->first();
        if ($role == 'admin') {
            // $role = 'admin';
            $route = route('admin.dashboard');
        } else if($role === 'service-provider'){
            $dashboardRoute = route('service-provider.dashboard');
						$bookingRoute = route('service-provider.bookings');
						$providerNotifications= Notifications::where('provider_id', Auth::user()->id)->get();
						$providerUnseenCount= Notifications::where('p_seen', 0)->get()->count();

						$isUser = false;
        }
        else if($role === 'user'){
						$profileRoute=route('user.profile');
            $dashboardRoute = route('user.dashboard');
						$bookingRoute = route('user.bookings');
						$userNotifications = Notifications::where('user_id', Auth::user()->id)->get();
						$userUnseenCount= Notifications::where('u_seen', 0)->get()->count();
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
					<a href="index.html" class="navbar-brand ">
						<!-- Here a Project Name with beautiful design -->
						
						<img src="{{asset('resources/frontend/assets/img/Logo12.png')}}" class="img-fluid" alt="Logo"/>
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
		
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
					<li>
								<a href="{{url('/')}}" target="">{{ __('header.nav_home') }}</a>
							</li>
					<li>
								<a href="{{url('/about-us')}}" target="">{{ __('header.nav_about') }}</a>
							</li>
							<li>
								<a href="{{route('categories')}}">{{ __('header.nav_categories') }}</a>
							</li>
							<li>
								<a href="{{route('services')}}">{{ __('header.nav_services') }}</a>
							</li>
							<li>
								<a href="{{route('contact-us')}}">{{ __('header.nav_contact') }}</a>
							</li>
	

										<li class="has-submenu">
							<a><i class="fas fa-globe"></i> {{__('header.nav_language')}}  <i class="fas fa-chevron-down"></i> </a>
							<ul class="submenu">
								<li><a href="{{url('lang/en')}}"> {{__('header.nav_english')}}</a></li>
								<li><a href="{{url('lang/bn')}}"> {{__('header.nav_bangla')}}</a></li>
							</ul>
						</li>

							<!-- lanaguage bangla english select option create -->

						
							@if( !Auth::user())
							<li>
								<a href="{{route('register')}}"> {{__('header.nav_register')}}</a>
							</li>
							<li>
								<a href="{{route('login')}}">{{__('header.nav_login')}}</a>
							</li>
							@endif

				
						</ul>
				
				</div>	


				@if(Auth::user())
				<ul class="nav header-navbar-rht">

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link color-nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow" id="notification_count">@if($isUser) {{$userUnseenCount}}@else {{$providerUnseenCount}}@endif</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-end notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">{{__('header.nav_notification')}}</span>
								<!-- <a href="javascript:void(0)" class="clear-noti">Clear All  </a> -->
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									@if($isUser)
									<!-- <input type="hidden" id="user_id" value="{{Auth::user()->id}} -->
									@foreach($userNotifications as $notification)
									<li class="notification-message">
										<a id="message_seen" data-id="{{$notification->id}}" style="cursor:pointer">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}">
												</span>
												<div class="media-body flex-grow-1" 
													<p class="noti-details"><strong id="new_seen{{$notification->id}}">@if($notification->u_seen===0){{'#New'}}@endif</strong> <span class="noti-title">{{$notification->u_body}}</span> </p>
													<p class="noti-time"><span class="notification-time">{{$notification->created_at->diffForHumans()}}</span></p>
												</div>
											</div>
										</a>
									</li>
									@endforeach
									@else
									@foreach($providerNotifications as $notification)
									<li class="notification-message">
										<a id="message_seen" style="cursor:pointer">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}">
												</span>
												<div class="media-body flex-grow-1" 
													<p class="noti-details"><strong id="new_seen">@if($notification->p_seen===0){{'#New'}}@endif</strong> <span class="noti-title">{{$notification->p_body}}</span></p>
													<p class="noti-time"><span class="notification-time">{{$notification->created_at->diffForHumans()}}</span></p>
												</div>
											</div>
										</a>
									</li>
									@endforeach
									@endif
								</ul>
							</div>
							<!-- <div class="topnav-dropdown-footer">
								<a href="notifications.html">View all Notifications</a>
							</div> -->
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link color-nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="{{asset('uploads/profile_picture/'.Auth::user()->picture)}}" alt="">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="{{asset('uploads/profile_picture/'.Auth::user()->picture)}}" alt="">
								</div>
								<div class="user-text">
									<h6>{{Auth::user()->name}}</h6>
									<p class="text-muted mb-0">{{__('header.nav_user')}}</p>
								</div>
							</div>
							<a class="dropdown-item" href="{{$dashboardRoute}}">{{__('header.nav_dashboard')}} </a>
							<a class="dropdown-item" href="{{route('user.favorites')}}">{{__('header.nav_favorite')}} </a>
							<a class="dropdown-item" href="{{$bookingRoute}}">{{__('header.nav_my_bookings')}} </a>
							<a class="dropdown-item" href="{{$profileRoute}}">{{__('header.nav_profile')}} </a>
							<!-- <a class="dropdown-item" href="all-services.html">Book Services</a> -->

							<form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{route('logout')}}"   onclick="event.preventDefault();
                                this.closest('form').submit();" > <span>{{__('header.nav_logout')}} </span></a>
                </form>

							
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				@endif

			</nav>
		</header>
		<!-- /Header -->
		
<script>
		$(document).ready(function(){
				$('#message_seen').click(function(e){
						var id = $(this).data('id');
						var url = '{{ route("notifications.seen", ":id") }}';
    				url = url.replace(':id', id);
							$.ajax({
								url: url,
								type: "GET",
								success: function(data){
									//new seen text will empty after ajax call
									$('#new_seen'+id).text('');
									$('#notification_count').text(data.count);
										
								}
						});
	
				});
		});
</script>