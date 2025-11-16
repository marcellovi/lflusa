@extends('base.front_base')
@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-5" style="text-align: center">
                    <h2>LFL - Events</h2>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="news-block">
                        <div style="text-align: center;">
                            <div >
                                <img width="300px" height="400px" src="@empty($event->image) {{ asset('assets/images/no-image-sq.jpg') }}  @else {{ asset('storage/images/events/'.$event->image) }}  @endif" class="news-image img-fluid" alt="">
                            </div>
                        </div>

                        <div class="news-block-info" style="text-align: center;">
                            <div class="d-inline-flex mt-2" >
                                <div class="news-block-date" >
                                    <p style="text-align: center;">
                                        <i class="bi-book custom-icon me-1"></i>
                                        {{ $event->title }}
                                    </p>
                                </div>

{{--                                <div class="news-block-author mx-5">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-person custom-icon me-1"></i>--}}
{{--                                        By: {{ $book->author }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}

                            </div>

                            <div class="news-block-title mb-2">
                                <h6><a href="#" class="news-block-title-link"></a>{{ $event->title }}</h6>
                            </div>

                            <div class="news-block-body">
                                <p>@empty($event->description) No description found for this event @else {!!  $event->description  !!} @endempty</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 col-12 mx-auto">

                    <h5 class="mt-5 mb-3">Future Events</h5>

                    @foreach( $future_events as $event_suggestion )
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="{{ route('event.detail',$event_suggestion->id) }}">
                                    <img src="@empty($event_suggestion->image) {{ asset('assets/images/no-image-sq.jpg') }}  @else {{ asset('storage/images/events/'.$event_suggestion->image) }}  @endif" class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <a href="{{ route('event.detail',$event_suggestion->id) }}" class="news-block-title-link"><span style="font-weight: bold; color:#2d465e">{{ $event_suggestion->title }}</span></a>
                                </div>

                                <div class="news-block-date mt-2">
                                    <p>
                                        <i class="bi-person custom-icon mb-2"></i>
                                        {{ date('F j, Y', strtotime($event_suggestion->start)) }}
                                        <br>
                                        {!! substr(strip_tags($event_suggestion->description),0,40) !!}
                                        {{ (strlen(strip_tags($event_suggestion->description)) > 40) ? '...' : '' }}
{{--                                        <br>--}}
{{--                                        <i class="bi-book custom-icon mb-2"></i>--}}
{{--                                        {{ $book_suggestion->publisher }}--}}

                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
