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
                        <form action="{{ route('new-unit') }}" method="POST" >
                        @csrf

                            <div class="row">
                                <label class="col-md-3 form-control-label">Unit Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3 form-control-label">Unit Description:</label>
                                <div class="col-md-9">
                                    <input type="text" name="description" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-layout-footer mt-5">
                                <button type="submit" class="btn btn-info">Create New Unit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection