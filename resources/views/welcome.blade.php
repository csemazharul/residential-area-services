
@extends('./Frontend/layout/master')

 @section('title', 'Resendial services')

 @section('content')
 <div class="apartments-area bg-gray-color">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				   <div class="category-menu seven">
					   <div class="row">
						   <div class="col-md-12">
							   <div class="category-menu-content">
							       <div class="category-title">
							           <h3 class="default-template-gradient"><span>We Provide</span></h3>
							       </div><!-- /.category-titel -->
							       <div class="category-slider-seven bg-white-smoke owl-carousel">
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-one.png')}}" alt="" />
							                   <h4>Family House</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-two.png')}}" alt="" />
							                   <h4>Apartment</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-three.png')}}" alt="category" />
							                   <h4>Sublet</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-four.png')}}" alt="category" />
							                   <h4>Bachelor Mess</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-five.png')}}" alt="category" />
							                   <h4>Office</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                  <a href="#"> <img src="{{asset('resources/frontend/assets/images/category/category-six.png')}}" alt="category" />
							                   <h4>Garage</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-seven.png')}}" alt="category" />
							                   <h4>Factory</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-eight.png')}}" alt="category" />
							                   <h4>Hall Room</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-nine.png')}}" alt="category" />
							                   <h4>Warehouse</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							           <div class="item">
							               <div class="category-list style-one">
							                   <a href="#"><img src="{{asset('resources/frontend/assets/images/category/category-ten.png')}}" alt="category" />
							                   <h4>Female Mess</h4></a>
							               </div><!-- /.category-list -->
							           </div><!-- /.item -->
							       </div><!-- /.category-slider -->
							   </div><!-- /.category-menu-content -->
						   </div> <!-- category-menu -->
					   </div><!-- /.col-md-12 -->
				   </div><!-- /.catagory-menu -->

				   <div class="apartments-area pd-zero">
				   		<div class="row">
				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-one.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3><a href="apartment-single.html">Family Apartment</a></h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-6 -->

				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-two.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3><a href="apartment-single.html">Family Apartment</a></h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-6 -->

				   			<div class="clearfix"></div>

				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-three.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3><a href="apartment-single.html">Family Apartment</a></h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-6 -->

				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-four.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3><a href="apartment-single.html">Family Apartment</a></h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-4 -->

				   			<div class="clearfix"></div>

				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-five.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3><a href="apartment-single.html">Family Apartment</a></h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-4 -->

				   			<div class="col-md-6 col-sm-6 col-xs-6">
				   				<div class="apartments-content">
				   				    <div class="image-content">
				   				        <a href="apartment-single.html">
                                            <img src="{{asset('resources/frontend/assets/images/apartment/apartment-six.png')}}" alt="apartment" />
                                        </a>
				   				    </div><!-- /.image-content -->

				   				    <div class="text-content">
				   				        <div class="top-content">
				   				            <h3>
                                                <a href="apartment-single.html">Family Apartment</a>
                                            </h3>
				   				            <span>
				   				                <i class="fa fa-map-marker"></i>
				   				                Dhanmondi, Dhaka
				   				            </span>
				   				        </div><!-- /.top-content -->
				   				        <div class="bottom-content clearfix">
				   				            <div class="meta-bed-room">
				   				               <i class="fa fa-bed"></i> 3 Bedrooms
				   				           </div>
				   				           <div class="meta-bath-room">
				   				               <i class="fa fa-bath"></i>2 Bathroom
				   				           </div>
				   				           <span class="clearfix"></span>
				   				           <div class="rent-price pull-left">
				   				               $200
				   				           </div>
				   				            <div class="share-meta dropup pull-right">
				   				                <ul>
				   				                    <li class="dropup">
				   				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				   				                        <ul class="dropdown-menu">
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-facebook"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-twitter"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-instagram"></i></a>
				   				                            </li>
				   				                            <li>
				   				                                <a href="#"><i class="fa fa-google-plus"></i></a>
				   				                            </li>
				   				                        </ul>
				   				                    </li>
				   				                    <li>
				   				                        <a href="#"><i class="fa fa-star-o"></i></a>
				   				                    </li>
				   				                </ul>
				   				            </div>
				   				        </div><!-- /.bottom-content -->
				   				    </div><!-- /.text-content -->
				   				</div><!-- /.partments-content -->
				   			</div><!-- /.col-md-4 -->
				   		</div><!-- /.row -->
				   		<div class="row">
				   			<div class="col-md-12">
				   				<div class="pagination-link">
				   					<ul class="pagination">
				   						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
				   						<li class="active"><a href="#">01</a></li>
				   						<li><a href="#">02</a></li>
				   						<li><a href="#">03</a></li>
				   						<li><a href="#">04</a></li>
				   						<li><a href="#">05</a></li>
				   						<li class="dot"><a href="#">...</a></li>
				   						<li><a href="#">12</a></li>
				   						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				   					</ul>
				   				</div><!-- /.pagination -->
				   			</div><!-- /.col-md-12 -->
				   		</div><!-- /.row -->
				   </div><!-- /.apartments-area -->
				</div><!-- /.col-md-8 -->

				<div class="col-md-4">
					<div class="widget_rental_search widget-top clerafix">
						<div class="form-border gradient-border">
							<form action="#" method="get" class="advance_search_query">
								<div class="form-bg seven">
									<div class="form-content">
										<div class="form-group">
										   <label>living area</label>
										   <input type="text" name="FirstName" placeholder="Where do you want to live?">
										</div><!-- /.form-group -->
										<div class="form-group">
										   <label>Type</label>
										   <select>
												<option value="volvo">Apartments</option>
												<option value="saab">Saab</option>
												<option value="mercedes">Mercedes</option>
												<option value="audi">Audi</option>
										   </select>
										</div><!-- /.form-group -->
										<div class="form-group small">
											<label>price</label>
											<input type="text" name="FirstName" placeholder="min">
										</div><!-- /.form-group -->
										<div class="form-group small max">
										   <input type="text" name="FirstName" placeholder="max">
										</div><!-- /.form-group -->
										<div class="form-group">
										   <label>For</label>
										   <select>
											   <option value="volvo">Volvo</option>
											   <option value="saab">Saab</option>
											   <option value="mercedes">Mercedes</option>
											   <option value="audi">Audi</option>
										   </select>
										</div><!-- /.form-group -->
										<div class="form-group">
											<button type="submit" class="button button-radius default-template-gradient">Check Availability</button>
										</div><!-- /.form-group -->
									</div><!-- /.form-content -->
								</div><!-- /.form-bg -->
							</form> <!-- /.advance_search_query -->
						</div><!-- /.form-border -->
					</div><!-- /.widget_rental_search -->
					<div class="widget apartments_ads seven post clerafix">
						<div class="image-content">
							<a href="#">
								<img class="overlay-image" src="{{asset('resources/frontend/assets/images/apartment-ad.png')}}" alt="about" />
							</a>
						</div><!-- /.image-content -->
					</div><!-- /.partments-content -->
				</div><!-- /.col-md-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.Apartments-area-->

	<!-- ====== Gallery Area ======= -->
	<div class="gallery-area four">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-4 col-sm-4">
	                <div class="gallery-left-content">
	                    <h2>Our <br/>Photo<br/> Gallery</h2>
	                    <a href="#" class="button nevy-button button-radius">All Photos & Video</a>
	                </div><!-- /.right-content -->
	            </div><!-- /.col-md-4 -->
	            <div class="col-md-8 col-sm-8">
	                <div class="gallery-slider owl-carousel owl-theme">
	                    <div class="item">
	                        <img src="{{asset('resources/frontend/assets/images/gallery/gallery-one.png')}}" alt="gallery" />
	                    </div><!-- /.item -->
	                    <div class="item">
	                        <img src="{{asset('resources/frontend/assets/images/gallery/gallery-two.png')}}" alt="gallery" />
	                    </div><!-- /.item -->
	                    <div class="item">
	                        <img src="{{asset('resources/frontend/assets/images/gallery/gallery-three.png')}}" alt="gallery" />
	                    </div><!-- /.item -->
	                    <div class="item">
	                        <img src="{{asset('resources/frontend/assets/images/gallery/gallery-two.png')}}" alt="gallery" />
	                    </div><!-- /.item -->
	                    <div class="item">
	                        <img src="{{asset('resources/frontend/assets/images/gallery/gallery-three.png')}}" alt="gallery" />
	                    </div><!-- /.item -->
	                 </div><!-- /.owl-demo -->
	            </div><!-- /.col-md-8 -->
	        </div><!-- /.row -->
	    </div><!-- /.container -->
	</div><!-- /.gallery-area -->

	<!-- ====== Testimonial Area ====== -->
    <div class="testimonial-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-heading-content">
                        <h2 class="title">Testimonial</h2>
                        <i class="fa fa-quote-right"></i>
                        <h2 class="sub-title">Some Reviews</h2>
                    </div><!-- /.testimonial-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="{{asset('resources/frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Single Rakib</h3>
                                <h5>softhopper Manager</h5>
                                <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                    </div><!-- /.testimonial-slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.testimonial-area -->

    <!-- ====== Company Logo Area ====== -->
    <div class="company-logo-area default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-content">
                        <h2>Company With Us</h2>
                        <div class="brand-slider owl-carousel">
                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-one.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-two.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-three.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-four.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-five.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-six.png')}}" alt="logo" />
                            </a>

                            <a href="#" class="item">
                                <img src="{{asset('resources/frontend/assets/images/logo/logo-seven.png')}}" alt="logo" />
                            </a>
                        </div><!-- /.brand-slider -->
                    </div><!-- /.logo-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.company-logo-area -->

	<!-- ====== Blog Area ====== -->
	<div class="blog-area bg-gray-color">
	    <div class="container">
	        <div class="col-md-12">
	            <div class="row">
	                <div class="heading-content-one">
	                    <h2 class="title">Blog</h2>
	                    <h5 class="sub-title">Our Newa Feed</h5>
	                </div><!-- /.blog-heading-content -->
	            </div><!-- /.row -->
	        </div><!-- /.col-md-12 -->
	        <div class="row">
	            <div class="col-md-4 col-sm-6 col-xs-6">
	                <article class="post">
	                    <figure class="post-thumb">
	                        <a href="blog-single.html">
	                            <img src="{{asset('resources/frontend/assets/images/blog/blog-one.png')}}" alt="blog" />
	                        </a>
	                    </figure><!-- /.post-thumb -->
	                    <div class="post-content">
	                        <div class="entry-meta">
	                            <span class="entry-date">
	                                July 25, 2016
	                            </span>
	                            <span class="devied"></span>
	                            <span class="entry-category">
	                                <a href="#">Rooms &amp; suites</a>
	                            </span>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-header">
	                            <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-footer">
	                            <div class="entry-footer-meta">
	                                <span class="view"><i class="fa fa-eye"></i>35</span>
	                                <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
	                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
	                            </div><!-- /.entry-footer-meta -->
	                        </div><!-- /.entry-footer -->
	                    </div><!-- /.post-content -->
	                </article><!-- /.post -->
	            </div><!-- /.col-md-4 -->
	            <div class="col-md-4 col-sm-6 col-xs-6">
	                <article class="post">
	                    <figure class="post-thumb">
	                        <a href="blog-single.html">
	                            <img src="{{asset('resources/frontend/assets/images/blog/blog-two.png')}}" alt="blog" />
	                        </a>
	                    </figure><!-- /.post-thumb -->
	                    <div class="post-content">
	                        <div class="entry-meta">
	                            <span class="entry-date">
	                                July 25, 2016
	                            </span>
	                            <span class="devied"></span>
	                            <span class="entry-category">
	                                <a href="#">Rooms &amp; suites</a>
	                            </span>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-header">
	                            <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-footer">
	                            <div class="entry-footer-meta">
	                                <span class="view"><i class="fa fa-eye"></i>35</span>
	                                <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
	                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
	                            </div><!-- /.entry-footer-meta -->
	                        </div><!-- /.entry-footer -->
	                    </div><!-- /.post-content -->
	                </article><!-- /.post -->
	            </div><!-- /.col-md-4 -->
	            <div class="col-md-4 col-sm-6 col-xs-6">
	                <article class="post">
	                    <figure class="post-thumb">
	                        <a href="blog-single.html">
	                            <img src="{{asset('resources/frontend/assets/images/blog/blog-three.png')}}" alt="blog" />
	                        </a>
	                    </figure><!-- /.post-thumb -->
	                    <div class="post-content">
	                        <div class="entry-meta">
	                            <span class="entry-date">
	                                July 25, 2016
	                            </span>
	                            <span class="devied"></span>
	                            <span class="entry-category">
	                                <a href="#">Rooms &amp; suites</a>
	                            </span>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-header">
	                            <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
	                        </div><!-- /.entry-header -->
	                        <div class="entry-footer">
	                            <div class="entry-footer-meta">
	                                <span class="view"><i class="fa fa-eye"></i>35</span>
	                                <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
	                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
	                            </div><!-- /.entry-footer-meta -->
	                        </div><!-- /.entry-footer -->
	                    </div><!-- /.post-content -->
	                </article><!-- /.post -->
	            </div><!-- /.col-md-4 -->
	        </div><!-- /.row -->
	        <a href="blog.html" class="button">show all</a>
	    </div><!-- /.container -->
	</div><!-- /.Blog-area-->
 @endsection

 @section('content')
     <p>This is my body content.</p>
 @endsection