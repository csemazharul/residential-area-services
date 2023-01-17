
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
	.mt-5{
		margin-top:5px !important;
		padding:5px !important;
	}
	.payment-item{
		background-color: #fafafa;
    width: 48%;
    height: 80px;
    padding: 20px;
	}
	.form-check-input-1{
    /* margin-top: 0.3rem;
    margin-left: -1.25rem; */
		margin-top: -0.7rem;
    margin-left: -23.25rem;
	}
	.form-check-label{
		margin-bottom: 0;
	}
	.ssl-image{
		width: 258px;
    padding-top: 0;
	}
 .nagad-image {
    width: 75px;
}
.mt-3{
	margin-top: 1rem !important;
}

/* .form-check-input-1:not(:checked) {
    position: absolute;
    left: -9999px;
} */
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
						<form action="{{url('pay-via-ajax')}}" method="post" enctype="multipart/form">
            {{ csrf_field() }}
							<div class="row">
							
								<h3>Address</h3>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Division </label>
										<select name="division_id" class="form-control @error('division_id') is-invalid @enderror" id="division_id">
											<option value="">Division</option>
											@foreach($divisions as $division)
											<option value="{{$division->id}}">{{$division->name}}</option>
											@endforeach
										</select>
										@error('division_id')
    								<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>                            
								</div>
								<input type="hidden" name="amount" id="amount" value="{{$service->price}}"/>
								<input type="hidden" name="service_id" id="service_id" value="{{$service->id}}"/>
								<input type="hidden" name="user_id" id="user_id" value="@if(isset(Auth::user()->id)) {{Auth::user()->id}} @endif"/>
								<div class="col-lg-6">
									<div class="form-group">
									<label>DISTRICT</label>
										<select name="district_id" id="district_id" class="form-control @error('district_id') is-invalid @enderror">
											<option value="">District</option>
										</select>
										@error('district_id')
    								<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="text-center">
											<div id="load_div"></div>
										</div>
										<label>Home Address Details</label>
										<input type="text" name="address" class="@error('address') is-invalid @enderror form-control" id="address" rows="5"/>
										@error('address')
    								<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label>Service Pacakges</label>
										<select name="package_id" id="package_id" class="form-control @error('package_id') is-invalid @enderror" id="package_id">
											<option>Service type</option>
											@foreach($packages as $key=>$package)
											<option value="{{$package->id}},{{$package->price}}">{{$package->name}}</option>
											@endforeach
										</select>
										@error('package_id')
										<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>
								</div>	
								<div class="col-lg-6">
								   <div class="form-group">
										<label>Service/Schedule Start Date </label>
										<input class="form-control hasDatepicker @error('service_date') is-invalid @enderror" name="service_date" id="service_date" type="date">
										@error('service_date')
    								<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Time</label>
										<select class="form-control form-select @error('service_time') is-invalid @enderror" name="service_time" id="service_time">
										<option value="">Time</option>	
										<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM" >11:00 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="07:00 PM">07:00 PM</option>
										</select>
										@error('service_time')
    								<div class="alert alert-danger mt-5 ">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<fieldset border="1">
  								<legend>Contact Person</legend>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label> Name</label>
												<input type="text" class="form-control @error('contact_name') is-invalid @enderror" id="contact_name" name="contact_name" value="@if(isset(Auth::user()->name)) {{Auth::user()->name}} @endif">
												@error('contact_name')
    											<div class="alert alert-danger mt-5 ">{{ $message }}</div>
												@enderror
											</div>
										</div>
									<div class="col-lg-6">
										<div class="form-group
										">
											<label>Phone Number</label>
											<input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="@if(isset(Auth::user()->contact)) {{Auth::user()->contact}} @endif">
											@error('contact')
    										<div class="alert alert-danger mt-5 ">{{ $message }}</div>
											@enderror
										</div>
									</div>
							</div>
								</fieldset>


						
						<!-- <p class="payment-content"><strong>বি:দ্র:</strong> কিছু কিছু ক্ষেত্রে আপনার অর্ডারে থাকা বই/পণ্যের মূল্য প্রকাশক/সরবরাহকারীর পক্ষ থেকে বিভিন্ন কারণে পরিবর্তন হতে পারে। এছাড়া আপনার অর্ডারের বই/পণ্য প্রকাশক/ সরবরাহকারীর কাছে নাও থাকতে পারে। এই ধরণের অনাকাঙ্ক্ষিত বিষয়গুলোর জন্য আমরা দুঃখিত ও ক্ষমাপ্রার্থী।</p> <div class="text-right border-top"> <span class="text-danger js--require-msg mr-3 "></span> <button type="submit" value="Confirm Order" class="btn btn-confirm-payment" id="js--confirm-order" onclick="gtag('event', 'continue_to_payment', {content_type: 'Shipping'});"> <span>Confirm Order</span> </button> </div> </div> -->
							
							</div>
							<!-- payment geway -->

							<!-- payment getway -->
							<button type="submit" class="btn-payment">Confirm Order</button>
						</form>
					</div>
					<div class="col-lg-3 theiaStickySidebar">
							<!-- order summary -->
							<div class="card ">
									<div class="card-body">
										<h5 class="card-title">Order summary</h5>
										<hr />
										<div>
											<h6>{{$service->category->name}}<h6>
											<p>{{$service->name}}</p>
										</div>
										<hr />
										<div class="card-text">
											<h6>PRICE<h6>
											<p>BDT <span id="summary_service_price"> <span></p>
											</div>
										<!-- <div class="card-text">
											<h6>DISCOUNT<h6>
											<p>BDT 0</p>
										</div> -->
										<div class="card-text">
											<h6>TOTAL<h6>
											<p>BDT <span id="summary_total_price"> <span> </p>
										</div>
									</div>
								</div>
							</div>

					</div>

				</div>
			</div>
		</div>﻿
