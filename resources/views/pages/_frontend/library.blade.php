@extends('base.front_base')
@section('content')
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
                                <form id="search_library" name="search_library" action="{{ route('frontend.library') }}"
                                      method="get" enctype="multipart/form-data">
                                    @csrf
                                    @method('get')

                                    <!-- Product Categories Widget -->
                                    <div class="product-categories-widget widget-item">

                                        <h3 class="widget-title m-0 mb-2 ">Quick Search</h3>

                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" id="search_box" name="search_box"
                                                   placeholder="Search for results..."
                                                   value="{{ empty($search_box) ? '' : $search_box }}">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bi bi-search"
                                                                                 onclick="document.search_library.submit()"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <h3 class="widget-title m-0 mt-4">Categories</h3>

                                        <ul class="category-tree list-unstyled mb-0">

                                            <!-- Languages Category -->
                                            <li class="category-item">
                                                <div
                                                    class="d-flex justify-content-between align-items-center category-header collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#categories-1-clothing-subcategories"
                                                    aria-expanded="false"
                                                    aria-controls="categories-1-clothing-subcategories">
                                                    <a href="javascript:void(0)" class="category-link">Languages</a>
                                                    <span class="category-toggle">
                                                                  <i class="bi bi-chevron-down"></i>
                                                                  <i class="bi bi-chevron-up"></i>
                                                                </span>
                                                </div>
                                                <ul id="categories-1-clothing-subcategories"
                                                    class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                    <div class="brand-list">

                                                        @foreach($languages as $language)
                                                            <div class="brand-item" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <div>
                                                                    <input type="checkbox" class="form-check-input mb-1"
                                                                           id="{{ trans($language->name) }}"
                                                                           name="languages[]"
                                                                           value="{{ $language->id }}" @checked(in_array($language->id, $searched_languages))>
                                                                    <label for="languages-name">  {{ trans($language->name) }}</label>
                                                                </div>
                                                                <span style="color: #888;">({{ $language->qtd }})</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </ul>
                                            </li>

                                            <!-- Authors Category -->
                                            <li class="category-item">
                                                <div
                                                    class="d-flex justify-content-between align-items-center category-header collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#categories-1-authors-subcategories"
                                                    aria-expanded="false"
                                                    aria-controls="categories-1-authors-subcategories">
                                                    <a href="javascript:void(0)" class="category-link">Authors</a>
                                                    <span class="category-toggle">
                                                                  <i class="bi bi-chevron-down"></i>
                                                                  <i class="bi bi-chevron-up"></i>
                                                                </span>
                                                </div>
                                                <ul id="categories-1-authors-subcategories"
                                                    class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                    <div class="brand-list">
                                                        @foreach($authors as $author)
                                                            <div class="brand-item"  style="display: flex; justify-content: space-between; align-items: center;">
                                                                <div>
                                                                    <input type="checkbox" class="form-check-input mb-1"
                                                                           id="{{ $author->name }}"
                                                                           name="authors[]"
                                                                           value="{{ $author->id }}" @checked(in_array($author->id, $searched_authors))
                                                                    >
                                                                    <label for="author-name"> {{ trans($author->name) }}</label>
                                                                </div>
                                                                <span style="color: #888;">({{ $author->qtd }})</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </ul>
                                            </li>

                                            <!-- By Spirit(s) Category
                                                    <li class="category-item">
                                                        <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-electronics-subcategories" aria-expanded="false" aria-controls="categories-1-electronics-subcategories">
                                                            <a href="javascript:void(0)" class="category-link">By Spirit(s)</a>
                                                            <span class="category-toggle">
                                  <i class="bi bi-chevron-down"></i>
                                  <i class="bi bi-chevron-up"></i>
                                </span>
                                                        </div>
                                                        <ul id="categories-1-electronics-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                            <div class="brand-list">

                                                                foreach($spirits as $spirit)
                                                                    <div class="brand-item">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="spirits">
                                                                            <label class="form-check-label" for="spirits">
                                                                                { $spirit->name }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    {{--                                                                <li><a href="#" class="subcategory-link">{{ $publisher->name }}</a></li>--}}
                                            endforeach
                                        </div>
                                    </ul>
                                </li>
            -->

                                            <!-- Publishers Category -->
                                            <li class="category-item">
                                                <div
                                                    class="d-flex justify-content-between align-items-center category-header collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#categories-1-publishers-subcategories"
                                                    aria-expanded="false"
                                                    aria-controls="categories-1-publishers-subcategories">
                                                    <a href="javascript:void(0)" class="category-link">Publishers</a>
                                                    <span class="category-toggle">
                                                                  <i class="bi bi-chevron-down"></i>
                                                                  <i class="bi bi-chevron-up"></i>
                                                                </span>
                                                </div>
                                                <ul id="categories-1-publishers-subcategories"
                                                    class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                                    <!--  <div class="brand-filter-widget widget-item">
                                                       <div class="brand-filter-content">

                                                            <div class="brand-search">
                                                                <input type="text" class="form-control" placeholder="Search brands...">
                                                                <i class="bi bi-search"></i>
                                                            </div>
                                                            -->
                                                    <div class="brand-list">
                                                        @foreach($publishers as $publisher)
                                                            <div class="brand-item" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <div>
                                                                    <input type="checkbox" class="form-check-input mb-1"
                                                                           type="checkbox"
                                                                           id="{{ $publisher->name }}"
                                                                           name="publishers[]"
                                                                           value="{{ $publisher->id }}" {{ (in_array($publisher->id,$searched_publishers)) ? 'checked' : '' }} >
                                                                    <label for="publishers-name"> {{ $publisher->name }}</label>
                                                                </div>
                                                                <span style="color: #888;">({{ $publisher->qtd }})</span>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    {{--                                                        <div class="brand-actions">--}}
                                                    {{--                                                            <button class="btn btn-sm btn-outline-primary">Apply Filter</button>--}}
                                                    {{--                                                            <button class="btn btn-sm btn-link">Clear All</button>--}}
                                                    {{--                                                        </div>--}}
                                                    <!-- </div>
                                                                </div>-->
                                                </ul>
                                            </li>

                                        </ul>

                                    </div>
                                    <!--/Product Categories Widget -->

                                    <!-- Pricing Range Widget -->
                                    <div class="pricing-range-widget widget-item">

                                        <h3 class="widget-title">Price Range</h3>

                                        <div class="price-range-container">

                                            <div class="price-inputs mt-3">
                                                <div class="row g-2">
                                                    <div class="col-6">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" id="price_range_min"
                                                                   class="form-control min-price-input"
                                                                   placeholder="Min" min="0" max="1000"
                                                                   value="{{ isset($_GET['price_range_min']) ? $_GET['price_range_min'] : 0 }}"
                                                                   name="price_range_min">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" id="price_range_max"
                                                                   class="form-control max-price-input"
                                                                   placeholder="Max" min="0" max="1000"
                                                                   value="{{ isset($_GET['price_range_max']) ? $_GET['price_range_max'] : 1000 }}"
                                                                   name="price_range_max">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="filter-actions mt-3">
                                                <button type="submit" class="btn btn-sm btn-primary w-100">Apply
                                                    Filter
                                                </button>
                                            </div>
                                            <div class="filter-actions mt-3">
                                                <input type="button" id="clear-search"
                                                       class="btn btn-sm btn-outline-secondary w-100"
                                                       value="Clear All"/>
                                            </div>
                                        </div>

                                    </div><!--/Pricing Range Widget -->
                                </form>
                            </div>

                        </div>

                        <section class="col-lg-8">

                            <!-- Category Header Section
                            <section id="category-header" class="category-header section">
                                <div class="container aos-init aos-animate" data-aos="fade-up">
                                </div>

                            </section>/Category Header Section -->

                            <!-- Category Product List Section -->
                            <section id="category-product-list" class="category-product-list section">

                                <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row gy-4">

                                        <!-- Product  -->
                                        @empty(count($books))
                                            <div class="col-lg-12 ml-3 mt-4">
                                                <div class="product-price">
                                                    <span><h3>{{ 'No Books Found' }}</h3></span>
                                                </div>
                                            </div>

                                        @else
                                            @foreach($books as $book)
                                                <div class="col-lg-6">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            @php
                                                                $lang = 'product-label ';
                                                                switch($book->language){
                                                                    case 'messages.portuguese':
                                                                        $lang .= 'product-label-green';
                                                                        break;
                                                                    case 'messages.spanish':
                                                                        $lang .= 'product-label-hot';
                                                                        break;
                                                                        }
                                                            @endphp

                                                            <span
                                                                class="{{ $lang }}">{{ trans($book->language) }}</span>
                                                            <img
                                                                src="{{ empty($book->cover_image) ? asset('assets/images/svgs/no-image.svg') : asset('storage/images/books/'.$book->cover_image) }}"
                                                                alt="Product Image" class="main-img" loading="lazy">
                                                            <div class="product-overlay">
                                                                <div class="product-quick-actions">
                                                                    <button type="button" class="quick-action-btn">
                                                                        <i class="bi bi-heart"></i>
                                                                    </button>
                                                                    <button type="button" class="quick-action-btn">
                                                                        <i class="bi bi-arrow-repeat"></i>
                                                                    </button>
                                                                    <a href="{{ route('books.details',$book->book_id) }}" class="quick-action-btn" >
                                                                        <i class="bi bi-eye"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="add-to-cart-container">
                                                                    @if($book->type == 'messages.study')
                                                                        <button type="button" class="add-to-cart-btn"
                                                                                style="background-color: #2a3746">Only
                                                                            Office Use
                                                                        </button>
                                                                    @elseif($book->type == 'messages.sell')
                                                                        <button type="button" class="add-to-cart-btn"><i
                                                                                class="bi-cart-plus-fill"></i> Add to
                                                                            Cart {{ empty($book->cover_image) ? $book->cover_image : 'cheio' }}
                                                                        </button>
                                                                    @elseif($book->type == 'messages.rent')
                                                                        <button type="button" class="add-to-cart-btn"><i
                                                                                class="bi bi-bookmark-star-fill"></i>
                                                                            Rent
                                                                            this Book
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-details">
                                                                <h3 class="product-title"><a
                                                                        href="product-details.html">{{ $book->title }}</a>
                                                                </h3>
                                                                <div class="product-price">
                                                                    <span>${{ $book->price }}</span> ( Qtd. {{ $book->copies }} )
                                                                </div>
                                                            </div>
                                                            <div class="product-rating-container-noflex">
                                                                <span class="rating-number mt-5"><i
                                                                        class="bi bi-person"></i> Author(s):
                                                                    @if(is_array($book->author))
                                                                        @foreach($book->author as $name)
                                                                            {{ $name.',' }}
                                                                        @endforeach
                                                                    @else
                                                                        {{ $book->author }}
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="product-rating-container-noflex">
                                                                <span class="rating-number mt-5"><i
                                                                        class="bi bi-book"></i> Pub.: {{ $book->publisher }}</span>
                                                            </div>
                                                            <div class="product-color-options">
                                                                @if($book->type == 'messages.sell')
                                                                    <span class="color-option" title="{{ trans($book->type) }}"
                                                                          style="background-color: #f97316;"></span>
                                                                @elseif($book->type == 'messages.rent')
                                                                    <span class="color-option" title="{{ trans($book->type) }}"
                                                                          style="background-color: #0d6efd;"></span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endempty
                                        <!-- End Product  -->

                                    </div>

                                </div>

                            </section>
                            <!-- /Category Product List Section -->

                        {{ $books->appends(request()->query())->onEachSide(5)->links() }}

                    </div>

                </div>
                <!-- end book grid -->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('#clear-search').on('click', function (e) {
            e.preventDefault();
            // $("#search_library")[0].reset.click();
            $('#search_library').trigger('reset')
            $('#search_library').find('[checked]').removeAttr('checked')
            $('#search_library').find('#price_range_max').val('1000');
            $('#search_library').find('#price_range_min').val('0');
            $('#search_library').find('#search_box').val('');
            // $('#search_library').find('[selected]').removeAttr('selected')
            // $('#search_library').find('input').val('');
        })
    </script>
@endsection
