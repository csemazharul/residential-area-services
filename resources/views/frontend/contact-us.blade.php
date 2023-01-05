@extends('./frontend/layout/master')

 @section('title', 'contact-us')

 @section('content')

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Send</h2>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<section class="contact-us">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="contact-queries">
								<h4 class="mb-4">Drop your Queries</h4>
								<div class="row">
									<div class="form-group col-xl-6">
										<label class="me-sm-2">First Name</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-6">
										<label class="me-sm-2">Last Name</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-6">
										<label class="me-sm-2">Email</label>
										<input class="form-control" type="email" >
									</div>
									<div class="form-group col-xl-6">
										<label class="me-sm-2">Mobile Number</label>
										<input class="form-control" type="text" >
									</div>
									<div class="form-group col-xl-12">
										<label class="me-sm-2">Message</label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
									<div class="col-xl-12 mb-4">
										<button class="btn btn-primary btn-lg ps-5 pe-5" type="submit">Update</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<div class="contact-info">
									<i class="fas fa-map-marker-alt"></i>
									<div class="contact-data">
										<h4>Address</h4>
										<p>#house 12/A, Nasirabad, CTG, Bangaldesh.</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="fas fa-phone-alt"></i>
									<div class="contact-data">
										<h4>Phone</h4>
										<p>+88 01833445566</p>
										<p>+88 01933445566</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="fab fa-skype"></i>
									<div class="contact-data">
										<h4>Skype</h4>
										<p>house.skype</p>
									</div>
								</div>
								<hr>
								<div class="contact-info">
									<i class="far fa-envelope"></i>
									<div class="contact-data">
										<h4>Email</h4>
										<p><a href="https://residential-area-services.dev/l/email-protection" class="__cf_email__" data-cfemail="e0949295858c9993858c8ca08598818d908c85ce838f8d">support@gmail.com/a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Contact</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    @endsection