@endsection

@section('script')

<script type="text/javascript">

//service type change summary price and hidden input ammount in javascript
document.getElementById('package_id').addEventListener('change', function(e) {
	var value = e.target.value;
	//package value split with comma
	var packageValueSplit = value.split(',');

	//package value
	// var packageId = packageValueSplit[0];
	//package price
	var packagePrice = packageValueSplit[1];
	document.getElementById('summary_service_price').innerHTML = parseFloat(packagePrice);
	document.getElementById('summary_total_price').innerHTML = parseFloat(packagePrice);
	document.getElementById('amount').value = packagePrice;
});



// $('#package_id').on('change', function() {
// 	console.log('Hellow')
// 	var package_id = $(this).val();
// 	var service_price = $('#service_price').val();
// 	var service_type_price = $('#service_type_price').val();
// 	var total_price = parseInt(service_price) + parseInt(service_type_price);
// 	$('#summary_service_price').text(total_price);
// 	$('#summary_total_price').text(total_price);
// 	$('#ammount').val(total_price);
// });

actionElementById('division_id', 'District', '{{url('get-district')}}', 'district_id');
function actionElementById(elementId, title, url, actionElementId) {
  const eventName = document.getElementById(elementId);
  const actionEvent = document.getElementById(actionElementId)
  eventName.addEventListener('change', function(e) {
    const param = e.target.value;
    if (actionEvent) {
      const route = url + '/' + param;
      const data = fetchData(route);
      console.log(data)
      data.then(items => {
        let options = `<option value="">Select ${title}</option>`;
        items.forEach(item => {
          options += `<option value="${item.id}">${item.name}</option>`;
        });
        actionEvent.innerHTML = options;
      });
    } else {
      element.innerHTML = '';
    }
  });
}

function fetchData(url, data = {}) {
  return fetch(`${url}`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })
    .then(res => res.json())
    .catch(err => {
      return err
    })
}


</script>
@stop