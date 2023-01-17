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
            <h2 class="mb-4">Customer review</h2>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Created Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $k=>$contact)
                <tr>
                    <td data-label="SL">{{++$k}}</td>
                    <td data-label="first_name"><strong>{{$contact->first_name}}</strong></td>
                    <td data-label="last_name"><strong>{{$contact->last_name}}</strong></td>
                    <td data-label="last_name"><strong>{{$contact->email}}</strong></td>
                    <td data-label="last_name"><strong>{{$contact->phone}}</strong></td>
                    <td data-label="last_name"><strong>{{$contact->message}}</strong></td>
                   
                    <td data-label="Created Time"><strong>{{dateFormate($contact->created_at)}}</strong></td>

                

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
@endsection