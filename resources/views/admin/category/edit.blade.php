
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
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <!-- @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif -->

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            <a href="{{url('admin/categories')}}" class="btn btn-success btn-md float-right">
                <i class="fa-fw fas fa-map"></i> All Category
            </a>
        </div>
        
        <form role="form" method="POST" action="{{ route('admin.categories.update', ['category'=>$category->id]) }}" name="editForm"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}


            <div class="card-body">
                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                    </div>
                </div>

                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Category Name <span class="error">*</span></strong></label>
                        <input type="text" value="{{$category->name}}" name="name" class="form-control form-control-lg" 
                               placeholder="Category Name" id="counter_name" value="">
                    </div>
                </div>

             
                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Image <span class="error">*</span></strong></label>
                        <input type="file" name="image" class="form-control form-control-lg">
                    </div>
                </div>


                <div class="form-row">
                    <div class="offset-md-1 col-md-9 mb-3">
                        <label><strong>Status</strong></label>
                        <input type="checkbox" name="status" data-toggle="toggle" data-on="Active" data-off="DeActive"
                               checked
                               data-onstyle="success" data-offstyle="danger" data-width="100%">
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
