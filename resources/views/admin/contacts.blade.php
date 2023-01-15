@extends('admin.layout.master')
@section('body')
<div class="card">
    <div class="card-header bg-white font-weight-bold">
        <div class="float-left">
            <h2 class="mb-4">All Contact List </h2>
        </div>

    </div>
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $k=>$contact)
                <tr>
                    <td data-label="SL">{{++$k}}</td>
                    <td data-label="Categroy"><strong>{{$contact->first_name}}</strong></td>
                    <td data-label="Categroy"><strong>{{$contact->last_name}}</strong></td>
                    <td data-label="Categroy"><strong>{{$contact->email}}</strong></td>
                    <td data-label="Categroy"><strong>{{$contact->phone}}</strong></td>
                    <td data-label="Categroy"><strong>{{$contact->message}}</strong></td>
          
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
@endsection