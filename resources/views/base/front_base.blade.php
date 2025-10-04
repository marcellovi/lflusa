<!DOCTYPE html>
<html lang="en">

<!--{ Head }-->
@include('frontend.layout.head')
<!--{ Head End }-->


<body id="section_1">

@include('frontend.layout.header')

@include('frontend.layout.menu')


<main>

    @yield('content')

    <!-- ============ GENERAL COMPONENTS ============= -->

    <!-- Toast container -->
    @if (session('success'))
        <div id="toastArea" aria-live="polite" aria-atomic="true" style="position: fixed;top:1rem;right:1rem;z-index: 1080;display: grid;grid-auto-rows:min-content;grid-row-gap:.5rem;">
            <div class="toast toast-success fade show" id="t_temrlswzdd" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" style="display: block;opacity: 1;min-width: 280px;overflow: hidden;border: 0;border-radius: .75rem;box-shadow: 0 8px 24px rgba(0,0,0,.12);">
                <div class="toast-header" style="background: linear-gradient(135deg,#28a745,#20c997);color:#fff;border:0;font-weight: 600;display: flex;align-items: center;padding: .25rem .75rem;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius: calc(.25rem - 1px); ">

                    <i class="fas fa-check-circle mr-2" style="font-width: 900;font-family:'Font Awesome 5 Free';display: inline-block;font-style: normal;font-variant: normal;text-rendering: auto;line-height: 1;-webkit-font-smoothing: antialiased;margin-right: .5rem !important;"></i>
                    <strong class="mr-auto" style="margin-right: auto !important;font-weight: bolder;box-sizing: border-box;">Sucesso</strong>
                    <small class="text-light-50"></small>
                    <button onclick="closeDiv()" type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-bs-dismiss="toast" aria-label="Close" style="margin-bottom: .25rem !important;margin-left:.5rem !important;float:right;font-size: 1.5rem;font-weight: 700;line-height: 1;opacity: .5;text-shadow:0 1px 0 #fff;padding: 0;background-color: transparent;border:0;">
                        <span aria-hidden="true" style="float:right;font-size: 1.5rem;font-weight: 700;line-height: 1;opacity: .5;text-shadow:0 1px 0 #fff;">×</span>
                    </button>
                </div>
                <div class="toast-body" style="padding: .75rem;">{{ session('success') }}</div>
            </div></div>
    @endif

    @isset($_GET['id'])
        @if($_GET['id'] == 1)
            <div id="toastArea" aria-live="polite" aria-atomic="true" style="position: fixed;top:1rem;right:1rem;z-index: 1080;display: grid;grid-auto-rows:min-content;grid-row-gap:.5rem;">
                <div class="toast toast-success fade show" id="t_temrlswzdd" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" style="display: block;opacity: 1;min-width: 280px;overflow: hidden;border: 0;border-radius: .75rem;box-shadow: 0 8px 24px rgba(0,0,0,.12);">
                    <div class="toast-header" style="background: linear-gradient(135deg,#28a745,#20c997);color:#fff;border:0;font-weight: 600;display: flex;align-items: center;padding: .25rem .75rem;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius: calc(.25rem - 1px); ">

                        <i class="fas fa-check-circle mr-2" style="font-width: 900;font-family:'Font Awesome 5 Free';display: inline-block;font-style: normal;font-variant: normal;text-rendering: auto;line-height: 1;-webkit-font-smoothing: antialiased;margin-right: .5rem !important;"></i>
                        <strong class="mr-auto" style="margin-right: auto !important;font-weight: bolder;box-sizing: border-box;"> Sucesso</strong>
                        <small class="text-light-50"></small>
                        <button onclick="closeDiv()" type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-bs-dismiss="toast" aria-label="Close" style="margin-bottom: .25rem !important;margin-left:.5rem !important;float:right;font-size: 1.5rem;font-weight: 700;line-height: 1;opacity: .5;text-shadow:0 1px 0 #fff;padding: 0;background-color: transparent;border:0;">
                            <span aria-hidden="true" style="float:right;font-size: 1.5rem;font-weight: 700;line-height: 1;opacity: .5;text-shadow:0 1px 0 #fff;">×</span>
                        </button>
                    </div>
                    <div class="toast-body" style="padding: .75rem;">Operação concluída com êxito.</div>
                </div></div>
        @elseif($_GET['id'] == 2)
        @else
        @endif
    @endisset

    <!-- { Inout modal Box of Prayers } -->
    <div class="modal fade" id="input-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ 'Caixa de Preçes' }}</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <form action="{{ route('prayerbox.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ 'Recipiente(s)' }}:</label>
                            <select class="form-select" id="type_prayer" name="type">
                                <option value="encarnados">Encarnados</option>
                                <option value="desencarnados">Desencarnados</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">{{ 'Nome(s)' }}:</label>
                            <textarea class="form-control" id="names" name="names"></textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="submit">Enviar</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Other Evento -->
    <div class="modal fade" id="evento-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ 'Eventos' }}</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <ul>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Reuniao Pública & Passes' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Evangelização Infantil' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Irradiação' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Estudo do Livro dos Espirítos' }}:</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Cursos -->
    <div class="modal fade" id="cursos-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ 'Cursos & Treinamentos' }}</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <ul>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Noções básicas do Espiritismo' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Estudo Dirigido do livro Paulo Estevão' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Irradiação' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Estudo do Livro dos Espirítos' }}:</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other voluntario -->
    <div class="modal fade" id="voluntario-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ 'Ações Sociais' }}</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <ul>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Fraternidade Sem Fronteiras' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Fraternidade nas Ruas' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Kids Meals' }}:</label>
                            </li>
                            <li>
                                <label for="recipient-name" class="col-form-label">{{ 'Gulf Coast Blood Drive' }}:</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end modal prece -->

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

</main>


@include('frontend.layout.footer')

<!-- ============ Scripts Start ============= -->
@include('frontend.layout.scripts')

<!--  ============ Add Scripts Dynamic ============= -->
@yield('scripts')

<!--  ============ Footer  =============  -->
</body>
</html>

