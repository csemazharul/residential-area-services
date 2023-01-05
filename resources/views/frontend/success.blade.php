
@extends('./Frontend/layout/master')

@section('title', 'Seervices')

@push('css')
    <style>
       body {
        font-family: sans-serif;
        text-align: center;
      }
      h1 {
        color: green;
      }
      table {
        border-collapse: collapse;
        margin: auto;
      }
      th, td {
        border: 1px solid black;
        padding: 8px;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
@endpush
@section('content')
<div class="content">
			<div class="container">
				<div class="row">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Transaction is successfully Completed ! </h2>
            </div>
            <div class="card-body">
               <p>Thank you for booking with us!</p>
               <p>Your booking track number <strong>@if(isset($data['track_number'])) #{{$data['track_number']}} @endif</strong></p>
            </div>
          </div>
				</div>
			</div>
		</div>﻿
@endsection
