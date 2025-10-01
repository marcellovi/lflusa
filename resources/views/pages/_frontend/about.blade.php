@extends('base.front_base')

@section('content')

    <section class="news-detail-header-section text-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <!-- <h1 class="text-white">{{ trans('messages.title') }}</h1> -->
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg col-12">
                    <div class="custom-text-box" style="background: #e5c999">
                        <h2 class="mb-2">{{ trans('messages.about_title') }}:</h2>
                        <p class="mb-3" style="color: white;font-weight: 600px"><b>
                                {{ trans('messages.about_title_text') }}</b></p>
                        <h2 class="mb-2">{{ trans('messages.aboutus_mission_title') }}:</h2>
                        <p class="mb-3"  style="color: white;font-weight: 600px">
                            <b> {{ trans('messages.aboutus_mission_title_text') }}</b></p>
                        <h2 class="mb-2">{{ trans('messages.aboutus_activities_programs_title') }}:</h2>
                        <p class="mb-0"  style="color: white;font-weight: 600px">
                            <b>In the greater Houston area but not limited to and with the hard work and support from all volunteers and friends, LFL-USA will strive to become in the near future an organization with all infrastructure capable of providing means to help the ones in need: We hold Public Meetings, Lectures, Seminars, and Conferences to discuss Christian teachings; promote book studies envisioning improvement on moral and spiritual values. LFL-USA holds free workshops and art classes on Music, Arts, Culinary, creating a welcoming, friendly, and safe environment in order to provide counseling for (but not limited to) poor people, addictive, and depressed people. LFL-USA also aims to hold free workshops on Meditation and Yoga to support wellbeing and good spiritual health.
                            <br><br>
                            To achieve our goals and support the organization and its charity activities LFL-USA promotes Seminars, Lecturers, Trainings, Bazars, and fundraises.
                            As long as the organization LFL-USA exists, we will strive to perform well because we believe, this is what everybody should do in return to all the blessings we receive: house, job, family, food, education, access to health care, support from friends, family, job and state, etc.
                            <br><br>
                            While our organization is not connected to any religion, we respect all beliefs based on principles that promote peace and love among all beings. The idea is Integration & Inclusion rather than focusing on labels; remove the barriers between Spirituality & Science; discuss what we call “rationalized faith”.
                            </b>
                        </p>
                    </div>
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
