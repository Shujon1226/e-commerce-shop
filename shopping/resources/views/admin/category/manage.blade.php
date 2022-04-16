@extends('master.admin.master')

@section('body')
<div class='container py-5 mt-5'>
    <div class='row'>
        <div class='col-md-10 mx-auto'>
            <p class="text-success text-center">{{ Session::get('message') }}</p>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Category Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><img src="{{ asset($category->image) }}" alt="" style="height: 50px; width: 80px" /></td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <a href="{{ route('edit-category', ['id'=> $category->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"> </i></a>
                            <a href="{{ route('delete-category', ['id'=> $category->id]) }}" onclick="return confirm('Are you sure to delete this.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"> </i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection

