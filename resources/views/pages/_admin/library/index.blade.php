
@extends('base.admin_base')
@section('title','LFL Library')
@section('page-title','LFL Library')
@section('breadcrumb-item','library')
@section('content')

    <div class="row">
        <div class="col-12">
            <!-- { Product List Widget } -->
            <div class="card">
                <div class="card-body">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2 fw-semibold">{{ trans('messages.total_books') }}</h6>
                                    <h4 class="mb-2">{{ $books->sum('copies') }}</h4>
                                    <p class="mb-0"><span class="text-muted me-2">5k
                                                                orders</span><span class="badge bg-success">+5.7%</span>
                                    </p>
                                </div>
                                <div class="avatar me-sm-4">
                                                        <span class="avatar  bg-secondary">
                                                            <i class="bx bx-store-alt bx-sm"></i>
                                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2 fw-semibold">{{ trans('messages.total_books_sold') }}</h6>
                                    <h4 class="mb-2">$674,347.12</h4>
                                    <p class="mb-0"><span class="text-muted me-2">21k
                                                                orders</span><span
                                            class="badge bg-success">+12.4%</span></p>
                                </div>
                                <div class="avatar me-lg-4">
                                                        <span class="avatar bg-secondary">
                                                            <i class="bx bx-laptop bx-sm"></i>
                                                        </span>
                                </div>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h6 class="mb-2 fw-semibold">{{ trans('messages.total_books_rented') }}</h6>
                                    <h4 class="mb-2">$8,345.23</h4>
                                    <p class="mb-0"><span class="text-muted me-2">150
                                                                orders</span><span class="badge bg-danger">-3.5%</span>
                                    </p>
                                </div>
                                <div class="avatar  me-sm-4">
                                                        <span class="avatar bg-secondary">
                                                            <i class="bx bx-wallet bx-sm"></i>
                                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start ">
                                <div>
                                    <h6 class="mb-2 fw-semibold">{{ trans('messages.monthly_book_sales') }}</h6>
                                    <h4 class="mb-2">$14,235.12</h4>
                                    <p class="mb-0 text-muted">6k orders</p>
                                </div>
                                <div class="avatar">
                                                        <span class="avatar bg-secondary">
                                                            <i class="bx bx-gift bx-sm"></i>
                                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Filter</h3>
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
{{--                                <option value=""> Stock </option>--}}
{{--                                <option value="Out_of_Stock">Out of Stock</option>--}}
{{--                                <option value="In_Stock">In Stock</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-category pe-0">--}}
{{--                            <select id="ProductCategory"--}}
{{--                                    class="form-select text-capitalize select2">--}}
{{--                                <option value="">Category</option>--}}
{{--                                <option value="Household">Household</option>--}}
{{--                                <option value="Office">Office</option>--}}
{{--                                <option value="Electronics">Electronics</option>--}}
{{--                                <option value="Shoes">Shoes</option>--}}
{{--                                <option value="Accessories">Accessories</option>--}}
{{--                                <option value="Game">Game</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="ProductListTable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>author</th>
                                <th>condition</th>
                                <th>type</th>
                                <th>price</th>
                                <th>qty</th>
                                <th>status</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>
                                    <div
                                        class="d-flex justify-content-start align-items-center product-name">
{{--                                        <div class="avatar-wrapper">--}}
{{--                                            <div--}}
{{--                                                class="avatar avatar me-2 rounded-2 bg-label-secondary">--}}
{{--                                                <img src="../assets/images/products/9.jpg"--}}
{{--                                                     alt="Product-9" class="rounded-2">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="d-flex flex-column">
                                            <h6 class="text-nowrap mb-0">{{ $book->title }}</h6>
                                            <small class="text-muted text-truncate d-none d-sm-block">by {{ $book->publisher }} | Ed. {{ $book->edition }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-truncate d-flex align-items-center">
                                        @php
                                            $flag = 'flag flag-so';

                                            switch($book->language) {
                                                case 'messages.portuguese':
                                                    $flag = 'flag flag-br'; break;
                                                case 'messages.english':
                                                    $flag = 'flag flag-us'; break;
                                                case 'messages.spanish':
                                                    $flag = 'flag flag-es'; break;
                                            }
                                        @endphp
                                         <i class="{{ $flag }} m-1"></i>
                                        {{ $book->author }}
                                    </div>
                                </td>
                                <td>
                                   {{ $book->condition }}
                                </td>
                                <td>{{ trans($book->type) }}</td>
                                <td>${{ $book->price }}</td>
                                <td>{{ $book->copies }}</td>
                                <td><span class="badge {{ ($book->status) ? 'bg-success' : 'bg-danger' }} ">{{ ($book->status) ? 'ativo' : 'inativo' }}</span></td>
                                <td>
                                    <div class="d-inline-block text-nowrap">
                                        <button class="btn btn-sm btn-icon">
                                            <a href="{{route('books.edit',$book->book_id)}}"><i
                                                class="bx bx-edit"></i></a></button>
                                        <button
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded me-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
{{--                                            <a href="javascript:0;"--}}
{{--                                               class="dropdown-item">View</a>--}}
                                            <a href="javascript:0;"
                                               class="dropdown-item">{{ (!$book->status) ? 'Re-Ativar' : 'Suspender' }}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div--}}
{{--                                        class="d-flex justify-content-start align-items-center product-name">--}}
{{--                                        <div class="avatar-wrapper">--}}
{{--                                            <div--}}
{{--                                                class="avatar avatar me-2 rounded-2 bg-label-secondary">--}}
{{--                                                <img src="../assets/images/products/oneplus-lg.png"--}}
{{--                                                     alt="oneplus-lg" class="rounded-2">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex flex-column">--}}
{{--                                            <h6 class="text-nowrap mb-0">Oneplus--}}
{{--                                                Mobile</h6><small--}}
{{--                                                class="text-muted text-truncate d-none d-sm-block">--}}
{{--                                                oneplus smart phone</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                                            <span class="text-truncate d-flex align-items-center">--}}
{{--                                                                <span--}}
{{--                                                                    class="avatar avatar-sm rounded-circle d-flex justify-content-center align-items-center fs-20 bg-primary me-2">--}}
{{--                                                                    <i class="bx bx-mobile-alt"></i></span>Electronics--}}
{{--                                                            </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="switch switch-square">--}}
{{--                                        <input type="checkbox" class="switch-input" checked>--}}
{{--                                        <span class="switch-toggle-slider">--}}
{{--                                                                    <span class="switch-on"></span>--}}
{{--                                                                    <span class="switch-off"></span>--}}
{{--                                                                </span>--}}
{{--                                    </label>--}}
{{--                                    <span class="d-none">In Stock</span>--}}
{{--                                </td>--}}
{{--                                <td>0854</td>--}}
{{--                                <td>$500</td>--}}
{{--                                <td>1500</td>--}}
{{--                                <td>--}}
{{--                                    <span class="badge  bg-warning">Scheduled</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="d-inline-block text-nowrap">--}}
{{--                                        <button class="btn btn-sm btn-icon"><i--}}
{{--                                                class="bx bx-edit"></i></button>--}}
{{--                                        <button--}}
{{--                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"--}}
{{--                                            data-bs-toggle="dropdown">--}}
{{--                                            <i class="bx bx-dots-vertical-rounded me-2"></i>--}}
{{--                                        </button>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-end m-0">--}}
{{--                                            <a href="javascript:0;"--}}
{{--                                               class="dropdown-item">View</a>--}}
{{--                                            <a href="javascript:0;"--}}
{{--                                               class="dropdown-item">Suspend</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class="sorting_1">--}}
{{--                                    <div--}}
{{--                                        class="d-flex justify-content-start align-items-center product-name">--}}
{{--                                        <div class="avatar-wrapper">--}}
{{--                                            <div--}}
{{--                                                class="avatar avatar me-2 rounded-2 bg-label-secondary">--}}
{{--                                                <img src="../assets/images/products/19.jpg"--}}
{{--                                                     alt="Product-19" class="rounded-2">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex flex-column">--}}
{{--                                            <h6 class="text-nowrap mb-0">Stylish Summer Look</h6>--}}
{{--                                            <small class="text-muted text-truncate d-none d-sm-block">--}}
{{--                                                Smart looking</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td><span class="text-truncate d-flex align-items-center"><span--}}
{{--                                            class="avatar avatar-sm fs-20 rounded-circle d-flex justify-content-center align-items-center bg-secondary me-2"><i--}}
{{--                                                class="bx bxs-watch"></i></span>Accessories</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="switch switch-square">--}}
{{--                                        <input type="checkbox" class="switch-input">--}}
{{--                                        <span class="switch-toggle-slider">--}}
{{--                                                                    <span class="switch-on"></span>--}}
{{--                                                                    <span class="switch-off"></span>--}}
{{--                                                                </span>--}}
{{--                                    </label>--}}
{{--                                    <span class="d-none">Out Of Stock</span>--}}
{{--                                </td>--}}
{{--                                <td><span>31546</span></td>--}}
{{--                                <td><span>$9848.39</span></td>--}}
{{--                                <td><span>45208</span></td>--}}
{{--                                <td><span class="badge bg-success">Publish</span></td>--}}
{{--                                <td>--}}
{{--                                    <div class="d-inline-block text-nowrap"><button--}}
{{--                                            class="btn btn-sm btn-icon"><i--}}
{{--                                                class="bx bx-edit"></i></button><button--}}
{{--                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"--}}
{{--                                            data-bs-toggle="dropdown"><i--}}
{{--                                                class="bx bx-dots-vertical-rounded me-2"></i></button>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-end m-0"><a--}}
{{--                                                href="javascript:0;"--}}
{{--                                                class="dropdown-item">View</a><a--}}
{{--                                                href="javascript:0;"--}}
{{--                                                class="dropdown-item">Suspend</a></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
