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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th>Created Time</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $k=>$review)
                <tr>
                    <td data-label="SL">{{++$k}}</td>
                    <td data-label="Title"><strong>{{$review->title}}</strong></td>
                    <td data-label="Comment"><strong>{{$review->comment}}</strong></td>
                    <td data-label="Rating"><strong>
                      <!-- //star icons -->
                      @for($i=0;$i<=$review->rating;$i++) 
                      <i class="fa fa-fw fa-star"></i>
                      @endfor
                    </strong></td>
                    <td data-label="Created Time"><strong>{{dateFormate($review->created_at)}}</strong></td>

                
                    <td data-label="Action">
                        <a href=""" class="btn btn-info btn-icon btn-pill" title="View">
                            View
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