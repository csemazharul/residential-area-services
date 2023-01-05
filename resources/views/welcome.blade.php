
@extends('./Frontend/layout/master')

@section('title', 'Resendial services')
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
														<option selected disabled>SELECT DIVISION</option>
														@foreach($divisions as $division)
															<option value="{{$division->id}}">{{$division->bn_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="district_id" id="district_id">
														<option selected disabled>SELECT DISTRICT</option>
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="upazila_id" id="upazila_id">
														<option selected disabled>SELECT UPAZILA</option>
													</select>
												</div>
											</div>
											<div class="s-w-17">
												<div class="form-group mb-0">
												<select class="form-control" name="union_id" id="union_id">
														<option selected disabled>SELECT UNION</option>
													</select>
												</div>
											</div>
											<div class="s-btn s-w-17">
												<button class="btn search_service" ><i class="fa fa-search"></i>Search</button>
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
							<h2>Service Categories</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>What do you need to find?</span>
							<div class="section-three">
								<h2>Service Categories</h2>
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
							<a href="{{route('services')}}" class="btn btn-view ">View All <i class="fas fa-long-arrow-alt-right"></i></a>
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
							<h2>Most Popular</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>Explore the greates our services. You won’t be disappointed</span>
							<div class="section-three">
								<h2>Most Popular Services</h2>
							</div>
						</div>
						<div class="service-carousel arrow-service aos" data-aos="fade-up">
							<div class="categories-slider owl-carousel owl-theme">
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-16.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">	
												<span class="service-price">$25</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-02.jpg" alt="">
											<ul>
												<li>Thomas Herzberg</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(5)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Cleaning Service</a>
										</h3>
										<span>Car wash is a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i> 
													<span>609-639-6458</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Wayne, New Jersey</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-17.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$50</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Automobile</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-03.jpg" alt="">
											<ul>
												<li>Hendry Evangline</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(4.5)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Computer & AMC Service</a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>0699 149 25 07</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Hanover, Maryland</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-18.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$45</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Electrical</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-01.jpg" alt="">
											<ul>
												<li>Hilary Desouza</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(5)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Car wash</a>
										</h3>
										<span>Car wash is a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>0660 616 82 76</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Kalispell, Montana</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-19.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$14</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Car Wash</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-05.jpg" alt="">
											<ul>
												<li>Thomas Herzberg</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(0)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Electrical Service</a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>(07) 4516 0420</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Electra, Texas</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-17.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-06.jpg" alt="">
											<ul>
												<li>Hilary Desouza</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(3)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">House Cleaning Services </a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>442 82 780</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Sylvester, Georgia</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-19.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$80</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Computer</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-07.jpg" alt="">
											<ul>
												<li>Thomas Herzberg</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(0)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Computer & AMC Service</a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>514-756-6436</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Los Angeles, California</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-16.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$5</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Interior</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-08.jpg" alt="">
											<ul>
												<li>Hilary Desouza</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(4)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Interior Designing </a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>030 44 89 44</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Hanover, Maryland</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-18.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$75</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Construction</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-09.jpg" alt="">
											<ul>
												<li>Thomas Herzberg</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(2)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Building Construction </a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>792 5457</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Burr Ridge, Illinois</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-19.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$500</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Painting</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-10.jpg" alt="">
											<ul>
												<li>Hilary Desouza</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(3)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Commercial Painting </a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>28-62-76-32</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Huntsville, Alabama</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="service-widget service-box">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-18.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<span class="service-price">$150</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Plumbing</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<div class="service-rate">
											<img src="resources/frontend/assets/img/customer/user-05.jpg" alt="">
											<ul>
												<li>Thomas Herzberg</li>
												<li class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star "></i>
													<span class="d-inline-block average-rating">(4)</span>
												</li>
											</ul>
										</div>
										<h3 class="title">
											<a href="service-details.html">Plumbing Services </a>
										</h3>
										<span>This a facility used to clean the exterior and, in some cases....</span>
										<div class="user-info">
											<div class="user-info-box">	
												<span class="col-auto ser-contact"><i class="fas fa-phone-alt"></i>
													<span>0680 880 20 45</span>
												</span>
												<span class="col ser-location"><i class="fas fa-map-marker-alt ms-1"></i>
													<span>Richmond, Virginia</span> 
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sell-view-btn text-center aos" data-aos="fade-up">
							<a href="{{route('services')}}" class="btn btn-view">View All <i class="fas fa-long-arrow-alt-right"></i></a>
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
							<span>Aliquam lorem ante, dapibus in, viverra quis</span>
							<div class="section-three">
								<h2>How It Works</h2>
							</div>	
						</div>
						<div class="howworksec aos" data-aos="fade-up">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
											Step 1
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-10.png" alt="">
										</div>
										<h3>Choose What To Do</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
										<h2>01</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box hiw-arrow">
										<div class="step-number">
											Step 2
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-11.png" alt="">
										</div>
										<h3>Find What You Want</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
										<h2>02</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
											Step 3
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="resources/frontend/assets/img/work-icon-12.png" alt="">
										</div>
										<h3>Amazing Places</h3>
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
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
   


