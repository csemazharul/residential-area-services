
@extends('./Frontend/layout/master')

@section('title', 'Online Home services')
@push('css')
	<style>
		.s-w-17{
			width: 20%;
			display: flex;
			display: table-cell;
			vertical-align: middle;
			position: relative;
			padding: 0 10px;
		}
		.s-btn{
			border: 1px solid #DA1C2E;
			background: #DA1C2E;
			border-radius: 4px;
			font-size: 16px;
			min-width: 211px;
		}
	</style>
@endpush
@section('content')

		<!-- Hero Section -->
		<section class="hero-section hero-three">
			<div class="layer">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-10">
							<div class="section-search-box d-flex align-items-center aos" data-aos="fade-up">
								<div class="section-search">
									<!-- <h3><span>World's Largest</span> <br> Marketplace</h3> -->
									<div class="search-box">
										<form action="{{route('services.search')}}" method="GET"> 
											<div class="s-w-17">
												<div class="form-group mb-0">
													
													<select class="form-control" name="division_id" id="division_id">
														<option selected disabled>{{__('home.home_division')}}</option>
														@foreach($divisions as $division)
															<option value="{{$division->id}}">{{$division->name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="district_id" id="district_id">
														<option selected disabled>{{__('home.home_district')}}</option>
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="upazila_id" id="upazila_id">
														<option selected disabled>{{__('home.home_upazila')}}</option>
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="union_id" id="union_id">
														<option selected disabled>{{__('home.home_union')}}</option>
													</select>
												</div>
											</div>
											<div class="s-btn s-w-17">
												<button class="btn search_service" ><i class="fa fa-search"></i>{{__('home.home_search')}}</button>
											</div>
										</form>
									</div>
							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
		<!-- Category Section -->
		<section class="category-section category-section-three">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-section-head aos" data-aos="fade-up">
							<h2>{{__('home.home_category_lebel')}}</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>{{__('home.home_category_find_lebel')}}</span>
							<div class="section-three">
								<h2>{{__('home.home_service_cat')}}</h2>
							</div>
						</div>
						<div class="catsec aos" data-aos="fade-up">
							<div class="row">
							@foreach ($categories as $category) 
								<div class="col-lg-4 col-md-6">
									<a href="{{route('category.services',['category'=>$category->id])}}">
										<div class="cate-widget">
										<img src="{{ asset('uploads/'.$category->image) }}" width="376px" height="250px"/>
											<div class="cate-title">
												<h3><span>  {{$category->name}}</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>{{count($category->services)}}</span>
											</div>
										</div>
									</a>
								</div>
							@endforeach
							</div>
						</div>
						<div class="sell-view-btn text-center aos" data-aos="fade-up">
							<a href="{{route('services')}}" class="btn btn-view ">{{__('home.view_all')}} <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Category Section -->
		
		<!-- Popular Servides -->
		<section class="popular-services popular-services-three">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-section-head popular-head aos" data-aos="fade-up">
							<h2>{{__('home.popular_label')}}</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>{{__('home.popular_service_find_lebel')}}</span>
							<div class="section-three">
								<h2>{{__('home.popular_service_lebel')}}</h2>
							</div>
						</div>
						<div class="service-carousel arrow-service aos" data-aos="fade-up">
							<div class="categories-slider owl-carousel owl-theme">
								@foreach ($services as $service)
								@php  
															$service_image = preg_replace('/[\]["]/i', '', $service->serviceDetails->image);
															$images = explode(',', str_replace( '\\', '', $service_image ));
													@endphp

								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" style="width:265px;height:188px" src="{{asset('uploads/'.$images[0]) }}">
										</a>
										<div class="item-info">
									
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">{{$service->category->name}}</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="{{asset('uploads/profile_picture/'.$service->provider->picture) }}" alt="">
											<ul>
												<li>{{$service->provider->name}}</li>
												<li class="rating">
													<!-- <i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(5)</span> -->
													@if(isset($service->review->average_rating))
												@php
													$ratings = $service->review->average_rating;
													$ratings = round($ratings);
												@endphp
												@for($i=1; $i<=$ratings; $i++)
													<i class="fas fa-star filled"></i>
												@endfor
												@for($i=1; $i<=(5-$ratings); $i++)
													<i class="fas fa-star"></i>
												@endfor
												<span class="d-inline-block average-rating">({{$ratings}})</span>
												@else
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i> 
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i> 
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(0)</span>
												@endif
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="{{url('/services/'.$service->service_id)}}">{{$service->serviceDetails->name}}</a>
										</h3>
										<span></span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i> 
													<span>{{$service->provider->contact}}</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>{{$service->district->name}}, {{$service->upazila->name}}</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
		
							</div>
						</div>
						<div class="sell-view-btn text-center aos" data-aos="fade-up">
							<a href="{{route('services')}}" class="btn btn-view">{{__('home.view_all')}} <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Servides -->
		
		<!-- How It Works -->
		<section class="how-work work-standard">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-section-head popular-head aos" data-aos="fade-up">
							<h2>How IT Works</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<div class="section-three">
								<h2>{{__('home.how_to_step_work')}}</h2>
							</div>	
						</div>
						<div class="howworksec aos" data-aos="fade-up">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
										{{__('home.step_1')}}
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-10.png" alt="">
										</div>
										<h3>{{__('home.how_to_work_lebel_1')}}</h3>
										<p></p>
										<h2>01</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box hiw-arrow">
										<div class="step-number">
										{{__('home.step_2')}}
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-11.png" alt="">
										</div>
										<h3>{{__('home.how_to_work_lebel_2')}}</h3>
										<p></p>
										<h2>02</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
										{{__('home.step_3')}}
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-12.png" alt="">
										</div>
										<h3>{{__('home.how_to_work_lebel_3')}}</h3>
										<p></p>
										<h2>03</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /How It Works -->
		<div id="notification"></div>
		</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
<script src="{{ url('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>
<script type="text/javascript">
var i = 0;
window.Echo.channel('order-notification')
.listen('.orderNotification', (data) => {
	alert(1);
	console.log("data", data)
i++;
$("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
});
</script>
<script type="text/javascript">

actionElementById('division_id', 'District', '{{url('get-district')}}', 'district_id');
actionElementById('district_id', 'Upazila', '{{url('get-upazila')}}', 'upazila_id');
actionElementById('upazila_id', 'Union ', '{{url('get-union')}}', 'union_id');

function actionElementById(elementId, title, url, actionElementId) {
  const eventName = document.getElementById(elementId);
  const actionEvent = document.getElementById(actionElementId)
  eventName.addEventListener('change', function(e) {
    const param = e.target.value;
    if (actionEvent) {
      const route = url + '/' + param;
      eventReset(elementId)
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

function eventReset(id) {
  if (id === 'district_id') {
    document.getElementById('union_id').innerHTML = `<option value="">Select Union</option>`;
  }
  if (id === 'division_id') {
    document.getElementById('upazila_id').innerHTML = `<option value="">Select Upazila</option>`;
    document.getElementById('union_id').innerHTML = `<option value="">Select Union</option>`;
  }
}

</script>
@stop
   


