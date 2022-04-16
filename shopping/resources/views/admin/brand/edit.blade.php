@extends('master.admin.master')

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title text-center text-info">Edit Brand Form</h3>
                    </div>
                    <form action="{{ route('update-brand', ['id' => $brand->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputId" class="col-sm-2 col-form-label">Brand Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control" id="inputId" placeholder="Enter Brand Name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Brand Description:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="description" class="form-control" id="inputName" placeholder="Enter Brand Description">{{ $brand->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Image:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control-file" accept="image/*"/>
                                    <img src="{{ asset($brand->image) }}" alt="" style="height: 100px; width: 130px"/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="submit" class="btn btn-info">Update New Brand</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection