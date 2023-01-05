
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
                            <h4 class="widget-title">Favourites</h4>
                            <div class="row">

                                @foreach($favourites as $favourite)
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="service-widget flex-fill">
                                        <div class="service-img">
                                            <a href="service-details.html">
                                                <img
                                                    class="img-fluid serv-img"
                                                    alt="Service Image"
                                                    src="assets/img/services/service-01.jpg"
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
                                                            src="assets/img/provider/provider-01.jpg"
                                                            alt=""
                                                        />
                                                    </a>
                                                    <span class="service-price"
                                                        >$25</span
                                                    >
                                                </div>
                                                <div class="cate-list">
                                                    <a
                                                        class="bg-yellow"
                                                        href="service-details.html"
                                                        >Glass</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="service-details.html"
                                                    >Toughened Glass Fitting
                                                    Services</a
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
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <span
                                                    class="d-inline-block average-rating"
                                                    >(4.3)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

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
                                            <a href="javascript:void(0);"
                                                ><i
                                                    class="fas fa-angle-right"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection            