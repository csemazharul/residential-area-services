
@extends('admin.layout.master')

@section('body')






<!-- <div class="row mb-4">
    <div class="col-md">
        <a href="" class="textDecoration">
            <div class="d-flex border">
                <div class="bg-danger text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-road"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Service Owner 20 </p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md">
        <a href="" class="textDecoration">
            <div class="d-flex border">
                </div> 
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total User 5</p>
                </div>
            </div>
        </a>
    </div>


</div> -->

<!-- <div class="row">
    <div class="col-md-6">
        <h4 class="mb-4"> <i class="fas fa-users"></i> Agent Statistics </h4>
        <div class="row mb-4">
            <div class="col-md">
                <a href="" class="textDecoration">
                    <div class="d-flex border">
                        <div class="bg-primary text-light p-4">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-3x fa-fw fa-users"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 bg-white p-4">
                            <p class="text-uppercase text-secondary mb-0">Total Agent</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md">
                <a href="" class="textDecoration">
                    <div class="d-flex border">
                        <div class="bg-danger text-light p-4">
                            <div class="d-flex align-items-center h-100">
                                <i class="fa fa-3x fa-fw fa-users"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 bg-white p-4">
                            <p class="text-uppercase text-secondary mb-0">Ban Agent</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> -->

<h4 class="mb-4"><i class="fa fa-users"></i>Statistics</h4>
<div class="row mb-4">
    <div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Users</p>
                    <h3 class="font-weight-bold mb-0">2</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Service Providers</p>
                    <h3 class="font-weight-bold mb-0">2</h3>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Service Bookings</p>
                    <h3 class="font-weight-bold mb-0">4</h3>
                </div>
            </div>
        </a>
    </div>





</div>


<div class="row mb-4">
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Pending Bookings</p>
                    <h3 class="font-weight-bold mb-0">1</h3>
                </div>
            </div>
        </a>
    </div>
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Approved Bookings</p>
                    <h3 class="font-weight-bold mb-0">1</h3>
                </div>
            </div>
        </a>
    </div>
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Inprogress Bookings</p>
                    <h3 class="font-weight-bold mb-0">2</h3>
                </div>
            </div>
        </a>
    </div>



    </div> 
 


<div class="row">
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Complete Bookings</p>
                    <h3 class="font-weight-bold mb-0">0</h3>
                </div>
            </div>
        </a>
    </div>
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Service Category</p>
                    <h3 class="font-weight-bold mb-0">7</h3>
                </div>
            </div>
        </a>
    </div>
<div class="col-md">
        <a href="route('fleet-registration')" class="textDecoration">
            <div class="d-flex border">
                <!-- <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa-fw fas fa-bus fa-3x"></i>
                    </div>
                </div> -->
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total User reviews</p>
                    <h3 class="font-weight-bold mb-0">3</h3>
                </div>
            </div>
        </a>
    </div>
</div>










@endsection

@section('script')
<script type="text/javascript" src="asset('assets/admin/js/chart.js')"></script>
<script type="text/javascript">
    var data = {
        labels: {
            !!json_encode($month) !!
        },
        datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: {
                !!json_encode($monthly_sell) !!
            },
        }]
    };


    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);
</script>

@stop