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

                        <div class="nav-item desc-list">
                                <!-- <h4 class="widget-title">My Services</h4> -->
                                <a href="{{route('packages.create')}}" class="btn-primary">
                                        <i class="fas fa-plus-circle me-1"></i>
                                        <span>Add Package </span>
                                </a>
                            </div>

                            <!-- <h4 class="widget-title">Service Packages</h4> -->
                            <div class="card transaction-table mb-0" style="margin-top:20px">
                                <div class="card-body">
                                @if (session('success'))
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{session('success')}}
  </div>
@endif
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Package Name</th>
                                                    <th>Service Category</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($packages as $package)
                                                <tr>
                                                    <td>
                                                     {{$package->name}}
                                                    </td>
                                                    <td>
                                                     {{$package->category->name}}
                                                    </td>
                                                    <td>
                                                       {{$package->price}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('packages.edit',['package'=>$package->id])}}" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{route('packages.destroy',['package'=>$package->id])}}" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="pagination">
                                @if ($packages->lastPage() > 1)
                                    <ul>
                                        <li class="{{ ($packages->currentPage() == 1) ? 'disabled' : '' }}">
                                            <a href="{{ $packages->url(1) }}">
                                                <i class="fas fa-angle-left"></i></a>
                                        </li>
                                        @for ($i = 1; $i <= $packages->lastPage(); $i++)
                                            <li class="{{ ($packages->currentPage() == $i) ? 'active' : '' }}">
                                                <a href="{{ $packages->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($packages->currentPage() == $packages->lastPage()) ? 'arrow' : '' }}">
                                            <a href="{{ $packages->url($packages->currentPage()+1) }}">
                                                <i class="fas fa-angle-right" ></i> </a>
                                        </li>
                                    </ul>
                                @endif

                                </div>

                        </div>
                    </div>
                </div>
            </div>
            @endsection            