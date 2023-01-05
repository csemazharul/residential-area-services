
@extends('./Frontend/layout/master')

@section('title', 'Resendial services| Reviews')

@section('content')
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 theiaStickySidebar">
                        @include('../service-provider/layout/sidebar')

                        </div>
                        <div class="col-xl-9 col-md-8">
                            <h4 class="widget-title">Reviews</h4>
                            <div class="card review-card mb-0">
                                <div class="card-body">
                                    <!-- Review -->
                                    @foreach($reviews as $review)

                                    @php
                              
                                    $service_image = preg_replace('/[\]["]/i', '', $review->serviceDetails->image);
                                    $images = explode(',', str_replace( '\\', '', $service_image ));
                       
                                    @endphp

                                    <div class="review-list">
                                        <div class="review-img">
                                            <img
                                                class="rounded img-fluid"
                                                src="{{asset('storage/uploads/'.$images[0]) }}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="review-info">
                                            <h5>
                                                <a href="#"
                                                    >{{$review->serviceDetails->name}}</a
                                                >
                                            </h5>
                                            <div class="review-date">
                                                {{$review->created_at->diffForHumans()}}
                                            </div>
                                            <p class="mb-2">{{$review->title}}/p>
                                            <div class="review-user">
                                                <img
                                                    class="avatar-xs rounded-circle"
                                                    src="assets/img/customer/user-01.jpg"
                                                    alt=""
                                                />
                                               {{$review->user->name}}
                                            </div>
                                        </div>
                                        <div class="review-count">
                                            <div class="rating">
                                                @for($i=0;$i<=$review->rating;$i++)
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
                                    <!-- /Review -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection