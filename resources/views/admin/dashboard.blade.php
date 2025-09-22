
@extends('base.admin_base')
@section('content')

    <!--{ row-1 start}-->
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div id="saleschart"></div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center text-dark">
                    <h6 class="mb-0 text-uppercase fw-bold">Total Users</h6>
                    <h5 class="mb-0 number-font">44,278</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div id="TotalOrders"></div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center text-dark">
                    <h6 class="mb-0 text-uppercase fw-bold">Today orders</h6>
                    <h5 class="mb-0 number-font">45,278</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div id="NewUsers"></div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center text-dark">
                    <h6 class="mb-0 text-uppercase fw-bold">new users</h6>
                    <h5 class="mb-0 number-font">500</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div id="NewVisitors"></div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center text-dark">
                    <h6 class="mb-0 text-uppercase fw-bold">new visitors</h6>
                    <h5 class="mb-0 number-font">1500</h5>
                </div>
            </div>
        </div>
    </div>
    <!--{ row-1 end}-->

    <!--{ row-2 start}-->
    <div class="row align-items-stretch">
        <div class="col-md-4 col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Sales Status</h4>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-4">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted mb-2 fs-14">Number of Sales</p>
                                    <h4 class="mb-0">1,625</h4>
                                </div>
                                <div class="avatar avatar-lg bg-info me-0 align-self-center fs-20">
                                    <i class="bx bx-layer "></i>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-4">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted mb-2 fs-14">Sales Revenue </p>
                                    <h4 class="mb-0">$ 42,235</h4>
                                </div>
                                <div class="avatar avatar-lg bg-primary me-0 align-self-center fs-20">
                                    <i class="bx bx-bar-chart-alt "></i>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-4">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted mb-2 fs-14">Product Sold</p>
                                    <h4 class="mb-0">8,235</h4>
                                </div>
                                <div class="avatar avatar-lg bg-success me-0 align-self-center fs-20">
                                    <i class="bx bx-chart "></i>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-4">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted mb-2 fs-14">Product Return</p>
                                    <h4 class="mb-0">100</h4>
                                </div>
                                <div class="avatar avatar-lg bg-warning me-0 align-self-center fs-20">
                                    <i class="bx bx-chart "></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Statistics</h4>
                </div>
                <div class="card-body pt-2">
                    <div id="stats-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!--{ row-2 end}-->

    <!--{ row-3 start}-->
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Recent Orders</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Category</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/products/41.jpg" alt="products" height="50" width="50" class="me-2">
                                        <div class="d-flex flex-column">
                                            <span class="fw-medium lh-1">Yellow polka dot</span>
                                            <small class="text-muted">Adminixor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                                                <span class="badge bg-danger-transparent rounded-pill text-danger p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                        Fashion
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted lh-1">
                                        <span class="text-primary fw-medium">$120</span>/499
                                    </div>
                                    <small class="text-muted">Partially Paid</small>
                                </td>
                                <td>
                                    <span class="badge bg-primary-transparent rounded-pill text-primary p-2 px-3">Confirmed</span>
                                </td>
                                <td>
                                    <div class="g-1">
                                        <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fe fe-edit fs-14"></i>
                                        </a>
                                        <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            <i class="fe fe-trash-2 fs-14"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/products/42.jpg" alt="Black dress, chic" height="50" width="50" class="me-2">
                                        <div class="d-flex flex-column">
                                            <span class="fw-medium lh-1">Black dress, chic</span>
                                            <small class="text-muted">Adminixor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                                                <span class="badge bg-warning-transparent rounded-pill text-warning p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                        Fashion
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted lh-1">
                                        <span class="text-primary fw-medium">$149</span>
                                    </div>
                                    <small class="text-muted">Fully Paid</small>
                                </td>
                                <td>
                                    <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                </td>
                                <td>
                                    <div class="g-1">
                                        <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fe fe-edit fs-14"></i>
                                        </a>
                                        <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            <i class="fe fe-trash-2 fs-14"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/products/43.jpg" alt="Sunglasses, stylish, hat" height="50" width="50" class="me-2">
                                        <div class="d-flex flex-column">
                                            <span class="fw-medium lh-1">Sunglasses, stylish, hat</span>
                                            <small class="text-muted">Adminixor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                                                <span class="badge bg-info-transparent rounded-pill text-info p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                        Fashion
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted lh-1">
                                        <span class="text-primary fw-medium">$0</span>/899
                                    </div>
                                    <small class="text-muted">Unpaid</small>
                                </td>
                                <td>
                                    <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                </td>
                                <td>
                                    <div class="g-1">
                                        <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fe fe-edit fs-14"></i>
                                        </a>
                                        <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            <i class="fe fe-trash-2 fs-14"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/products/44.jpg" alt="Smiling, dress, pink." height="50" width="50" class="me-2">
                                        <div class="d-flex flex-column">
                                                                    <span class="fw-medium lh-1">
                                                                        Smiling, dress, pink.</span>
                                            <small class="text-muted">Adminixor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                                                <span class="badge bg-primary-transparent rounded-pill text-primary p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                        Fashion
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted lh-1">
                                        <span class="text-primary fw-medium">$149</span>
                                    </div>
                                    <small class="text-muted">Fully Paid</small>
                                </td>
                                <td>
                                    <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                </td>
                                <td>
                                    <div class="g-1">
                                        <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fe fe-edit fs-14"></i>
                                        </a>
                                        <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            <i class="fe fe-trash-2 fs-14"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/products/48.jpg" alt="Gorgeous, floral, chic" height="50" width="50" class="me-2">
                                        <div class="d-flex flex-column">
                                            <span class="fw-medium lh-1">Gorgeous, floral, chic.</span>
                                            <small class="text-muted">Adminixor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                                                <span class="badge bg-warning-transparent rounded-pill text-warning p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                        Fashion
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted lh-1">
                                        <span class="text-primary fw-medium">$149</span>
                                    </div>
                                    <small class="text-muted">Fully Paid</small>
                                </td>
                                <td>
                                    <span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                </td>
                                <td>
                                    <div class="g-1">
                                        <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fe fe-edit fs-14"></i>
                                        </a>
                                        <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                            <i class="fe fe-trash-2 fs-14"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Quartly Sale</h4>
                </div>
                <div class="card-body p-1">
                    <div id="quartly-sale"></div>
                </div>
            </div>
        </div>
    </div>
    <!--{ row-3 end}-->

    <!--{ row-4 strt}-->
    <div class="row align-items-stretch">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Total Sales</h4>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="total-sale"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Earning Statastics</h4>
                    <div class="btn-group earningTabs">
                        <button class="btn btn-sm btn-primary"  data-type="weekly">
                            Weekly
                        </button>
                        <button class="btn btn-sm btn-outline-primary"  data-type="monthly">
                            Monthly
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales-order"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card revenue-card">
                <div class="card-header bg-info border-0">
                    <h5 class="card-title text-white">Revenue</h5>
                </div>
                <div class="card-body bg-info position-relative pt-0">
                    <div class="chart-container h-200">
                        <canvas id="today-revenue"></canvas>
                    </div>
                </div>
                <div class="revenue-stats py-5 px-4 d-flex justify-content-between">
                    <div>
                        <p class="text-muted">Target</p>
                        <h3 class="mb-0">$2000</h3>
                    </div>
                    <div>
                        <p class="text-muted">Current</p>
                        <h3 class="mb-0">$1500</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{ row-4 end}-->



@endsection
