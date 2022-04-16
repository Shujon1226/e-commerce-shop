@extends('master.admin.master')

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center text-info">Add Sub Category Form</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center text-info">{{ Session::get('message') }}</h3>
                        <form action="{{ route('new-sub-category') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Category Name:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="category_id">
                                        <option>--Select Category name--</option>
                                        @foreach ( $categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>    
                                        @endforeach
                                        
                                    </select>
                                </div>
                                
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Sub Category Name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Description:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="description" class="form-control" placeholder="Sub Category Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Image:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" multiple class="form-control-file" accept="images/*"/>
                                </div>
                            </div>

                            <div class="form-layout-footer">
                                <button type="submit" class="btn btn-info ">Create New Sub Category</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection