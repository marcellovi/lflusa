@extends('base.admin_base')
@section('title','LFL Prayer Box')
@section('page-title','LFL Prayer Box')
@section('breadcrumb-item','Prayer Box')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <h3 class="card-title"><a href="{{ route('prayerbox.print') }}" target="_blank" class="btn btn-outline-secondary">Imprimir</a></h3>
               </div>
                <div class="card-body">
{{--                    <div--}}
{{--                        class="d-flex border-bottom mb-4 pt-0 pb-3 justify-content-between align-items-center row  gap-3 gap-md-0 m-0">--}}
{{--                        <div class="col-md-4 product-status ps-0">--}}
{{--                            <select id="ProductStatus" class="form-select text-capitalize select2">--}}
{{--                                <option value="">Status</option>--}}
{{--                                <option value="Scheduled">Active</option>--}}
{{--                                <option value="Publish">Sold</option>--}}
{{--                                <option value="Inactive">Rented</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product_stock">--}}
{{--                            <select id="ProductStock" class="form-select text-capitalize select2">--}}
{{--                                <option value=""> Stock</option>--}}
{{--                                <option value="Out_of_Stock">Out of Stock</option>--}}
{{--                                <option value="In_Stock">In Stock</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-category pe-0">--}}
{{--                            <a href="javascript:void(0)" class="btn btn-outline-secondary">Secondary</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="ProductListTable">
                            <thead>
                            <tr>
                                <th>Names</th>
                                <th>Type</th>
                                <th>Date</th>
                                {{--                                <th>actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prayerBoxes as $prayer_box)
                                <tr>
                                    <td>
                                        <div
                                            class="d-flex justify-content-start align-items-center product-name">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-nowrap mb-0">{{ $prayer_box->names }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-truncate d-flex align-items-center">
                                            {{ $prayer_box->type }}
                                        </div>
                                    </td>
                                    <td>{{ date_format($prayer_box->created_at,'Y-m-d')  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
