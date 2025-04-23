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

</head>

<body id="section_1">

@include('frontend.layout.header')

@include('frontend.layout.menu')


<main>

    @include('frontend.layout.banner')


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Welcome to Frei Luiz Charity</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="#section_4" class="d-block">
                            <img src="{{ asset('assets/images/icons/hands.png') }}"
                                 class="featured-block-image img-fluid" alt="">


                            <p class="featured-block-text">Become a <strong>volunteer {{ trans('messages.users') }}</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/images/icons/heart.png') }}"
                                 class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Events </strong> of Devotion - Locale {{ config('app.locale') }}</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/images/icons/receive.png') }}"
                                 class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Spiritism is <strong>Love</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block">
                            <img src="{{ asset('assets/images/icons/scholarship.png') }}"
                                 class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Charity</strong> Program</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/photos/entrada.jpg') }}"
                         class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Welcome to LFL-USA</h2>

                        <h5 class="mb-3">Frei Luiz Charity, Non-Profit Organization</h5>

                        <p class="mb-0">We are a welcoming community that embraces individuals from all backgrounds who
                            are interested in exploring the teachings of Spiritism and applying them in their daily
                            lives.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>Oferecer a Doutrina Espírita ao ser humano por meio do seu estudo, prática e difusão,
                                    pela união solidária dos espíritas e unificação das instituições espíritas,
                                    contribuindo para a formação do homem de bem.</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Educar (Amor), Instruir (Amor), Agir (amor em ação)
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Estudo e Prática: Caridade em ação, não somente material​
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Latest News</h2>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="#">
                                <img
                                    src="{{ asset('assets/images/news/medium-shot-volunteers-with-clothing-donations.jpg') }}"
                                    class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Categoria
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 12, 2036
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By Admin
                                    </p>
                                </div>
                                <!--
                                <div class="news-block-comment">
                                    <p>
                                        <i class="bi-chat-left custom-icon me-1"></i>
                                        32 Comments
                                    </p>
                                </div> -->
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to
                                        urban area</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                    Professional charity theme based on Bootstrap</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 col-12 mx-auto">
                    <form class="custom-form search-form" action="#" method="post" role="form">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                        <button type="submit" class="form-control">
                            <i class="bi-search"></i>
                        </button>
                    </form>

                    <h5 class="mt-5 mb-3">Recent news</h5>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="#">
                                <img src="{{ asset('assets/images/news/africa-humanitarian-aid-doctor.jpg') }}"
                                     class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="#" class="news-block-title-link">Food donation area</a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 16, 2036
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="#">
                                <img src="{{ asset('assets/images/news/close-up-happy-people-working-together.jpg') }}"
                                     class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="#" class="news-block-title-link">Volunteering Clean</a>
                                </h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 24, 2036
                                </p>
                            </div>
                        </div>
                    </div>

                    <form class="custom-form subscribe-form" action="#" method="post" role="form">
                        <h5 class="mb-4">Caixa de Oração</h5>

                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                               class="form-control" placeholder="Ex: John Paul,Maria Blake,Rick Vi" required>

                        <div class="col-lg-12 col-12 text-center">
                            <!-- <button type="submit" class="btn btn-primary form-control">Encarnados</button> -->
                            <button type="button" class="btn btn-primary me-4">Encarnados</button>
                            <button type="button" class="btn btn-outline-secondary">Desencarnados</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


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


    <!--   include "volunteer.php"; ?> -->


    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>

                        <div class="contact-image-wrap d-flex flex-wrap">
                            <img src="{{ asset('assets/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                                 class="img-fluid avatar-image" alt="">

                            <div class="d-flex flex-column justify-content-center ms-3">
                                <p class="mb-0">Ana & Eduardo</p>
                                <p class="mb-0"><strong>Office Manager</strong></p>
                            </div>
                        </div>

                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                24814 Kuykendahl Rd Ste 140, Tomball - TX
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: 305-240-9671">
                                    305-240-9671
                                </a>
                            </p>

                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>

                                <a href="mailto:info@lfl-usa.com">
                                    info@lfl-usa.com
                                </a>
                            </p>

                            <a href="https://maps.app.goo.gl/7sLZRnBmun1tfJRAA" target="_blank"
                               class="custom-btn btn mt-3">Get Direction</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto" id="section_6">
                    <form class="custom-form contact-form" action="#" method="post" role="form">
                        <h2>Contact Us</h2>

                        <p class="mb-4">Or, you can just send an email:
                            <a href="#">info@lfl-usa.com</a>
                        </p>

                        <div class="col-lg-12 col-12">
                            <input type="text" name="first-name" id="first-name" class="form-control"
                                   placeholder="Your name" required>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                               placeholder="Your email" required>

                        <textarea name="message" rows="5" class="form-control" id="message"
                                  placeholder="What can we help you?"></textarea>

                        <button type="submit" class="form-control">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

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

