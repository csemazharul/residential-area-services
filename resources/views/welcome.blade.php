
@extends('./Frontend/layout/master')

@section('title', 'Resendial services')

@section('content')

		<!-- Hero Section -->
		<section class="hero-section hero-three">
			<div class="layer">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-8">
							<div class="section-search-box d-flex align-items-center aos" data-aos="fade-up">
								<div class="section-search">
									<!-- <h3><span>World's Largest</span> <br> Marketplace</h3> -->
									<div class="search-box">
										<form action="https://html.truelysell.com/template/search.html"> 
											<div class="search-input line">
												<i class="fa fa-th-large bficon"></i>
												<div class="form-group mb-0">
													<input type="text" class="form-control" placeholder="What are you looking for?">
												</div>
											</div>
											<div class="search-input location-light">
												<i class="fa-light fa-location-dot"></i>
												<div class="form-group mb-0">
													<input type="text" class="form-control" placeholder="Your Location"> 
												</div>
											</div>
											<div class="search-btn">
												<button class="btn search_service" ><i class="fa fa-search"></i>Search</button>
											</div>
										</form>
									</div>
									<div class="popular-product-list">
										<p><span>Most Popular :</span> <a href="search.html">Electrical Works</a>,<a href="search.html">Cleaning</a>,<a href="search.html">AC Repair</a>,<a href="search.html">Computer</a></p>
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
							<h2>Featured Categories</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>What do you need to find?</span>
							<div class="section-three">
								<h2>Featured Categories</h2>
							</div>
						</div>
						<div class="catsec aos" data-aos="fade-up">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-10.jpg" alt="">
											<div class="cate-title">
												<h3><span> Computer</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>21</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-11.jpg" alt="">
											<div class="cate-title">
												<h3><span> Interior</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>15</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-12.jpg" alt="">
											<div class="cate-title">
												<h3><span> Car Wash</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>21</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-13.jpg" alt="">
											<div class="cate-title">
												<h3><span> Cleaning</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>14</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-14.jpg" alt="">
											<div class="cate-title">
												<h3><span> Electrical</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>10</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-6">
									<a href="search.html">
										<div class="cate-widget">
											<img src="resources/frontend/assets/img/category/category-15.jpg" alt="">
											<div class="cate-title">
												<h3><span> Construction</span></h3>
											</div>
											<div class="cate-count">
												<i class="fas fa-users"></i> 
												<span>11</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="sell-view-btn text-center aos" data-aos="fade-up">
							<a href="search.html" class="btn btn-view ">View All <i class="fas fa-long-arrow-alt-right"></i></a>
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
							<a href="search.html" class="btn btn-view">View All <i class="fas fa-long-arrow-alt-right"></i></a>
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

		<!-- /our app -->
		<section class="app-set app-download">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7 col-12 d-flex justify-content-center">
						<div class="app-box">
							<div class="col-md-12">
								<div class="heading aos" data-aos="fade-up">
									<h2>Download Our App</h2>
									<span>Aliquam lorem ante, dapibus in, viverra quis</span>
								</div>
							</div>
							<div class="downlaod-set aos" data-aos="fade-up">
								<ul>
									<li>
										<a href="#"><img src="resources/frontend/assets/img/app-gp-02.png" alt="img"></a>
									</li>
									<li>
										<a href="#"><img src="resources/frontend/assets/img/app-ap-02.png" alt="img"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-12">
						<div class="appimg-set text-center aos" data-aos="fade-up">
							<img src="resources/frontend/assets/img/down-app-02.png" alt="img">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /our app -->
@endsection
   


