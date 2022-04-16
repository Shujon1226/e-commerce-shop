@extends('master.admin.master')

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title text-center text-info">Edit Unit Form</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <form action="{{ route('update-unit' , ['id' => $unit->id]) }}" method="POST" >
                        @csrf

                            <div class="row">
                                <label class="col-md-3 form-control-label">Unit Name:</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $unit->name }}" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3 form-control-label">Unit Description:</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $unit->description }}" name="description" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-layout-footer mt-5">
                                <button type="submit" class="btn btn-info">Update New Unit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection