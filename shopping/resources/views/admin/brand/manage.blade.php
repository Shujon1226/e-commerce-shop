@extends('master.admin.master')

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="text-success text-center">{{ Session::get('message') }}</p>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->description }}</td>
                            <td><img src="{{ asset($brand->image) }}" alt="" style="height: 50px; width: 80px" /></td>
                            <td>{{ $brand->status }}</td>
                            <td>
                                <a href="{{ route('edit-brand', ['id' => $brand->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete-brand', ['id' => $brand->id]) }}" onclick="return confirm('Are you sure to delete this.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection