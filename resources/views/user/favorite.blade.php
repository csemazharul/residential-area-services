
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

                                @foreach($favourites as $favourite)
                                @php  
									$service_image = preg_replace('/[\]["]/i', '', $favourite->serviceDetails->image);
									$images = explode(',', str_replace( '\\', '', $service_image ));
								@endphp
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="service-widget flex-fill">
                                        <div class="service-img">
                                            <a href="{{url('/services/'.$favourite->serviceDetails->service_id)}}">
                                                <img
                                                    class="img-fluid serv-img"
                                                    alt="Service Image"
                                                    src="{{asset('uploads/'.$images[0])}}"
                                                />
                                            </a>
                                            <div class="fav-btn">
                                                <a
                                                    href="javascript:void(0)"
                                                    class="fav-icon"
                                                >
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <div class="item-info">
                                                <div class="service-user">
                                                    <a
                                                        href="javascript:void(0);"
                                                    >
                                                        <img
                                                            src="{{asset('/uploads/profile_picture/'.$favourite->provider->picture)}}"
                                                            alt=""
                                                        />
                                                    </a>
                                               
                                                </div>
                                                <div class="cate-list">
                                                    <a
                                                        class="bg-yellow"
                                                        href="{{url('/services/'.$favourite->serviceDetails->service_id)}}"
                                                        >{{$favourite->category->name}}</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="{{url('/services/'.$favourite->serviceDetails->service_id)}}"
                                                    >{{$favourite->serviceDetails->name}}</a
                                                >
                                            </h3>
                                            <div class="rating">
                                            @if(isset($favourite->review->average_rating))
												@php
													$ratings = $favourite->review->average_rating;
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <!-- Pagination Links -->
                                <div class="pagination">
                                    <ul>
                             
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection            