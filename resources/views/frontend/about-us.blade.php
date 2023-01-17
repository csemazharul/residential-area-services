@extends('./frontend/layout/master')

@section('title', 'about-us')

@section('content')
		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>About Us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<section class="about-us">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="about-blk-content">
								<p>
                                Home services refer to a wide range of maintenance, repair, and improvement services that are performed in and around the home. These services can include everything from plumbing and electrical work to cleaning and landscaping. Some examples of common home services include:
                                </p>
                                <ol>
                                    <li>Plumbing: fixing leaks, unclogging drains, repairing or replacing pipes, installing new fixtures</li>
                                    <li>Electrical: installing or repairing wiring, fixing faulty outlets or switches, installing lighting or appliances</li>
                                    <li>HVAC (heating, ventilation, and air conditioning): repairing or maintaining furnaces, air conditioners, and other climate control systems</li>
                                    <li>Cleaning: deep cleaning of homes or offices, carpet cleaning, window washing</li>
                                </ol>
							</div>
						</div>
						<div class="col-6">
							<div class="about-blk-image">
								<img src="assets/img/about.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
         
    </div><!-- /.page-header -->

    @endsection