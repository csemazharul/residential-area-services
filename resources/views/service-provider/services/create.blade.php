@extends('./Frontend/layout/master')
@section('title', 'Dashboard')
@push('import-css')
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
              <h4 class="widget-title">Add Service</h4>
              <form action="{{route('services.store')}}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Name</label>
                    <input class="form-control" type="text" value="" name="name">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Category</label>
                    <select class="form-control form-select" name="category_id" id="category_id">
                      <option value="">Service Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
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
                      <option value="{{$division->id}}">{{$division->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">District</label>
                    <select class="form-control form-select" name="district_id" id="district_id">
                      <option value="">District</option>
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Upazila</label>
                    <select class="form-control form-select" name="upazila_id" id="upazila_id">
                      <option value="">Upazila</option>
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Union</label>
                    <select class="form-control form-select" name="union_id" id="union_id">
                      <option value="">Union</option>
                    </select>
                  </div>
                  <!-- <div class="col-xl-12">
                    <h5 class="form-title">Address</h5>
                  </div> -->
                  <div class="form-group col-xl-12">
                    <label class="me-sm-2">Service Description</label>
                    <textarea type="text" class="form-control" name="description" value=""></textarea>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="me-sm-2">Additional Information</label>
                    <textarea type="text" class="form-control" name="short_description" value=""></textarea>
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
                                                    <!-- <li>
                                                        <div
                                                            class="upload-images"
                                                        >
                                                            <img
                                                                alt="Service Image"
                                                                src="assets/img/services/service-08.jpg"
                                                            />
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Charge.</label>
                    <input type="text" class="form-control" name="price" value="">
                  </div>
                  <div class="form-group col-xl-12">
                    <button id="form_submit" class="btn btn-primary ps-5 pe-5"
                      type="submit">Save</button>
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
<script type="text/javascript">

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