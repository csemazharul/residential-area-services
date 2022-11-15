@extends('admin.layout.master')
@section('import-css')
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/jquery.simple-dtpicker.css')}}">
@endsection

@section('css')
    <style>
        .btn-light {
            background-color: #f8f9fa;
            border-color: #ced4da;
        }
        .bootstrap-select > .dropdown-toggle.bs-placeholder, .bootstrap-select > .dropdown-toggle.bs-placeholder:active, .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .bootstrap-select > .dropdown-toggle.bs-placeholder:hover {
            color: #1d1919;
        }
    </style>
@stop


@section('body')

    <h2 class="mb-4">{{$page_title}}</h2>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            <a href="{{route('counter.index')}}" class="btn btn-success btn-md float-right">
                <i class="fa-fw fas fa-map"></i> All Counter
            </a>
        </div>

        <form role="form" method="POST" action="{{route('counter.update',$editData->id)}}" name="editForm"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('put')}}

            <div class="card-body">
                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        @include('errors.error')
                    </div>
                </div>

                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Counter Name <span class="error">*</span></strong></label>
                        <input type="text" name="counter_name" class="form-control form-control-lg" type="text"
                               placeholder="Counter Name" id="counter_name" value="{{$editData->counter_name}}">
                    </div>

                </div>

                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                      <select name="location_id" class="form-control @if ($errors->has('location_id')) is-invalid @endif" style="width: 100%" data-live-search="true">
                          <option value="">Select Location</option>
                          @foreach ($locations as $key => $value)
                            <option value="{{$key}}" @if($key==$editData->location_id){{'selected'}}@endif>{{$value}}</option>
                          @endforeach
                      </select>

                    </div>

                </div>

                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Address<span class="error">*</span></strong></label>

                        <textarea name="address" class="form-control form-control-lg"
                               placeholder="Counter Address" id="address">{{$editData->address}}</textarea>

                    </div>

                </div>



                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Status</strong></label>
                        <input type="checkbox" name="status" data-toggle="toggle" data-on="Active" data-off="DeActive"
                              @if($editData->status == 1) checked @endif data-onstyle="success" data-offstyle="danger" data-width="100%">
                    </div>
                </div>

            </div>

            <div class="card-footer bg-white">
                <button class="btn btn-success btn-block btn-lg" type="submit">Save</button>
            </div>

        </form>
    </div>



@endsection

@section('import-script')

    <script src="{{asset('assets/admin/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.simple-dtpicker.js')}}"></script>

@stop
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.datetimepicker').appendDtpicker();
        })

    </script>
@stop
