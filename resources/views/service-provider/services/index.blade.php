@extends('./Frontend/layout/master')
@section('title', 'Dashboard')
@push('css')
<style>
    .img-w{
        width: 274px !important;
        height: 182px !important;
    }
    .add-btn{
    background-color: #000;
    border-radius: 8px;
    padding: 8px 12px !important;
    text-align: center;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
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
                            <div class="nav-item desc-list">
                                <!-- <h4 class="widget-title">My Services</h4> -->
                                <a href="{{route('services.create')}}" class="add-btn">
                                        <i class="fas fa-plus-circle me-1"></i>
                                        <span>Add Service</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs menu-tabs" style="margin-top:20px">
                                <li class="nav-item active">
                                    <a class="nav-link" href="my-services.html"
                                        >Active Services</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="my-services-inactive.html"
                                        >Inactive Services</a
                                    >
                                </li>
                            </ul>
                            <div class="row">
                                @foreach ($services as $service)
                                @php
                                $service_image = preg_replace('/[\]["]/i', '', $service->serviceDetails->image);
                                $images = explode(',', str_replace( '\\', '', $service_image ));
                                $image=is_array($images)?$images[0]:$images;
                                
                                @endphp
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="service-widget flex-fill">
                                        <div class="service-img">
                                            <a href="{{url('/services/'.$service->id)}}">
                                                <img
                                                    class="img-fluid serv-img img-w"
                                                    alt="Service Image"
                                                    src="{{asset('uploads/'.$image) }}"
                                                   
                                                />
                                            </a>
                                            <div class="item-info">
                                                <div class="service-user">
                                                    <span class="service-price">৳ {{$service->price}}</span
                                                    >
                                                </div>
                                                <div class="cate-list">
                                                    <a
                                                        class="bg-yellow"
                                                        href="{{url('/services/'.$service->id)}}">{{$service->category->name}}</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="{{url('/services/'.$service->id)}}">{{$service->serviceDetails->name}}</a>
                                            </h3>
                                            <div class="rating">
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <i
                                                    class="fas fa-star filled"
                                                ></i>
                                                <span
                                                    class="d-inline-block average-rating">(4.3)</span
                                                >
                                            </div>
                                            <div class="user-info">
                                                <div class="service-action">
                                                    <div class="row">
                                                        <div class="col">
                                                            <a
                                                                href="{{route('services.edit', $service->id)}}")}}"
                                                                class="text-success"
                                                                ><i
                                                                    class="far fa-edit"
                                                                ></i>
                                                                Edit</a
                                                            >
                                                        </div>
                                                        <div
                                                            class="col text-end"
                                                        >
                                                            <a
                                                                href="javascript:void(0);"
                                                                class="text-danger"
                                                                data-toggle="modal"
                                                                data-target="#deleteNotConfirmModal"
                                                                ><i
                                                                    class="far fa-trash-alt"
                                                                ></i>
                                                                Inactive</a
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             

                                <!-- Pagination Links -->
                                <div class="pagination">
                                @if ($services->lastPage() > 1)
                                    <ul>
                                        <li class="{{ ($services->currentPage() == 1) ? 'disabled' : '' }}">
                                            <a href="{{ $services->url(1) }}">
                                                <i class="fas fa-angle-left"></i></a>
                                        </li>
                                        @for ($i = 1; $i <= $services->lastPage(); $i++)
                                            <li class="{{ ($services->currentPage() == $i) ? 'active' : '' }}">
                                                <a href="{{ $services->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($services->currentPage() == $services->lastPage()) ? 'arrow' : '' }}">
                                            <a href="{{ $services->url($services->currentPage()+1) }}">
                                                <i class="fas fa-angle-right" ></i> </a>
                                        </li>
                                    </ul>
                                @endif

                                </div>
                                <!-- {{ $services->links() }} -->
                            </div>
                        </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">




</script>
@stop