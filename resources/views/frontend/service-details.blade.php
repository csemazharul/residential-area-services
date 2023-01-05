
@extends('./Frontend/layout/master')

@section('title', 'Services Details')
@push('css')
<style>
    #feedback {
  max-width: 100%;
  width: 100%;
  margin: 10px auto;
  padding: 20px;
  border: solid 1px #f1f1f1;
  background: #fbfbfb;
  box-shadow: #e6e6e6 0 0 4px ;
  border-radius: 0.25rem;
}

@media (max-width: 720px) {
  #feedback{
    max-width: 90%;
  }
}

@media (max-width: 500px) {
  #feedback{
    padding: 10px;
  }
}

#fh2{
 padding: 2px 15px;
 color: #ff4d4d;
 text-align: center;
 
 
}

@media (max-width: 400px) {
  #fh2{
    font-size: 20px;
  }
}


#fh6 {
 padding: 2px 15px;
 color: #4d0er;
 text-align: center;
 font-weight: normal;
}

@media (max-width: 400px) {
  #fh6{
    font-size: 12px;
  }
}

.pinfo {
 margin: 8px auto;
 font-weight: bold;
 line-height: 1.5;
 color: #0d0d0d;
}
.form-group {
  margin-bottom: 1rem;
}
  
.form-control {
  display: block;
  min-width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.25;
  font-weight: bold;
  color: #6C6262;
  background-color: #fff;
  background-image: none;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #696060;
  background-color: #fff;
  border-color: #5cb3fd;
  outline: none;
}

.form-control::-webkit-input-placeholder {
  color: #F34949;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: brown;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: blue;
  opacity: 1;
}

.form-control::placeholder {
  color: white;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: red;
  opacity: 1;
}

.form-control:disabled {
  cursor: not-allowed;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: green;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
  z-index: 3;
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle;
}

