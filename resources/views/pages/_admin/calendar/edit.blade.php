
@extends('base.admin_base')
@section('title','LFL Calendar - Events')
@section('page-title','LFL Calendar - Events')
@section('breadcrumb-item','add events')

@section('style')
    <link href="{{ asset('assets/css/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection
@section('content')

    <!-- includes alert msg -->
    @include('includes.widgets.alertmsg')

    <form action="{{ route('calendar.update') }}" id="formLibrary" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{ $event->id }}">
        <div class="row">
            <div class="col-12">
                <!-- { Book Information } start -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Event information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-product-name">Title</label>
                            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                                   placeholder="Book title" name="title" value="{{ $event->title }}"
                                   aria-label="Book title" value="{{ old('title') }}" required>
                            @error('title')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="mb-3 col">
                                <label class="form-label mb-1" for="language">Date Start
                                </label>
                                <input type="text" id="startDt" name="startDt" class="form-control date-time flatpickr-input" placeholder="Start Date &amp; Time of Event" readonly="readonly" value="{{ $event->start }}" required  >
                                @error('startDt')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label mb-1" for="type">Date End
                                </label>
                                <input type="text"  id="endDt" name="endDt" class="form-control" placeholder="End Date &amp; Time of Event" @if(!empty($event->end)) value="{{ $event->end }}" @endif readonly="readonly">
                                @error('endDt')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label mb-1" for="type">Bullet Color
                                </label>
                                <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#257e4a" style="width:85%;" name="color" value="{{ $event->color }}" >
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label mb-1" for="type">URL / Link
                                </label>
                                <input type="text" name="url" value=" {{ !empty($event->url) ? $event->url : '' }}" readonly="readonly">
{{--                                <select id="url" name="url" class="select2 form-select"--}}
{{--                                        data-placeholder="Select Page Link">--}}
{{--                                    <option value="" selected>Select a Page</option>--}}
{{--                                    @foreach($urls as $url)--}}
{{--                                        <option value="{{ $url }}" >{{ $url  }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-product-name">Event Image Upload (200 kB file size)  <a href="javascript:void(0);" class="fw-medium float-end">Accepted Files : jpg, jpeg, png</a></label>
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
                            <textarea id="summernote" name="description">
                                {{ $event->description }}
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="align-content-center justify-content-center flex-wrap">
                            <a href="{{ route('calendar.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" name="action_type" value="update" class="btn btn-success">Update Event</button>
                        </div>
                    </div>
                </div>
                <!-- { event Information } end -->
            </div>


        </div>
    </form>
@endsection

@section('scripts')
    <script>


        flatpickr("#startDt",
            {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

        flatpickr("#endDt",
            {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
    </script>

@endsection
