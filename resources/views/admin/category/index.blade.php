@extends('admin.layout.master')
@section('body')
<div class="card">
    <div class="card-header bg-white font-weight-bold">
        <div class="float-left">
            <h2 class="mb-4">{{$page_title}}</h2>
        </div>

        <div class="float-right">
            <a href="{{route('admin.categories.create')}}" class="btn btn-success  btn-icon"> <i class="fa fa-plus"></i> Add New </a>
        </div>
    </div>
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Status</th>

                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $k=>$data)
                <tr>
                    <td data-label="SL">{{++$k}}</td>
                    <td data-label="Categroy"><strong>{{$data->name}}</strong></td>
                    <td data-label="Image"><img width="80px" height="50px" src={{asset('/uploads/'.$data->image)}} /></td>

                    <td data-label="Status">
                        <span class="badge  badge-pill  badge-{{ $data->status ===0 ? 'danger' : 'success' }}">{{ $data->status == 0 ? 'Deactive' : 'Active' }}</span>
                    </td>
                    <td data-label="Action">
                        <a href="{{route('admin.categories.edit',$data->id)}}" class="btn btn-success  btn-icon btn-pill" title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a href="{{route('admin.categories.destroy',$data->id)}}"" class="btn btn-danger  btn-icon btn-pill" title="Delete">
                            <i class="fa fa-trash"></i>
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