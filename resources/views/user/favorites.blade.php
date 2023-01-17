
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
						<h4 class="widget-title">Favourites</h4>
						<div class="row">
						
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-01.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$25</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Glass</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Toughened Glass Fitting Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(4.3)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-03.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$45</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Electrical</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Electric Panel Repairing Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4.5)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-02.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>	
												<span class="service-price">$50</span>
											</div>
											<div class="cate-list">	<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Automobile</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Car Repair Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(5)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-04.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$14</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Car Wash</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Steam Car Wash</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-05.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">House Cleaning Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-06.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>	
												<span class="service-price">$80</span>
											</div>
											<div class="cate-list">	<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Computer</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Computer & Server AMC Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-07.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$5</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Interior</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Interior Designing</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-08.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>
												<span class="service-price">$75</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Construction</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Building Construction Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex">
								<div class="service-widget flex-fill">
									<div class="service-img">
										<a href="{{url('/services/'.$service->id)}}">
											<img class="img-fluid serv-img" alt="Service Image" src="resources/frontend/assets/img/services/service-09.jpg">
										</a>
										<div class="fav-btn">
											<a href="javascript:void(0)" class="fav-icon">
												<i class="fas fa-heart"></i>
											</a>
										</div>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="resources/frontend/assets/img/provider/provider-01.jpg" alt="">
												</a>	<span class="service-price">$500</span>
											</div>
											<div class="cate-list">	<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">Painting</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="{{url('/services/'.$service->id)}}">Commercial Painting Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
									</div>
								</div>
							</div> 
							
							<!-- Pagination Links --> 
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
		</div>﻿
@endsection