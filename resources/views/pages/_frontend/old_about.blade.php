@extends('base.front_base')

@section('content')

    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">Lar Luiz Frei - USA</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/Frei-Luis-foto.jpg') }}" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Frei Luiz </h2>

                        <h5 class="mb-3">Uma breve biografia</h5>

                        <p class="mb-3">Teodoro Henrique Reinke nasceu em 29 de junho de 1872 na aldeia de Marienfield, região de Westfalia, Alemanha.
                            Bem cedo perdeu o pai. Concluindo, aos 14 anos, a escola primária, foi no ano seguinte empregar-se como caixa num restaurante.
                            Não era essa, porém, a vocação de Teodoro; e assim aos 18 anos, em 1890, pediu ingresso no seminário franciscano de Harreveld, Holanda.
                            Em 13 de maio de 1894 recebeu o hábito do Pobre de Assis e o novo nome de Frei Luiz, iniciando o noviciado.
                        </p>
                        <p class="mb-3">
                            A decisão pela Ordem dos Frades Menores, como consta nos registros históricos, deu-se pelo encantamento com a humildade e caridade de São Francisco de Assis.
                            “No dia 1º de julho de 1894, o navio que transportava 52 jovens frades juntamente com seu mestre, Frei Ciríaco – 1º guardião do Convento do Sagrado -, aportou em Recife, onde Frei Luiz pode ver o Brasil pela primeira vez.
                            Mas não desceram ali. No dia 10 de julho chegaram em Salvador, Bahia”, contou.​
                            Consta que ele foi acometido de duas grandes enfermidades, em 1896 de febre amarela, e depois beribéri, doença que o deixou com sequelas para o resto da vida.
                            Frei Luiz foi aconselhado a viver em algum lugar com clima mais ameno, surgindo daí a ideia de transferi-lo para um convento da Ordem Franciscana recém-criado na cidade de Petrópolis: o Convento do Sagrado Coração de Jesus.
                        </p>
                        <p class="mb-0">
                            A  bondade e o amor de Frei Luiz  pelos mais necessitados despertou a ira de algumas pessoas, fato que o levou a sofrer dois atentados fracassados contra sua vida, mas que também o deixou com sequelas em sua já debilitada saúde. Desta forma, após enfrentar doenças graves, atentados e trabalhar arduamente por anos a fio em sua missão de atender o povo sofrido, sua saúde demonstrou sinais de declínio. E na manhã de 09 de abril de 1937 faleceu Frei Luiz. “A comoção tomou conta das pessoas que acorreram para a Igreja do Sagrado para homenagearem o tão querido Frei Luiz.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



