
@extends('./Frontend/layout/master')

@section('title', 'Seervices')

@push('css')
<style>
  .btn-payment {
    position: relative;
    background: #3498db;
    border: 0 none;
    color: #fff;
    padding: 8px 20px 8px 70px;
    border-radius: 4px;
    height: 42px;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 13px;
    width: 254px;
    outline: 0;
    overflow: hidden;
  }
  </style>
@endpush
@section('content')
<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="section-header text-center">
							<h2>Book Service</h2>
						</div>
						<form >
            <!-- {{ csrf_field() }} -->
						@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service Location <span class="text-danger">*</span></label>
										<input class="form-control" name="name" id="name" type="text" placeholder="Enter a location" autocomplete="off">
									</div>                            
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service amount</label>
										<input class="form-control" type="text" value="$100" readonly>
									</div>
								</div>
								<div class="col-lg-6">
								   <div class="form-group">
										<label>Date <span class="text-danger">*</span></label>
										<input class="form-control hasDatepicker" type="text">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Time slot <span class="text-danger">*</span></label>
										<select class="form-control form-select">
											<option>10:00 AM</option>
											<option>11:00 AM</option>
											<option>12:00 PM</option>
											<option>01:00 PM</option>
											<option>02:00 PM</option>
											<option>03:00 PM</option>
											<option>04:00 PM</option>
											<option>05:00 PM</option>
											<option>06:00 PM</option>
											<option>07:00 PM</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="text-center">
											<div id="load_div"></div>
										</div>
										<label>Notes</label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>
							<!-- <button type="submit" class="btn btn-primary">Pay</button> -->
        <!-- <button type="submit">submit</button>       -->
							<div class="submit-section">
                <button class="btn-payment" id="sslczPayBtn"
                postdata=""
                order="121"
		            endpoint="{{url('pay-via-ajax')}}"> Pay Now
                </button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>﻿
@endsection

@section('script')
<script> 
document.getElementById("sslczPayBtn").addEventListener("click", function () {
    const obj={};
    obj.name=document.getElementById("name").value;
		document.getElementById("sslczPayBtn").setAttribute("postdata", obj);
    // $('#sslczPayBtn').prop('postdata', obj);
});

(function (window, document) {
	var loader = function () {
	    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
	    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
	    tag.parentNode.insertBefore(script, tag);
	};

	window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
                       
</script>
@stop