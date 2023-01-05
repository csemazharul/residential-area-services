@extends('admin.layout.master')
@section('body')

@php
 function dateFormate($createdTime){
    $dateTime=new DateTime($createdTime);
    $dateTime->setTimezone(new DateTimeZone('Asia/Dhaka'));
    $date = $dateTime->format('d-m-Y H:i:s A');
    return $date;
}

@endphp

<div class="card">
    <div class="card-header bg-white font-weight-bold">
        <div class="float-left">
            <h2 class="mb-4">Providers</h2>
        </div>
    </div>
    <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created Time</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($providers as $k=>$provider)
                <tr>
                    <td data-label="SL">{{++$k}}</td>
                    <td data-label="Name"><strong>{{$provider->name}}</strong></td>
                    <td data-label="Email"><strong>{{$provider->email}}</strong></td>
                    <td data-label="Block or Unblock"><strong>@if($provider->status === 0) {{'Blocked'}} @else {{'Unblocked'}} @endif</strong></td>
                    <td data-label="Created Time"><strong>{{dateFormate($provider->created_at)}}</strong></td>

                
                    <td data-label="Action">
                        <a href="{{url('admin/user/block/'.$provider->id.'/'.$provider->status)}}" class="btn btn-warning  btn-icon btn-pill" title="Blockd">
                        @if($provider->status === 0) {{'Unblocked'}} @else {{'Blocked'}} @endif
                        </a>
                        <a href="{{url('admin/user/delete/'.$provider->id)}}"" class="btn btn-danger btn-icon btn-pill" title="Delete">
                            Delete
                        </a>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
@endsection