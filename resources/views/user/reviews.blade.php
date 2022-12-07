
		
@extends('./Frontend/layout/master')

@section('title', 'Resendial services')

@section('content')
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4">
					@include('user.sidebar')
					</div>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Reviews</h4>
						<div class="card review-card mb-0">
							<div class="card-body">
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="assets/img/services/service-12.jpg" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">Air Conditioner Service</a></h5>
										<div class="review-date">July 11, 2020 11:38 am</div>
										<p class="mb-2">Good Work</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-01.jpg" alt=""> Thomas Herzberg
										</div>
									</div>
									<div class="review-count">
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
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="assets/img/services/service-11.jpg" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">Wooden Carpentry Work</a></h5>
										<div class="review-date">July 05, 2020 15:33 pm</div>
										<p class="mb-2">Best Work</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-02.jpg" alt=""> Matthew Garcia
										</div>
									</div>
									<div class="review-count">
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
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="assets/img/services/service-10.jpg" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">Plumbing Services</a></h5>
										<div class="review-date">June 29, 2020 05:04 am</div>
										<p class="mb-2">Excellent Service</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-03.jpg" alt=""> Yolanda Potter
										</div>
									</div>
									<div class="review-count">
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
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="assets/img/services/service-09.jpg" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">Commercial Painting Services</a></h5>
										<div class="review-date">June 26, 2020 02:22 am</div>
										<p class="mb-2">Thanks</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-04.jpg" alt=""> Ricardo Flemings
										</div>
									</div>
									<div class="review-count">
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
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="assets/img/services/service-08.jpg" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">Building Construction Services</a></h5>
										<div class="review-date">June 13, 2020 17:38 pm</div>
										<p class="mb-2">Amazing</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="assets/img/provider/provider-05.jpg" alt=""> Maritza Wasson
										</div>
									</div>
									<div class="review-count">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		
@endsection