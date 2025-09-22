<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="author" content="Marcello F. Vieira www.bigbits.com.br">

    <title>Lar Frei Luiz - USA</title>

    <!--  ============ Favicon  =============  -->
    <link href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" rel="icon"/>

    <!--  ============ Styles  =============  -->
    <link rel="stylesheet" href="{{ asset('assets/styles/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/css/lflusa.css') }}">
    @include('frontend.layout.style')

    <!--  ============ Add Dynamic Styles  =============  -->

    @yield('style')
    <style>
        body {
            background-color: #EAEAEA;
            font-family: 'Roboto', sans-serif;
        }
        .wrap {
            max-width: 940px;
            margin: 0 auto ;
        }


        /*Menu !!!!*/
        .menu {
            vertical-align: top;
            display: inline-block;
            margin: 10px ;

        }
        .menu-item {
            background-color: #FEFEFE;
            width: 200px;
            height: 150px;
            margin: 10px;
            border-radius: 3px;
            box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
        }

        .header-item {
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #3C3D41  ;
            font-size: 11px;
            padding: 15px 15px;
            border-bottom: 1.5px solid #EAEAEA;
        }

        .color-row1,  .color-row2  {
            margin: 15px;
            padding:0;
            max-width: 220px;
        }

        .color-circle {
            max-width: 220px;
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50px 50px 50px 50px;

        }

        .size-circle {
            background-color: #EBEBEB;

        }

        .sizedouble {

            margin: 5px 5px;

        }
        .size {
            margin: 6px 8px;
        }

        /*ITEMS!!!*/
        img {
            width: 100px;
            height: 130px;
            margin-top: 10px;
            vertical-align: top;
            position: relative;
            left: 50px;
        }

        .items  {
            width: 650px;
            margin: 5px;
            display: inline-block;
        }
        .item {
            vertical-align: top;
            width: 190px;
            height: 240px;
            margin: 8px;
            background:#FEFEFE;
            display: inline-block;
            border-radius: 3px;
            box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
        }

        h3 {
            text-align: center;
            margin-bottom: 5px;
            margin-left: 5px;
            margin-right: 5px;
            font-size: 1em;
        }

        h5 {
            position: relative;
            bottom: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .descroption {
            margin: 0;
            text-align: center;
            font-size: 11px;
            font-style: italic;
            color: grey;
            font-family: sans-serif;
        }

        .descroption-xl {
            margin-bottom: 0px;
            margin-top: 0px;
            margin-left: 13px;
            margin-right: 3px;
            text-align: center;
            font-size: 13px;
            font-style: italic;
            color: #2d465e;
            font-weight: bold;
            font-family: sans-serif;
        }

        .price-xl {
            margin: 0;
            text-align: center;
            font-size: 16px;
            font-style: normal;
            color: #2d465e;
            font-weight: bold;
            font-family: sans-serif;
        }

        /*BTN*/
        .loadmore {
            height: 30px;
            width: 610px;
            margin-top: 25px;
            position: relative;
            left: 8px;
            text-decoration: none;
            font-size: 15px;
            background-color: #B8C6C7;
            color: #FEFEFE;
            border-radius: 4px;
            border: none;
            font-family: 'Roboto', sans-serif;
        }

        .mini-menu{
            width: 200px;
            border-radius: 3px;
            box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #848C8F ;
            font-size: 11px;
            margin: 10px;
        }
        .mini-menu ul {
            list-style: none;
            margin: 0;
            padding:0;
            text-align:left;
        }
        .mini-menu > ul > li {
            position: relative;
        }
        .mini-menu > ul > li > a {
            display: block;
            outline: 0;
            padding: 1.2em 1em;
            text-decoration: none;
            color:#3C3D41;
            font-weight: normal;
            letter-spacing: 2px;
            background: #FEFEFE;
            border-bottom: 1.5px solid #EAEAEA;

        }

        .mini-menu .sub > ul {
            height: 0;
            overflow: hidden;
            background: #848C8F;
        }
        .mini-menu .sub > ul > li > a {
            font-family:  sans-serif;
            color:#FEFEFE;
            font-size: 12px;
            display: block;
            text-decoration: none;
            padding: .7em 1em;
            text-transform: capitalize;
            font-style: normal;
            letter-spacing: 1px;
        }
        /*.mini-menu .sub > ul > li > a:hover,*/
        .mini-menu .sub > a.active
        {
            padding-left: 1.3em;
            color: blue;
            content: "1";
            float: right;
            margin-right:6px;
            line-height: 12px;
        }
        .mini-menu .sub >  a:after{
            content: "»";
            float: right;
            margin-right:6px;
            line-height: 12px;
        }

        @media screen and (max-width: 940px) {
            .items {width: 420px;}
            .wrap {width: 700px;}
            .loadmore{width: 420px;}
        }
        @media screen and (max-width: 720px) {
            .items {width: 220px;}
            .wrap {width: 500px;}
            .loadmore{width: 220px;}
        }


        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 0.9em;
            height: 1.6em;
            cursor: default;
            outline: none;
            border: 1px solid rgb(207, 207, 207);
            background: #090;
            border-image: initial;
        }
    </style>
