@extends('base.front_base')
@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-5" style="text-align: center">
                    <h2>LFL - Library</h2>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="news-block">
                        <div style="text-align: center;">
                            <div >
                                <img width="300px" height="400px" src="@empty($book->cover_image) {{ asset('assets/images/svgs/no-image.svg') }}  @else {{ asset('storage/images/books/'.$book->cover_image) }}  @endif" class="news-image img-fluid" alt="">
                            </div>

            {{--                <div class="news-category-block">--}}
            {{--                    <a href="#" class="category-block-link">--}}
            {{--                        Lifestyle,--}}
            {{--                    </a>--}}

            {{--                    <a href="#" class="category-block-link">--}}
            {{--                        Clothing Donation--}}
            {{--                    </a>--}}
            {{--                </div>--}}
                        </div>

                        <div class="news-block-info" style="text-align: center;">
                            <div class="d-inline-flex mt-2" >
                                <div class="news-block-date" >
                                    <p style="text-align: center;">
                                        <i class="bi-book custom-icon me-1"></i>
                                        {{ $book->publisher }}
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By: {{ $book->author }}
                                    </p>
                                </div>

                            </div>

                            <div class="news-block-title mb-2">
                                <h6><a href="{{ route('books.details',$book->book_id) }}" class="news-block-title-link"></a>{{ $book->title }}</h6>
                                <div class="news-block-comment">
                                    <p>
                                        <i class="bi-boxes custom-icon me-1"></i>
                                        Qtd. {{ $book->copies }}
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-body">
                                <p>@empty($book->description) No description found for this book @else {!! $book->description  !!} @endempty</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 col-12 mx-auto">
            {{--        <form class="custom-form search-form" action="#" method="get" role="form">--}}
            {{--            <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">--}}

            {{--            <button type="submit" class="form-control">--}}
            {{--                <i class="bi-search"></i>--}}
            {{--            </button>--}}
            {{--        </form>--}}

                    <h5 class="mt-5 mb-3">Suggestion of Books</h5>

                    @foreach( $book_suggestions as $book_suggestion )
                        <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="{{ route('books.details',$book_suggestion->id) }}">
                                <img src="@empty($book_suggestion->cover_image) {{ asset('assets/images/svgs/no-image.svg') }}  @else {{ asset('storage/images/books/'.$book_suggestion->cover_image) }}  @endif" class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <a href="{{ route('books.details',$book_suggestion->id) }}" class="news-block-title-link"><span style="font-weight: bold; color:#2d465e">{{ $book_suggestion->title }}</span></a>
                            </div>

                            <div class="news-block-date mt-2">
                                <p>
                                    <i class="bi-person custom-icon mb-2"></i>
                                    {{ $book_suggestion->author }}
                                    <br>
                                    <i class="bi-book custom-icon mb-2"></i>
                                    {{ $book_suggestion->publisher }}
                                    <br>
                                    <i class="bi-flag custom-icon mb-2"></i>
                                    {{ trans($book_suggestion->language) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


            {{--        <div class="category-block d-flex flex-column">--}}
            {{--            <h5 class="mb-3">Same Author</h5>--}}

            {{--            <a href="#" class="category-block-link">--}}
            {{--                Drinking water--}}
            {{--                <span class="badge">20</span>--}}
            {{--            </a>--}}

            {{--            <a href="#" class="category-block-link">--}}
            {{--                Food Donation--}}
            {{--                <span class="badge">30</span>--}}
            {{--            </a>--}}

            {{--            <a href="#" class="category-block-link">--}}
            {{--                Children Education--}}
            {{--                <span class="badge">10</span>--}}
            {{--            </a>--}}

            {{--            <a href="#" class="category-block-link">--}}
            {{--                Poverty Development--}}
            {{--                <span class="badge">15</span>--}}
            {{--            </a>--}}

            {{--            <a href="#" class="category-block-link">--}}
            {{--                Clothing Donation--}}
            {{--                <span class="badge">20</span>--}}
            {{--            </a>--}}
            {{--        </div>--}}

            {{--        <div class="tags-block">--}}
            {{--            <h5 class="mb-3">Other Publishers</h5>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Donation--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Clothing--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Food--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Children--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Education--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Poverty--}}
            {{--            </a>--}}

            {{--            <a href="#" class="tags-block-link">--}}
            {{--                Clean Water--}}
            {{--            </a>--}}
            {{--        </div>--}}

            {{--        <form class="custom-form subscribe-form" action="#" method="get" role="form">--}}
            {{--            <h5 class="mb-4">Newsletter Form</h5>--}}

            {{--            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">--}}

            {{--            <div class="col-lg-12 col-12">--}}
            {{--                <button type="submit" class="form-control">Subscribe</button>--}}
            {{--            </div>--}}
            {{--        </form>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
