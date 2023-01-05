@extends('./Frontend/layout/master')
@section('title', 'Dashboard')
@push('css')
<style>
     input[type="radio"] {
      width: 20px;
      height: 20px;
      border: 2px solid #555;
      margin: 0 10px 0 0;
      vertical-align: middle;
    }

    input[type="radio"]:checked {
      background: #555;
    }
    input[type="radio"]:checked:after {
      content: "\2713";
      font-size: 14px;
      color: #fff;
      position: relative;
      top: -14px;
      left: 2px;
    }

    .form-check {
      margin: 0 0 10px 0;
    }
    .check-flx{
      display: flex;
    }
  </style>
@endpush
@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-md-4">
      @include('../service-provider/layout/sidebar')

      </div>
 
      <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings">
            <div class="widget">
            @if (session('success'))
    
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session('success')}}
              </div>
            @endif
              <h4 class="widget-title">Edit Service</h4>
              <form action="{{route('services.update',['service'=>$service->id])}}" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="row">
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Name</label>
                    <input class="form-control" type="text" value="{{$service->serviceDetails->name}}"  name="name">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Category</label>
                    <select class="form-control form-select" name="category_id" id="category_id">
                      <option value="">Service Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" @if($category->id===$service->category_id) {{'selected'}} @endif>{{$category->name}}</option>
                      @endforeach

                    </select>
                  </div>
                  <div class="col-xl-12">
                    <h5 class="form-title">Service Locations</h5>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Divisions</label>
                    <select class="form-control form-select" name="division_id" id="division_id">
                      <option value=""> Divison</option>
                      @foreach($divisions as $division)
                      <option value="{{$division->id}}" @if($division->id===$service->division_id) {{'selected'}} @endif>{{$division->bn_name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">District</label>
                    <select class="form-control form-select" name="district_id" id="district_id">
                      <option value="">District</option>
                      @foreach($districts as $district)
                      <option value="{{$district->id}}" @if($district->id===$service->district_id) {{'selected'}} @endif>{{$district->bn_name}}</option>
                      @endforeach

                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Upazila</label>
                    <select class="form-control form-select" name="upazila_id" id="upazila_id">
                      <option value="">Upazila</option>
                      @foreach($upazilas as $upazila)
                      <option value="{{$upazila->id}}" @if($upazila->id===$service->upazila_id) {{'selected'}} @endif>{{$upazila->bn_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Union</label>
                    <select class="form-control form-select" name="union_id" id="union_id">
                      <option value="">Union</option>
                      @foreach($unions as $union)
                      <option value="{{$union->id}}" @if($union->id===$service->union_id) {{'selected'}} @endif>{{$union->bn_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="me-sm-2">Service Description</label>
                    <textarea type="text" class="form-control" rows="5" cols="5" id="description" name="description" value="">{{$service->serviceDetails->description}}</textarea>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="me-sm-2">Additional Information</label>
                    <textarea type="text" class="form-control" id="short_description" name="short_description" value="">{{$service->serviceDetails->short_description}}</textarea>
                  </div>

                  <div class="service-fields mb-3">
                                    <h4 class="heading-2">Service Gallery</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="service-upload">
                                                <i
                                                    class="fas fa-cloud-upload-alt"
                                                ></i>
                                                <span
                                                    >Upload Service Images
                                                    *</span
                                                >
                                                <input type="file" name="image[]" id="service_image" multiple />
                                            </div>
                                            <div>
                                                <ul class="upload-wrap" id="uploaded_image">
                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Charge type.</label>
                    <!-- <input type="text" class="form-control" name="price" value=""> -->
                    <!-- two checkbox create -->
                    <div class="form-check check-flx">
                      <label class="checkbox" style="margin-right:13px"><input type="radio" id="package" name="price_type" value="package" @if($service->serviceDetails->price_type==='package') {{'checked'}} @endif>Package</label><br>
                      <label class="checkbox"><input type="radio" name="price_type" id="custom_price" value="custom" @if($service->serviceDetails->price_type==='custom') {{'checked'}} @endif>Fixed custom price</label>
                      </div>
                    </div>
                  
                  <div class="form-group col-xl-6" id="price" @if($service->serviceDetails->price_type==='package') style="display:none"  @endif>
                    <label class="me-sm-2">Price</label>
                    <input type="text" class="form-control" name="price" value="">
                    </div>   
                 
                  <div class="form-group col-xl-12">
                    <button id="form_submit" class="btn btn-primary ps-5 pe-5"
                      type="submit">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>;
<script type="text/javascript">

$('textarea#description').tinymce({
    height: 250,
    plugins: "powerpaste emoticons hr image link lists charmap table",
 });
$('textarea#short_description').tinymce({
    height: 250,
    plugins: "powerpaste emoticons hr image link lists charmap table",
 });

 $('#custom_price').click(function(){
    if($(this).is(':checked')){
      $('#price').show();
    }else{
      $('#price').hide();
    }
  });
  $('#package').click(function(){
    if($(this).is(':checked')){
      $('#price').hide();
    }else{
      $('#price').show();
    }
  });

imageEvent=document.getElementById('service_image');
imageEvent.addEventListener('change',function(e){
  //remove element from ul
  const ul=document.getElementById('uploaded_image');
  while(ul.firstChild){
    ul.removeChild(ul.firstChild);
  }
  const files=e.target.files;
  const fileLength=files.length;
  const fileArray=Array.from(files);
  const fileArrayLength=fileArray.length;
  console.log(fileArrayLength);
  const fileArrayMap=fileArray.map((file)=>{
    const reader=new FileReader();
    reader.readAsDataURL(file);
    reader.onload=function(){
      const li=document.createElement('li');
      const div=document.createElement('div');
      div.className='upload-images';
      const img=document.createElement('img');
      img.src=reader.result;
      img.style.width='100px';
      img.style.height='100px';
      li.appendChild(div);
      div.appendChild(img);
      document.getElementById('uploaded_image').appendChild(li);
    }
  })
})
actionElementById('division_id', 'District', '{{url('get-district')}}', 'district_id');
actionElementById('district_id', 'Upazila', '{{url('get-upazila')}}', 'upazila_id');
actionElementById('upazila_id', 'Union ', '{{url('get-union')}}', 'union_id');

function actionElementById(elementId, title, url, actionElementId) {
  const eventName = document.getElementById(elementId);
  const actionEvent = document.getElementById(actionElementId)
  eventName.addEventListener('change', function(e) {
    const param = e.target.value;
    if (actionEvent) {
      const route = url + '/' + param;
      eventReset(elementId)
      const data = fetchData(route);
      console.log(data)
      data.then(items => {
        let options = `<option value="">Select ${title}</option>`;
        items.forEach(item => {
          options += `<option value="${item.id}">${item.bn_name}</option>`;
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

function eventReset(id) {
  if (id === 'district_id') {
    document.getElementById('union_id').innerHTML = `<option value="">Select Union</option>`;
  }
  if (id === 'division_id') {
    document.getElementById('upazila_id').innerHTML = `<option value="">Select Upazila</option>`;
    document.getElementById('union_id').innerHTML = `<option value="">Select Union</option>`;
  }
}


//         const data = { username: 'example' };

// fetch('https://example.com/profile', {
//   method: 'POST', // or 'PUT'
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify(data),
// })
//   .then((response) => response.json())
//   .then((data) => {
//     console.log('Success:', data);
//   })
//   .catch((error) => {
//     console.error('Error:', error);
//   });
</script>
@stop