</head>

<body id="section_1">

@include('frontend.layout.header')

@include('frontend.layout.menu')


<main>



    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">LFL Library!</h2>
                </div>

             <!-- Book Grid -->


                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 sidebar">

                            <div class="widgets-container">

                                <!-- Product Categories Widget -->
                                <div class="product-categories-widget widget-item">

                                    <h3 class="widget-title">Categories</h3>

                                    <ul class="category-tree list-unstyled mb-0">
                                        <!-- Clothing Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-clothing-subcategories" aria-expanded="false" aria-controls="categories-1-clothing-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Languages</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-clothing-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                               @foreach($languages as $language)
                                                    <li><a href="#" class="subcategory-link">{{ $language->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <!-- Electronics Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-electronics-subcategories" aria-expanded="false" aria-controls="categories-1-electronics-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Electronics</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-electronics-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                <li><a href="#" class="subcategory-link">Smartphones</a></li>
                                                <li><a href="#" class="subcategory-link">Laptops</a></li>
                                                <li><a href="#" class="subcategory-link">Tablets</a></li>
                                                <li><a href="#" class="subcategory-link">Accessories</a></li>
                                            </ul>
                                        </li>

                                        <!-- Home & Kitchen Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-home-subcategories" aria-expanded="false" aria-controls="categories-1-home-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Home &amp; Kitchen</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-home-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                <li><a href="#" class="subcategory-link">Furniture</a></li>
                                                <li><a href="#" class="subcategory-link">Kitchen Appliances</a></li>
                                                <li><a href="#" class="subcategory-link">Home Decor</a></li>
                                                <li><a href="#" class="subcategory-link">Bedding</a></li>
                                            </ul>
                                        </li>

                                        <!-- Beauty & Personal Care Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-beauty-subcategories" aria-expanded="false" aria-controls="categories-1-beauty-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Beauty &amp; Personal Care</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-beauty-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                <li><a href="#" class="subcategory-link">Skincare</a></li>
                                                <li><a href="#" class="subcategory-link">Makeup</a></li>
                                                <li><a href="#" class="subcategory-link">Hair Care</a></li>
                                                <li><a href="#" class="subcategory-link">Fragrances</a></li>
                                            </ul>
                                        </li>

                                        <!-- Sports & Outdoors Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-sports-subcategories" aria-expanded="false" aria-controls="categories-1-sports-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Sports &amp; Outdoors</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-sports-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                <li><a href="#" class="subcategory-link">Fitness Equipment</a></li>
                                                <li><a href="#" class="subcategory-link">Outdoor Gear</a></li>
                                                <li><a href="#" class="subcategory-link">Sports Apparel</a></li>
                                                <li><a href="#" class="subcategory-link">Team Sports</a></li>
                                            </ul>
                                        </li>

                                        <!-- Books Category (no subcategories) -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header">
                                                <a href="#" class="category-link">Books</a>
                                            </div>
                                        </li>

                                        <!-- Toys & Games Category -->
                                        <li class="category-item">
                                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-toys-subcategories" aria-expanded="false" aria-controls="categories-1-toys-subcategories">
                                                <a href="javascript:void(0)" class="category-link">Toys &amp; Games</a>
                                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                                            </div>
                                            <ul id="categories-1-toys-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                <li><a href="#" class="subcategory-link">Board Games</a></li>
                                                <li><a href="#" class="subcategory-link">Puzzles</a></li>
                                                <li><a href="#" class="subcategory-link">Action Figures</a></li>
                                                <li><a href="#" class="subcategory-link">Educational Toys</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!--/Product Categories Widget -->

                                <!-- Pricing Range Widget -->
                                <div class="pricing-range-widget widget-item">

                                    <h3 class="widget-title">Price Range</h3>

                                    <div class="price-range-container">
                                        <div class="current-range mb-3">
                                            <span class="min-price">$0</span>
                                            <span class="max-price float-end">$500</span>
                                        </div>

                                        <div class="range-slider">
                                            <div class="slider-track"></div>
                                            <div class="slider-progress" style="left: 0%; width: 50%;"></div>
                                            <input type="range" class="min-range" min="0" max="1000" value="0" step="10">
                                            <input type="range" class="max-range" min="0" max="1000" value="500" step="10">
                                        </div>

                                        <div class="price-inputs mt-3">
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text">$</span>
                                                        <input type="number" class="form-control min-price-input" placeholder="Min" min="0" max="1000" value="0" step="10">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text">$</span>
                                                        <input type="number" class="form-control max-price-input" placeholder="Max" min="0" max="1000" value="500" step="10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="filter-actions mt-3">
                                            <button type="button" class="btn btn-sm btn-primary w-100">Apply Filter</button>
                                        </div>
                                    </div>

                                </div><!--/Pricing Range Widget -->

                                <!-- Keyword Filter Widget -->
                                <h3 class="brand-filter-widget widget-item">Filter by Keyword</h3><!-- Keyword Filter Widget -->

                                <!-- Color Filter Widget -->
                                <div class="color-filter-widget widget-item">

                                    <h3 class="widget-title">Filter by Color</h3>

                                    <div class="color-filter-content">
                                        <div class="color-options content-center">
                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="black" id="color-black">
                                                <label class="form-check-label" for="color-black">
                                                    <span class="color-swatch" style="background-color: #000000;" title="Black"></span>
                                                </label>
                                            </div>

                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="white" id="color-white">
                                                <label class="form-check-label" for="color-white">
                                                    <span class="color-swatch" style="background-color: #ffffff;" title="White"></span>
                                                </label>
                                            </div>

                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="red" id="color-red">
                                                <label class="form-check-label" for="color-red">
                                                    <span class="color-swatch" style="background-color: #e74c3c;" title="Red"></span>
                                                </label>
                                            </div>

                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="blue" id="color-blue">
                                                <label class="form-check-label" for="color-blue">
                                                    <span class="color-swatch" style="background-color: #3498db;" title="Blue"></span>
                                                </label>
                                            </div>

                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="green" id="color-green">
                                                <label class="form-check-label" for="color-green">
                                                    <span class="color-swatch" style="background-color: #2ecc71;" title="Green"></span>
                                                </label>
                                            </div>

                                            <div class="form-check color-option">
                                                <input class="form-check-input" type="checkbox" value="yellow" id="color-yellow">
                                                <label class="form-check-label" for="color-yellow">
                                                    <span class="color-swatch" style="background-color: #f1c40f;" title="Yellow"></span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="filter-actions mt-3">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Clear All</button>
                                            <button type="button" class="btn btn-sm btn-primary">Apply Filter</button>
                                        </div>
                                    </div>

                                </div><!--/Color Filter Widget -->

                                <!-- Brand Filter Widget -->
                                <div class="brand-filter-widget widget-item">

                                    <h3 class="widget-title">Filter by Brand</h3>

                                    <div class="brand-filter-content">
                                        <div class="brand-search">
                                            <input type="text" class="form-control" placeholder="Search brands...">
                                            <i class="bi bi-search"></i>
                                        </div>

                                        <div class="brand-list">
                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand1">
                                                    <label class="form-check-label" for="brand1">
                                                        Nike
                                                        <span class="brand-count">(24)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand2">
                                                    <label class="form-check-label" for="brand2">
                                                        Adidas
                                                        <span class="brand-count">(18)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand3">
                                                    <label class="form-check-label" for="brand3">
                                                        Puma
                                                        <span class="brand-count">(12)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand4">
                                                    <label class="form-check-label" for="brand4">
                                                        Reebok
                                                        <span class="brand-count">(9)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand5">
                                                    <label class="form-check-label" for="brand5">
                                                        Under Armour
                                                        <span class="brand-count">(7)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand6">
                                                    <label class="form-check-label" for="brand6">
                                                        New Balance
                                                        <span class="brand-count">(6)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand7">
                                                    <label class="form-check-label" for="brand7">
                                                        Converse
                                                        <span class="brand-count">(5)</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="brand-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand8">
                                                    <label class="form-check-label" for="brand8">
                                                        Vans
                                                        <span class="brand-count">(4)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="brand-actions">
                                            <button class="btn btn-sm btn-outline-primary">Apply Filter</button>
                                            <button class="btn btn-sm btn-link">Clear All</button>
                                        </div>
                                    </div>

                                </div><!--/Brand Filter Widget -->

                            </div>

                        </div>

                        <div class="col-lg-8">
                            <!-- Category Product List Section -->

                            <!-- Book Grid -->
                            {{--<div class="container px-4 px-lg-5 mt-5">
                                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                    <div class="col mb-5">
                                        <div class="card h-100">
                                            <!-- Product image-->
                                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg"    alt="...">

                                            <!-- src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" -->

                                            <!-- Product details-->
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">Title of Book</h5>
                                                    <!-- Product price-->
                                                    $40.00 - $80.00
                                                </div>
                                            </div>
                                            <!-- Product actions-->
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Rent Book</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-5">
                                        <div class="card h-100">
                                            <!-- Sale badge-->
                                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                            <!-- Product image-->
                                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg" alt="...">
                                            <!-- Product details-->
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">Special Item</h5>
                                                    <!-- Product reviews-->
                                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                    </div>
                                                    <!-- Product price-->
                                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                                    $18.00
                                                </div>
                                            </div>
                                            <!-- Product actions-->
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Book</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mb-5">
                                        <div class="card h-100">
                                            <!-- Sale badge-->
                                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                            <!-- Product image-->
                                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg" alt="...">
                                            <!-- Product details-->
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">Special Item</h5>
                                                    <!-- Product reviews-->
                                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                    </div>
                                                    <!-- Product price-->
                                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                                    $18.00
                                                </div>
                                            </div>
                                            <!-- Product actions-->
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Book</a></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- end book grid -->--}}

                            <!-- Other Grid -->
                            <div class="items px-4 px-lg-5 mt-5">

                                <div class="items">

                                    <div data-price="290" class="item">
                                        <img  src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"  alt="jacket" class="img-item mb-2">
                                        <div class="info">
                                            <h3>Our Legacy Splash Jacquard Knit</h3>
                                            <p class="descroption">Black Grey Plants</p>
                                            <h5>$290</h5>
                                        </div>
                                    </div>

                                    @foreach($books as $book)

                                            <div data-price="{{ $book->price }}" class="item">
                                                <img  src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" title="{{ $book->title }}"  alt="{{ $book->title }}" class="img-item mb-2">
                                                <div class="info">
                                                    <p class="descroption-xl">{{ (strlen($book->title) > 30 ) ? substr($book->title,0,30).'...' : $book->title }}</p>
                                                    <p class="descroption">by {{ $book->publisher }}</p>
                                                    <p class="price-xl mt-1">${{ $book->price }}</p>
                                                </div>
                                            </div>

                                    @endforeach


{{--                                    <div data-price="900" class="item">--}}
{{--                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg" alt="jacket" class="img-item">--}}
{{--                                        <div class="info">--}}
{{--                                            <h3>Our Legacy Splash Jacquard Knit</h3>--}}
{{--                                            <p class="descroption">Black Grey Plants</p>--}}
{{--                                            <h5>$900</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                 --}}
                                </div>

                            </div>
                            <!-- end other grid -->

                            <!-- /Category Product List Section -->

                            <!-- Category Pagination Section -->

                                <section id="category-pagination" class="category-pagination section mt-4">




                                <div class="container">
                                    <nav class="d-flex justify-content-center" aria-label="Page navigation">
                                        <ul>
                                            <li>
                                                <a href="#" aria-label="Previous page">
                                                    <i class="bi bi-arrow-left"></i>
                                                    <span class="d-none d-sm-inline">Previous</span>
                                                </a>
                                            </li>

                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li class="ellipsis">...</li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">10</a></li>

                                            <li>
                                                <a href="#" aria-label="Next page">
                                                    <span class="d-none d-sm-inline">Next</span>
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </section>

                            <!-- /Category Pagination Section -->

                        </div>

                    </div>
                </div>
            <!-- end book grid -->

            </div>
        </div>
    </section>




<!--
    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make a donation</a>

                    <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                </div>

            </div>
        </div>
    </section>
-->

    <!--   include "volunteer.php"; ?> -->




    <!--  include "testimonial.php"; ?>  -->

</main>

@include('frontend.layout.footer')

<!-- ============ Scripts Start ============= -->
@include('frontend.layout.scripts')

<!--  ============ Add Scripts Dynamic ============= -->
@yield('scripts')

<!--  ============ Footer  =============  -->
</body>
</html>

