@extends('master.admin.master')

@section('body')
    <div class='container py-5 mt-5'>
        <div class='row'>
            <div class='col-md-10 mx-auto'>
                <form class="form-horizontal" action="{{ route('update-category', ['id'=> $category->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout form-layout-4 ">
                        <h3 class="text-center">Edit Category Form</h3><hr>

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control form-control-dark" placeholder="Enter Category Name">
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Category Description: </label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea type="text" name="description" class="form-control form-control-dark" placeholder="Enter Description">{{ $category->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Category Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="form-control form-control-dark" accept="image/*">
                                <img src="{{ asset($category->image) }} " alt="" style="height: 100px; width: 130px"/>
                            </div>
                        </div>
                        
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-primary">Update New Category</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div>
        </div>
    </div>
@endsection

