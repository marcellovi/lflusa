
@extends('base.admin_base')
@section('title','LFL Library')
@section('page-title','LFL Library')
@section('breadcrumb-item','add book')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-message">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-message">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
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
                    <h5 class="card-tile mb-0">Book information</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-name">Title</label>
                        <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                               placeholder="Book title" name="title"
                               aria-label="Book title" value="{{ old('title') }}" required>
                        @error('title')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="mb-3 col">
                            <label class="form-label mb-1" for="language">Language
                            </label>
                            <select id="langague" name="language_id" class="select2 form-select"
                                    data-placeholder="language" >
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}" {{ old('language_id') == $language->id ? 'selected' : '' }} >{{ trans($language->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label mb-1" for="type">Type
                            </label>
                            <select id="type" name="type" class="select2 form-select"
                                    data-placeholder="Type">
                                @foreach($books_type as $book_type)
                                    <option value="{{ $book_type }}"  {{ old('type') == $book_type ? 'selected' : '' }} >{{ trans($book_type) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-name">Book Cover Upload (200 kB file size)  <a href="javascript:void(0);" class="fw-medium float-end">Accepted Files : jpg, jpeg, png</a></label>
                        <input type="file" class="form-control  @error('file') is-invalid @enderror" id="file" name="file">
                        @error('file')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <!-- { Description } -->
                    <div>
                        <label class="form-label">Description <span
                                class="text-muted">(Optional)</span></label>
                        <div class="form-control p-0 pt-1">
                            <textarea id="summernote" name="description">{{ old('description') }}
                            </textarea>
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
                        <input type="number" class="form-control" id="price" value="0"
                               placeholder="Price" name="price" aria-label="Book price" value="{{ old('price') }}">
                    </div>
                    <!-- { Discounted Price } -->
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-product-discount-price">N. of
                            Copies</label>
                        <input type="number" class="form-control"
                               id="copies" placeholder="Copies"
                               name="copies" aria-label="Copies" step="1" value="1" value="{{ old('copies') }}">
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
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-1" for="vendor">Publisher</label>
                        <select id="publisher" name="publisher_id" class="select2 form-select"
                                data-placeholder="Select Publisher" required>
                            <option value="" selected>Select a Publisher</option>
                        @foreach($publishers as $publisher)
                                <option value="{{ $publisher->id }}" {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>{{ $publisher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--<div class="mb-3">
                        <label
                            class="form-label mb-1 d-flex justify-content-between align-items-center"
                            class="form-label mb-1 d-flex justify-content-between align-items-center"
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
                    </div>--}}
                    <div class="mb-3">
                        <label class="form-label" for="edition">Edition</label>
                        <input type="number" class="form-control"
                               id="edition"
                               name="edition" aria-label="year_published" step="1" value="{{ old('edition') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="year-published">Year Published</label>
                        <input type="number" class="form-control"
                               id="year_published" placeholder="Only the year"
                               name="year_published" aria-label="year_published" value="{{ old('year_published') }}">
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
                    <div class="align-content-center justify-content-center flex-wrap">
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="action_type" value="draft" class="btn btn-primary-light">Save draft</button>
                        <button type="submit" name="action_type" value="save" class="btn btn-success">Save book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                setTimeout(() => {
                    alertMessage.style.display = 'none'; // Or alertMessage.remove(); to remove from DOM
                }, 4000); // 4000 milliseconds = 4 seconds
            }
        });
    </script>


@endsection
