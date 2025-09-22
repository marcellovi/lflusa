
@extends('base.admin_base')
@section('title','LFL Library')
@section('page-title','LFL Library')
@section('breadcrumb-item','add book')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('books.store') }}" id="formLibrary" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
    <div class="row">
        <div class="col-12 col-lg-8">
            <!-- { Book Information } start -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Edit Book information</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-name">Title</label>
                        <input type="text" class="form-control" id="title"
                               placeholder="Book title" name="title"
                               aria-label="Book title" >
                    </div>
                    <div class="row mb-3">
                        <div class="mb-3 col">
                            <label class="form-label mb-1" for="language">Language
                            </label>
                            <select id="langague" name="langague" class="select2 form-select"
                                    data-placeholder="Language" >
                                <option value="men-clothing">Portuguese</option>
                                <option value="women-clothing">English</option>
                                <option value="kid-clothing">Spanish</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label mb-1" for="language">Type
                            </label>
                            <select id="type" name="type" class="select2 form-select"
                                    data-placeholder="Type">
                                <option value="men-clothing">Sell</option>
                                <option value="women-clothing">Rent</option>
                                <option value="kid-clothing">Study</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-name">Book Cover Upload (200 kB file size)  <a href="javascript:void(0);" class="fw-medium float-end">Accepted Files : jpg, jpeg, png</a></label>

                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <!-- { Description } -->
                    <div>
                        <label class="form-label">Description <span
                                class="text-muted">(Optional)</span></label>
                        <div class="form-control p-0 pt-1">
                            <div id="summernote">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- { Product Information } end -->


        </div>

        <div class="col-12 col-lg-4">
            <!-- { Pricing } -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pricing</h5>
                </div>
                <div class="card-body">
                    <!-- { Base Price } -->
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-price">Book Price</label>
                        <input type="number" class="form-control" id="price"
                               placeholder="Price" name="price" aria-label="Book price">
                    </div>
                    <!-- { Discounted Price } -->
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-discount-price">N. of
                            Copies</label>
                        <input type="number" class="form-control"
                               id="copies" placeholder="Copies"
                               name="copies" aria-label="Copies" step="1">
                    </div>
                </div>
            </div>
            <!-- { Pricing } end -->
            <!-- { Organize } -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Organize</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="ecommerce-product-tags" class="form-label mb-1">Author(s)</label>
                        <select id="authors" name="authors[]" class="select2 form-select" data-placeholder="Authors"
                                multiple>
                            <option value="Chico">Chico</option>
                            <option value="Published">Divaldo</option>
                            <option value="Scheduled">Zemelia</option>
                            <option value="Inactive">Inacio</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-1" for="vendor">Publisher</label>
                        <select id="publisher" name="publisher" class="select2 form-select"
                                data-placeholder="Select Vendor">
                            <option value="FEB">FEB</option>
                            <option value="men-clothing">Tyupiara</option>
                            <option value="women-clothing">Atta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label
                            class="form-label mb-1 d-flex justify-content-between align-items-center"
                            for="category-org">
                            <span>By Spirit</span>
                            <a href="javascript:void(0);" class="fw-medium">Add new spirit</a>
                        </label>
                        <select id="spirit" name="spirit" class="select2 form-select"
                                data-placeholder="Select Spirit">
                            <option value="Household">Emmanoel</option>
                            <option value="Management">Helia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="edition">Edition</label>
                        <input type="number" class="form-control"
                               id="edition"
                               name="year_published" aria-label="year_published" step="1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="year-published">Year Published</label>
                        <input type="number" class="form-control"
                               id="year_published" placeholder="Only the year"
                               name="year_published" aria-label="year_published">
                    </div>
{{--                    <div class="mb-3 col">--}}
{{--                        <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>--}}
{{--                        <select id="Tags-org" class="select2 form-select" data-placeholder="Tags"--}}
{{--                                multiple>--}}
{{--                            <option value="">Tags</option>--}}
{{--                            <option value="Published">Published</option>--}}
{{--                            <option value="Scheduled">Scheduled</option>--}}
{{--                            <option value="Inactive">Inactive</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Book Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-content-center justify-content-center flex-wrap gap-3">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="btn btn-primary-light">Save draft</button>
                        <button type="submit" class="btn btn-success">Create book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('scripts')



@endsection
