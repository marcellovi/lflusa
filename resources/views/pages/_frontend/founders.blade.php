@extends('base.front_base')

@section('content')

    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h1 class="text-white">Os Fundadores</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section section-padding">
        <div class="container">
            <div class="row">

                <div class="row">

                    <div class="col-lg col-12">
                        <div class="custom-text-box mb-1 p-0">
                            <h2 class="mb-2">Nossa Missão</h2>

                            <h5 class="mb-3">Quem são os fundadores</h5>

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
                        <div class="custom-text-box pt-5 mb-1 p-0">
                            <h5 class="mb-3">Quem são os fundadores</h5>
                            <p class="mb-0">Saiba quem esta por trás do LFL-USA:</p>
                            <ul class="custom-list mt-2">
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Ana Cláudia Castro
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Maria das Graças Ferraz
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Maurício Dacosta
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Eduardo Petizme
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Fernanda Petizme​
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Rosangela Pierre​
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="{{ asset('assets/images/photos/fundadores.png') }}" class="custom-text-box-image img-fluid" alt="">
                    </div>

                </div>

                <div class="col-lg col-12">

                    <div class="mt-3">
                        <h2 class="mb-2">Toda Casa Precisa de Ordem</h2>

                        <h5 class="mb-3">Nossos Departamentos :</h5>
                        <img src="{{ asset('assets/images/logo-lfl.png') }}" width="200" height="250" style="float:right;">
                        <ul>
                            <li>Doutrinário – Estudos, Passes, Biblioteca, etc</li>
                            <li>Outreach – Voluntariado: Ações Socais e Humanitárias</li>
                            <li>Cozinha – Casa e Fundraiser​</li>
                            <li>Bazaar - Fundraiser​</li>
                            <li>Mary Cassatt Corner – Voluntariado: Artes como ação social</li>
                            <li>IT</li>
                            <li>House Management – Rotina da Casa, Novos Projetos, etc</li>
                            <li>Contabilidade</li>
                            <li>Financeiro</li>
                            <li>Comunicações</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
