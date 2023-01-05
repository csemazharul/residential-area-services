
@extends('./Frontend/layout/master')

@section('title', 'Seervices')

@section('content')

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Find a Services</h2>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
						<div class="card filter-card">
							<div class="card-body">
								<h4 class="card-title mb-4">Search Filter</h4>
								<form id="search_form">
									<div class="filter-widget">
										<div class="filter-list">
											<h4 class="filter-title">Keyword</h4>
											<input type="text" class="form-control" placeholder="What are you looking for?">
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Sort By</h4>
											<select class="form-control selectbox select form-select">
												<option>Sort By</option>
												<option>Price Low to High</option>
												<option>Price High to Low</option>
												<option>Newest</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Categories</h4>
											<select class="form-control form-control selectbox select form-select">
												<option>All Categories</option>
												@foreach($categories as $category)
													<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100" type="button">Search</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row align-items-center mb-4">
							<div class="col-md-6 col">
								<h4><span>{{count($services)}}</span> Services</h4>
							</div>
							<div class="col-md-6 col-auto">
								<div class="view-icons">
									<a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								@foreach($services as $service)
								                    @php
                                $service_image = preg_replace('/[\]["]/i', '', $service->serviceDetails->image);
                                $images = explode(',', str_replace( '\\', '', $service_image ));
                                $image=is_array($images)?$images[0]:$images;
																
                                @endphp
								<div class="col-lg-4 col-md-6">
									<div class="service-widget">
										<div class="service-img">
											<a href="{{url('/services/'.$service->id)}}">
												<img class="img-fluid serv-img" alt="Service Image" style="width:298px;height:182px" src="{{asset('storage/uploads/'.$image) }}">
											</a>
											<div class="fav-btn">
												<button id="addToFav" data-id="{{$service->id}}" data-favor="{{$service->is_favorite}}" class="fav-icon @if($service->is_favorite==1) {{'favourite'}} @endif">
													<i class="fas fa-heart"></i>
</button>
											</div>
											<div class="item-info">
												<div class="service-user">
													<!-- <span class="service-price">৳ {{$service->serviceDetails->price}}</span> -->
												</div>
												<div class="cate-list">
													<a class="bg-yellow" href="{{url('/services/'.$service->id)}}">{{$service->category->name}}</a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="{{url('/services/'.$service->id)}}">{{$service->serviceDetails->name}}</a>
											</h3>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(4.3)</span>
											</div>
											<div class="user-info">
												<div class="row">
													<span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
														<span>xxxxxxxx49</span>
													</span>
													<span class="col ser-location">
														<span>{{$service->district->bn_name}}, {{$service->upazila->bn_name}}</span> <i class="fas fa-map-marker-alt ms-1"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

							</div>
						</div>
					</div>
				</div>
			</div>
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
			

        $('#addToFav').on('click', function (e) {
					e.stopPropagation();
					const userId = "{{Auth::user()}}"
					const url = "{{ route('add-to-favorite') }}";
					const csrf = "{{csrf_token()}}"
            var id = $(this).data('id');
            var is_favorite = $(this).data('favor');

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    id: id,
										is_favorite: is_favorite,
                    _token: csrf,
                },
                success: function (data) {
										if (data.status == 'success') {
											toastr.success(data.message)
                        // alert(data.message)
                    } else {
											console.log(toastr)
                        alert(data.error)
                    }
                },
            });
        });
    });
</script>

@stop