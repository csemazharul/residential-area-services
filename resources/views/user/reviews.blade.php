
		
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
						<h4 class="widget-title">Reviews</h4>
						<div class="card review-card mb-0">
							<div class="card-body">

							@foreach($reviews as $review)
							
							@php
                              
															$service_image = preg_replace('/[\]["]/i', '', $review->serviceDetails->image);
															$images = explode(',', str_replace( '\\', '', $service_image ));
								 
															@endphp
								<div class="review-list">
									<div class="review-img">
										<img class="rounded img-fluid" src="{{asset('uploads/'.$images[0]) }}"
alt="">
									</div>
									<div class="review-info">
										<h5><a href="#">{{$review->serviceDetails->name}}</a></h5>
										<div class="review-date">{{$review->created_at->diffForHumans()}}</div>
										<p class="mb-2">{{$review->serviceDetails->name}}</p>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="{{asset('uploads/profile_picture/'.$review->user->picture)}}" alt=""> {{$review->provider->name}}
										</div>
									</div>
									<div class="review-count">
										<div class="rating">
										@for($i=0;$i<$review->rating;$i++)
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                @endfor
                                             
                                                <span
                                                    class="d-inline-block average-rating"
                                                    >({{$review->rating}})</span
                                                >
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>

						<div class="pagination">
                                @if ($reviews->lastPage() > 1)
                                    <ul>
                                        <li class="{{ ($reviews->currentPage() == 1) ? 'disabled' : '' }}">
                                            <a href="{{ $reviews->url(1) }}">
                                                <i class="fas fa-angle-left"></i></a>
                                        </li>
                                        @for ($i = 1; $i <= $reviews->lastPage(); $i++)
                                            <li class="{{ ($reviews->currentPage() == $i) ? 'active' : '' }}">
                                                <a href="{{ $reviews->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($reviews->currentPage() == $reviews->lastPage()) ? 'arrow' : '' }}">
                                            <a href="{{ $reviews->url($reviews->currentPage()+1) }}">
                                                <i class="fas fa-angle-right" ></i> </a>
                                        </li>
                                    </ul>
                                @endif

                                </div>

					</div>
				</div>
			</div>
		</div>
		
@endsection