.input-group-addon {
  width: 45px;
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.25;
  color: #2e2e2e;
  text-align: center;
  background-color: #eceeef;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.input-group-addon.form-control-sm,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .input-group-addon.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-addon.form-control-lg,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .input-group-addon.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group > .btn,
.input-group-btn:not(:last-child) > .dropdown-toggle,
.input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.input-group-addon:not(:last-child) {
  border-right: 0;
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group > .btn,
.input-group-btn:not(:first-child) > .dropdown-toggle,
.input-group-btn:not(:last-child) > .btn:not(:first-child),
.input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.form-control + .input-group-addon:not(:first-child) {
  border-left: 0;
}

.btn {
  display: inline-block;
  font-weight: normal;
  line-height: 1.25;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.btn:focus, .btn:hover {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
}

.btn.disabled, .btn:disabled {
  cursor: not-allowed;
  opacity: .65;
}

.btn:active, .btn.active {
  background-image: none;
}

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}

.btn-primary-1 {
  color: #fff;
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary-1:hover {
  color: #fff;
  background-color: #025aa5;
  border-color: #01549b;
}

.btn-primary-1:focus, .btn-primary-1.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
}

.btn-primary-1.disabled, .btn-primary-1:disabled {
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary-1:active, .btn-primary-1.active,
.show > .btn-primary-1.dropdown-toggle {
  color: #fff;
  background-color: #025aa5;
  background-image: none;
  border-color: #01549b;
}

</style>
@endpush
@section('content')

<div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="service-view">
                                <div class="service-header">
                                    <div
                                        class="d-flex justify-content-between align-items-center"
                                    >
                                        <h1>{{$service->serviceDetails->name}}</h1>
                                        <div class="fav-btn fav-btn-big">
                                            <button
                                            id=""
                                            onclick="addToFav(this)"

                                                        class="fav-icon with-border"
                                            >
                                                <i class="fas fa-heart"></i>
                                        </button>
                                        </div>
                                    </div>
                                    <address class="service-location">
                                        <i class="fas fa-location-arrow"></i>
                                        {{$service->district->bn_name}}, {{$service->upazila->bn_name}}
                                    </address>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span
                                            class="d-inline-block average-rating"
                                            >(5)</span
                                        >
                                    </div>
                                    <div class="service-cate">
                                        <a href="{{route('category.services',['category'=>$service->category->id])}}">{{$service->category->name}}</a>
                                    </div>
                                </div>
                                <div class="service-images service-carousel">
                                    <div
                                        class="images-carousel owl-carousel owl-theme"
                                    >
                                @php
                              
                                    $service_image = preg_replace('/[\]["]/i', '', $service->image);
                                    $images = explode(',', str_replace( '\\', '', $service_image ));
                             
                                @endphp
                                @foreach($images as $image)
                                        <div class="item">
                                            <img
                                                src="{{asset('storage/uploads/'.$image) }}"
                                                alt=""
                                                class="img-fluid"
                                            />
                                        </div>
                                 @endforeach      
                                 
                                    </div>
                                </div>
                                <div class="service-details">
                                    <ul
                                        class="nav nav-pills service-tabs"
                                        id="pills-tab"
                                        role="tablist"
                                    >
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                id="pills-home-tab"
                                                data-toggle="pill"
                                                href="#pills-home"
                                                role="tab"
                                                aria-controls="pills-home"
                                                aria-selected="true"
                                                >Overview</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="pills-profile-tab"
                                                data-toggle="pill"
                                                href="#pills-profile"
                                                role="tab"
                                                aria-controls="pills-profile"
                                                aria-selected="false"
                                                >Services Offered</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="review-section-tab"
                                                data-toggle="pill"
                                                href="#review-section"
                                                role="tab"
                                                aria-controls="review-section"
                                                aria-selected="false"
                                                >Reviews</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div
                                            class="tab-pane fade show active"
                                            id="pills-home"
                                            role="tabpanel"
                                            aria-labelledby="pills-home-tab"
                                        >
                                            <div
                                                class="card service-description"
                                            >
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        Service Details
                                                    </h5>
                                                    <p class="mb-0">
                                                        {!!$service->serviceDetails->description!!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tab-pane fade"
                                            id="pills-profile"
                                            role="tabpanel"
                                            aria-labelledby="pills-profile-tab"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        Services Offered
                                                    </h5>
                                                    <div class="service-offer">
                                                        <ul class="list-bullet">
                                                            <li>Lorem Ipsum</li>
                                                            <li>Lorem Ipsum</li>
                                                            <li>Lorem Ipsum</li>
                                                            <li>Lorem Ipsum</li>
                                                            <li>Lorem Ipsum</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tab-pane fade"
                                            id="pills-book"
                                            role="tabpanel"
                                            aria-labelledby="pills-book-tab"
                                        >
                                            <div class="card review-box">
                                             
                                                <div class="card-body">
                                                    <div class="review-list">
                                                        <div class="review-img">
                                                            <img
                                                                class="rounded-circle"
                                                                src="{{asset('resources/frontend/assets/img/customer/user-01.jpg')}}"
                                                                alt=""
                                                            />
                                                        </div>
                                                        <div
                                                            class="review-info"
                                                        >
                                                            <h5>Test User</h5>
                                                            <div
                                                                class="review-date"
                                                            >
                                                                August 06, 2020
                                                                20:07 pm
                                                            </div>
                                                            <p class="mb-0">
                                                                Good Work
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="review-count"
                                                        >
                                                            <div class="rating">
                                                                <i
                                                                    class="fas fa-star filled"
                                                                ></i>
                                                                <i
                                                                    class="fas fa-star filled"
                                                                ></i>
                                                                <i
                                                                    class="fas fa-star filled"
                                                                ></i>
                                                                <i
                                                                    class="fas fa-star filled"
                                                                ></i>
                                                                <i
                                                                    class="fas fa-star filled"
                                                                ></i>
                                                                <span
                                                                    class="d-inline-block average-rating"
                                                                    >(5.0)</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (session('success'))
    
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{session('success')}}
                    </div>
                        @endif
                            @if(isset(Auth::user()->id))
                            <form id="feedback"  action="{{route('review.store')}}" method="post" id="review-section">
                            @csrf   
                            <div class="pinfo">Review title</div>
                                
                                <div class="form-group">
                                <div class="inputGroupContainer">
                                <div class="input-group">
                                <input type="hidden" name="service_id" value="{{$service->id}}">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="provider_id" value="{{$service->service_provider_id}}">
                                <input  name="title" placeholder="" class="form-control"  type="text">
                                    </div>
                                </div>
                                </div>

                                <div class="pinfo">Rating</div>
                                

                                <div class="form-group">
                                <div class="inputGroupContainer">
                                <div class="input-group">
                                <select class="form-control" id="rate" name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="6">5</option>
                                    </select>
                                    </div>
                                </div>
                                </div>

                                <div class="pinfo">Write your feedback.</div>
                                

                                <div class="form-group">
                                <div class="inputGroupContainer">
                                <div class="input-group">
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                
                                    </div>
                                </div>
                                </div>

                                <button type="submit" class="btn btn-primary-1">Submit</button>
                                </form>
                            @endif

                            <!-- all review list show in service -->
                            <div class="card review-box">
                                @foreach($reviews as $review)
                                <div class="card-body">
                                    <div class="review-list">
                                        <div class="review-img
                                        ">
                                            <img
                                                class="rounded-circle"
                                                src="assets/img/customer/user-01.jpg"
                                                alt=""
                                            />
                                        </div>
                                        <div class="review-info">
                                            <h5>{{$review->user->name}}</h5>
                                            <div class="review-date">
                                                <!-- August 06, 2020 20:07 pm -->
                                                {{date('F d, Y H:i a', strtotime($review->created_at))}}
                                            </div>
                                            <p class="mb-0">{{$review->title}}</p>
                                        </div>
                                        <div class="review-count">
                                            @php
                                                $rating = $review->rating;

                                            @endphp
                                            <div class="rating">
                                                @for($i=1; $i<=$rating; $i++)
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                @endfor
                                        
                                                <span
                                                    class="d-inline-block average-rating"
                                                    >({{$rating}}.0)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                                <h4 class="card-title">Related Services</h4>
                            <div class="service-carousel">
                                <div
                                    class="popular-slider owl-carousel owl-theme"
                                >
                                @foreach($relatedServices as $service)
                                @php
                                $service_image = preg_replace('/[\]["]/i', '', $service->serviceDetails->image);
                                $images = explode(',', str_replace( '\\', '', $service_image ));
                                $image=is_array($images)?$images[0]:$images;

                                @endphp
                                <div class="service-widget">
                                        <div class="service-img">
                                            <a href="{{url('/services/'.$service->id)}}">
                                                <img
                                                    class="img-fluid serv-img"
                                                    alt="Service Image"
                                                    style="width:298px;height:182px" src="{{asset('storage/uploads/'.$image) }}"
                                                />
                                            </a>
                                            <div class="item-info">
                                                <div class="service-user">
                                                    <span class="service-price"
                                                        >৳ {{$service->price}}</span
                                                    >
                                                </div>
                                                <div class="cate-list">
                                                    <a
                                                        class="bg-yellow"
                                                        href="{{url('/services/'.$service->id)}}"
                                                        >{{$service->category->name}}</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="{{url('/services/'.$service->id)}}"
                                                    >{{$service->name}}</a
                                                >
                                            </h3>
                                            <div class="rating">
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i class="fas fa-star"></i>
                                                <span
                                                    class="d-inline-block average-rating"
                                                    >(4.5)</span
                                                >
                                            </div>
                                            <div class="user-info">
                                                <div class="row">
                                                    <span
                                                        class="col-auto ser-contact"
                                                        ><i
                                                            class="fas fa-phone me-1"
                                                        ></i>
                                                        <span
                                                            >{{$service->providerDetails->contact}}</span
                                                        ></span
                                                    >
                                                    <span
                                                        class="col ser-location"
                                                        ><span
                                                            >{{$service->district->bn_name}},
                                                            {{$service->upazila->bn_name}}</span
                                                        >
                                                        <i
                                                            class="fas fa-map-marker-alt ms-1"
                                                        ></i
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      @endforeach  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 theiaStickySidebar">
                            <div class="sidebar-widget widget">
                                <div class="service-amount">
                                    <span>৳ {{$service->price}}</span>
                                </div>
                                <div class="service-book">
                                    <a
                                        href="{{route('service.book', $service->id)}}"
                                        class="btn btn-primary"
                                    >
                                        Book Service
                                    </a>
                                </div>
                            </div>
                            <div class="card provider-widget clearfix">
                                <div class="card-body">
                                    <h5 class="card-title">Service Provider</h5>
                                    <div class="about-author">
                                        <div class="about-provider-img">
                                            <div class="provider-img-wrap">
                                                <a href="javascript:void(0);">
                                                    <img
                                                        class="img-fluid rounded-circle"
                                                        alt=""
                                                        src="assets/img/provider/provider-01.jpg"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="provider-details">
                                            <a
                                                href="javascript:void(0);"
                                                class="ser-provider-name"
                                                >{{$service->provider->name}}</a
                                            >
                                            <p class="text-muted mb-1">
                                                Member Since {{$service->provider->created_at}}
                                            </p>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="provider-info">
                                        <p class="mb-1">
                                            <i class="far fa-envelope"></i>
                                            <a href="#"
                                                ><span
                                                    class="__cf_email__"
                                                    data-cfemail="54203c3b3935273c31262e3631263314312c35392438317a373b39"
                                                    ></span
                                                >{{$service->provider->email}}</a
                                            >
                                        </p>
                                        <p class="mb-0">
                                            <i class="fas fa-phone-alt"></i>
                                            {{$service->providerDetails->contact}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
@endsection
<!-- addToFav -->
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('.addToFav').on('click', function () {
            var id = $(this).data('id');
            var url = $(this).data('url');
            console.log(id,url, 'Add to fav')
            var token = $('meta[name="csrf-token"]').attr('content');
            // $.ajax({
            //     url: url,
            //     type: 'POST',
            //     data: {
            //         id: id,
            //         _token: token,
            //     },
            //     success: function (data) {
            //         if (data.status == 'success') {
            //             toastr.success(data.message);
            //         } else {
            //             toastr.error(data.message);
            //         }
            //     },
            // });
        });
    });
</script>
@stop