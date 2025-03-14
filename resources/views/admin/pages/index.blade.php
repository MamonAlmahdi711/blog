@extends('admin.master')
@section('title')
    Create New Page
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Page</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.page.create')}}" class="btn btn-primary">Page List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Page</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.page.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"><h6>Page Title<span class="text-danger">*</span></h6></label>
                                        <input type="text" name="page_title" value="{{old("page_title")}}" class="form-control" id="inputProductTitle" placeholder="Enter Page title">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label"><h6>Page Image<span class="text-danger">*</span></h6></label>
                                        <input class="dropify" type="file" name="page_image" accept="image/*">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label><h6 style="text-decoration: underline wavy orange">Page Description<span class="text-danger">*</span></h6></label>
                                        <textarea name="page_description">{{old("body")}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"><h6>Page Links (Optional)</h6></label>
                                        <input type="text" name="page_link" value="{{old("page_title")}}" class="form-control" id="inputProductTitle" placeholder="Page Links">
                                    </div>

                                    <div class="m-2">
                                        <input type="submit" value="submit" class="btn btn-success px-5 radius-30">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>


    </div>
@endsection
