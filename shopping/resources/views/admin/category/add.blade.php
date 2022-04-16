@extends('master.admin.master')

@section('body')
<div class='container py-5 mt-5'>
    <div class='row'>
        <div class='col-md-10 mx-auto'>              
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-info text-center ">Add Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{ Session::get('message') }}</p>
                    <form class="form-horizontal" action="{{ route('new-category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="name" class="form-control form-control-dark" placeholder="Enter Category Name">
                            </div>
                        </div><!-- row -->
    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Category Description: </label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea type="text" name="description" class="form-control form-control-dark" placeholder="Enter Description"></textarea>
                            </div>
                        </div>
    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Category Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="form-control form-control-dark" accept="image/*">
                            </div>
                        </div>
                        
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-primary">Create New Category</button>
                        </div><!-- form-layout-footer -->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