{{--    --}}
{{--    <section class="section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-10 col-12 text-center mx-auto">--}}
{{--                    <h2 class="mb-5">Welcome to Frei Luiz Charity</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">--}}
{{--                    <div class="featured-block d-flex justify-content-center align-items-center">--}}
{{--                        <a href="#section_4" class="d-block">--}}
{{--                            <img src="{{ asset('assets/images/icons/hands.png') }}"--}}
{{--                                 class="featured-block-image img-fluid" alt="">--}}


{{--                            <p class="featured-block-text">Become a <strong>volunteer {{ trans('messages.users') }}</strong></p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">--}}
{{--                    <div class="featured-block d-flex justify-content-center align-items-center">--}}
{{--                        <a href="#" class="d-block">--}}
{{--                            <img src="{{ asset('assets/images/icons/heart.png') }}"--}}
{{--                                 class="featured-block-image img-fluid" alt="">--}}

{{--                            <p class="featured-block-text"><strong>Events </strong> of Devotion - Locale {{ config('app.locale') }}</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">--}}
{{--                    <div class="featured-block d-flex justify-content-center align-items-center">--}}
{{--                        <a href="#" class="d-block">--}}
{{--                            <img src="{{ asset('assets/images/icons/receive.png') }}"--}}
{{--                                 class="featured-block-image img-fluid" alt="">--}}

{{--                            <p class="featured-block-text">Spiritism is <strong>Love</strong></p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">--}}
{{--                    <div class="featured-block d-flex justify-content-center align-items-center">--}}
{{--                        <a href="#" class="d-block">--}}
{{--                            <img src="{{ asset('assets/images/icons/scholarship.png') }}"--}}
{{--                                 class="featured-block-image img-fluid" alt="">--}}

{{--                            <p class="featured-block-text"><strong>Charity</strong> Program</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="section-padding section-bg" id="section_2">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-6 col-12 mb-5 mb-lg-0">--}}
{{--                    <img src="{{ asset('assets/images/photos/entrada.jpg') }}"--}}
{{--                         class="custom-text-box-image img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="custom-text-box">--}}
{{--                        <h2 class="mb-2">Welcome to LFL-USA</h2>--}}

{{--                        <h5 class="mb-3">Frei Luiz Charity, Non-Profit Organization</h5>--}}

{{--                        <p class="mb-0">We are a welcoming community that embraces individuals from all backgrounds who--}}
{{--                            are interested in exploring the teachings of Spiritism and applying them in their daily--}}
{{--                            lives.</p>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-12">--}}
{{--                            <div class="custom-text-box mb-lg-0">--}}
{{--                                <h5 class="mb-3">Our Mission</h5>--}}

{{--                                <p>Oferecer a Doutrina Espírita ao ser humano por meio do seu estudo, prática e difusão,--}}
{{--                                    pela união solidária dos espíritas e unificação das instituições espíritas,--}}
{{--                                    contribuindo para a formação do homem de bem.</p>--}}

{{--                                <ul class="custom-list mt-2">--}}
{{--                                    <li class="custom-list-item d-flex">--}}
{{--                                        <i class="bi-check custom-text-box-icon me-2"></i>--}}
{{--                                        Educar (Amor), Instruir (Amor), Agir (amor em ação)--}}
{{--                                    </li>--}}

{{--                                    <li class="custom-list-item d-flex">--}}
{{--                                        <i class="bi-check custom-text-box-icon me-2"></i>--}}
{{--                                        Estudo e Prática: Caridade em ação, não somente material​--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="news-section section-padding" id="section_5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-12 mb-5">--}}
{{--                    <h2>Latest News</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-7 col-12">--}}
{{--                    <div class="news-block">--}}
{{--                        <div class="news-block-top">--}}
{{--                            <a href="#">--}}
{{--                                <img--}}
{{--                                    src="{{ asset('assets/images/news/medium-shot-volunteers-with-clothing-donations.jpg') }}"--}}
{{--                                    class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}

{{--                            <div class="news-category-block">--}}
{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Categoria--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-info">--}}
{{--                            <div class="d-flex mt-2">--}}
{{--                                <div class="news-block-date">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                        October 12, 2036--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="news-block-author mx-5">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-person custom-icon me-1"></i>--}}
{{--                                        By Admin--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <!----}}
{{--                                <div class="news-block-comment">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-chat-left custom-icon me-1"></i>--}}
{{--                                        32 Comments--}}
{{--                                    </p>--}}
{{--                                </div> -->--}}
{{--                            </div>--}}

{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to--}}
{{--                                        urban area</a></h4>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-body">--}}
{{--                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito--}}
{{--                                    Professional charity theme based on Bootstrap</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--                <div class="col-lg-4 col-12 mx-auto">--}}
{{--                    <form class="custom-form search-form" action="#" method="post" role="form">--}}
{{--                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">--}}

{{--                        <button type="submit" class="form-control">--}}
{{--                            <i class="bi-search"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}

{{--                    <h5 class="mt-5 mb-3">Recent news</h5>--}}

{{--                    <div class="news-block news-block-two-col d-flex mt-4">--}}
{{--                        <div class="news-block-two-col-image-wrap">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('assets/images/news/africa-humanitarian-aid-doctor.jpg') }}"--}}
{{--                                     class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-two-col-info">--}}
{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h6><a href="#" class="news-block-title-link">Food donation area</a>--}}
{{--                                </h6>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-date">--}}
{{--                                <p>--}}
{{--                                    <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                    October 16, 2036--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="news-block news-block-two-col d-flex mt-4">--}}
{{--                        <div class="news-block-two-col-image-wrap">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('assets/images/news/close-up-happy-people-working-together.jpg') }}"--}}
{{--                                     class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-two-col-info">--}}
{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h6><a href="#" class="news-block-title-link">Volunteering Clean</a>--}}
{{--                                </h6>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-date">--}}
{{--                                <p>--}}
{{--                                    <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                    October 24, 2036--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <form class="custom-form subscribe-form" action="#" method="post" role="form">--}}
{{--                        <h5 class="mb-4">Caixa de Oração</h5>--}}

{{--                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"--}}
{{--                               class="form-control" placeholder="Ex: John Paul,Maria Blake,Rick Vi" required>--}}

{{--                        <div class="col-lg-12 col-12 text-center">--}}
{{--                            <!-- <button type="submit" class="btn btn-primary form-control">Encarnados</button> -->--}}
{{--                            <button type="button" class="btn btn-primary me-4">Encarnados</button>--}}
{{--                            <button type="button" class="btn btn-outline-secondary">Desencarnados</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="cta-section section-padding section-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center align-items-center">--}}

{{--                <div class="col-lg-5 col-12 ms-auto">--}}
{{--                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-5 col-12">--}}
{{--                    <a href="#" class="me-4">Make a donation</a>--}}

{{--                    <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--  include "testimonial.php"; ?>  -->
@endsection
