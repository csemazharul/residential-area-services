		<!-- Footer -->
		<footer class="footer footer-three">
		
			<!-- Footer Top -->
			<div class="footer-top aos" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<!-- <div class="footer-logo-sell">
									<img src="resources/frontend/assets/img/logo-two.png" alt="img">
								</div> -->
								<div class="footer-about">
									<!-- <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, </p> -->
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Service</h2>
								<ul>
									@foreach($categories as $category)
									<li>
										<a href="{{route('category.services',['category'=>$category->id])}}"><i class="fas fa-check-double"></i>{{$category->name}}</a>
									</li>
									@endforeach
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">{{__('footer.foo_contact')}} </h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<span><i class="fa fa-map-marker"></i></span>
										<p>{{__('footer.foo_addr')}}</p>
									</div>
									<p><i class="fa fa-mobile"></i> +88 01822334412</p>
									<p class="mb-0"><i class="fas fa-envelope"></i> <a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e4a4c4b5b52474d5b52527e5b465f534e525b105d5153">support@gmail.com</a></p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-dots">
								<img src="resources/frontend/assets/img/foot-dot.png" alt="img">
							</div>
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">{{__('footer.foo_follow')}}</h2>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="{{__('footer.foo_contact_placeholder')}}">
                                    <a href="{{route('services')}}" class="btn footer-btn d-flex align-items-center justify-content-center">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-google"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; {{__('footer.foo_copy')}}</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition.html">{{__('footer.foo_term_condition')}}</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->