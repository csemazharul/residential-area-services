<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('resources/admin/images/logo/favicon.png')}}" />

    <title></title>
    <link rel="stylesheet" href="{{asset('resources/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/admin/css/bootadmin.min.css')}}">
    <link href="{{asset('resources/admin/css/bootstrap-toggle.min.css')}}" rel="stylesheet">
    @yield('import-css')
    <link href="{{asset('resources/admin/css/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('resources/admin/css/sweetalert.css')}}"  rel="stylesheet">
    <link href="{{asset('resources/admin/css/table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('resources/admin/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" media="print" href="{{asset('resources/admin/css/print.css')}}">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    @yield('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="{{url('/')}}"></a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user"></i> {{Auth::user()->name}}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a class="dropdown-item" href="{{route('password.request')}}"> Password Settings</a>
                    <a class="dropdown-item" href="{{route('logout')}}"> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    @include('service-provider.layout.sidebar')

    <div class="content p-4">
        @yield('body')


    </div>
</div>



<script src="{{asset('resources/admin/')}}/js/jquery.min.js"></script>
<script src="{{asset('resources/admin/')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('resources/admin/js/bootstrap-toggle.min.js')}}"></script>



@yield('import-script')
<script src="{{asset('resources/admin/')}}/js/moment.min.js"></script>
<script src="{{asset('resources/admin/')}}/js/bootadmin.min.js"></script>


<script src="{{asset('resources/admin/js/toastr.min.js')}}" ></script>
<script src="{{asset('resources/admin/js/sweetalert.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


@yield('script')

<script>
 
</script>
</body>
</html>