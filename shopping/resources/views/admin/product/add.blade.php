@extends('master.admin.master')

@section('body')
<div class='container py-5 mt-5'>
    <div class='row'>
        <div class='col-md-10 mx-auto'>              
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-info text-center ">Add Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{ Session::get('message') }}</p>
                    <form class="form-horizontal" action="{{ route('new-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select class="form-control form-control-dark" name="category_id">
                                    <option>-- Select Category Name --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Sub Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select class="form-control form-control-dark" name="sub_category_id">
                                    <option>-- Select Sub Category Name --</option>
                                    @foreach ($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select class="form-control form-control-dark" name="brand_id">
                                    <option>-- Select Brand Name --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Unit Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select class="form-control form-control-dark" name="unit_id">
                                    <option>-- Select Unit Name --</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Product Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="name" class="form-control form-control-dark" placeholder="Enter Product Name">
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Product Code: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="code" class="form-control form-control-dark" placeholder="Enter Product Code">
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Regular Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="regular_price" class="form-control form-control-dark" placeholder="Enter Regular Price">
                            </div>
                        </div><!-- row -->

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="selling_price" class="form-control form-control-dark" placeholder="Enter Selling Price">
                            </div>
                        </div><!-- row -->
    
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Short Description: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea type="text" name="short_description" class="form-control form-control-dark" placeholder="Enter Short Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Long Description: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea type="text" name="long_description" class="form-control form-control-dark summernote" placeholder="Enter Long Description"></textarea>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Product Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image" class="form-control form-control-dark" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Product Sub Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="file" name="sub_image[]" multiple class="form-control form-control-dark" accept="image/*">
                            </div>
                        </div>
                        
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-primary">Create New Product</button>
                        </div><!-- form-layout-footer -->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

