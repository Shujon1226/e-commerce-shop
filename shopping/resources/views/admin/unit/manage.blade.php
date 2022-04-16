@extends('master.admin.master')

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title text-center text-info">Add Unit Form</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SI No</th>
                                    <th>Unit Name</th>
                                    <th>Unit Description</th>
                                    <th>Unit Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unit->name }}</td>
                                    <td>{{ $unit->description }}</td>
                                    <td>{{ $unit->status }}</td>
                                    <td>
                                        <a href="{{ route('edit-unit', ['id' => $unit->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('delete-unit', ['id' => $unit->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection