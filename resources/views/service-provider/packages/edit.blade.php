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
              <h4 class="widget-title">Edit Package</h4>
              <form action="{{route('packages.update',['package'=>$package->id])}}" method="post"  enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <input class="form-control" type="text" value="{{$package->id}}" name="id">
                <div class="row">
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Pakcage Name</label>
                    <input class="form-control" type="text" value="{{$package->name}}" name="name">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Service Category</label>
                    <select class="form-control form-select" name="category_id" id="category_id">
                      <option value="">Service Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" @if($package->category_id===$category->id) {{'selected'}} @endif>{{$category->name}}</option>
                      @endforeach

                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="me-sm-2">Price</label>
                    <input class="form-control" type="text" value="{{$package->price}}" name="price">
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

@stop