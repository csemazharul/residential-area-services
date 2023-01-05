
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$page_title}}</title>
    <link rel="stylesheet" href="{{ asset('resources/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/admin/css/bootadmin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/admin/css/fontawesome-all.min.css') }}">
    <script src="{{ asset('resources/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/admin/js/bootstrap-notify.min.js') }}"></script>
    <link rel="icon" type="image/png" href="{{asset('resources/images/logo/favicon.png')}}" />
</head>
<body class="bg-secondary">

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-4">
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('error') }}
                </div>
            @elseif(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('success') }}
                </div>
            @elseif(session()->has('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('alert') }}
                </div>
            @endif
            <div class="card br-10 bg-dark">
                <div class="card-header">
                    <h3 class="text-center text-white">Admin Sign In</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="email" value="{{old('email')}}"  class="form-control form-control-lg" name="email"
                                   placeholder="email">
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" name="password"
                                   placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('resources/admin/js/bootadmin.min.js') }}"></script>
<script src="{{ asset('resources/admin/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
