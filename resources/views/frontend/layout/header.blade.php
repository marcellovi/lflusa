<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-geo-alt me-2"></i>
                    <a  href="https://maps.app.goo.gl/bhjzn9TTEt8nVqRt9" target="_blank" onmouseover="style='text-decoration:underline'" onmouseout="style='text-decoration:none'">
                        24814 Kuykendahl Rd Ste 140, Tomball - TX
                    </a>
                </p>

                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@lfl-usa.com ">
                        info@lfl-usa.com
                    </a>
                </p>
            </div>


            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">

                    <li class="social-icon-item">
                        <a href="https://www.facebook.com/lardefreiluizusa" class="social-icon-link bi-facebook" target="_blank"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://www.instagram.com/lar_de_frei_luiz_usa/" target="_blank" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://www.youtube.com/@ScienceSpiritualityConnection" class="social-icon-link bi-youtube" target="_blank"></a>
                    </li>
                    <li class="social-icon-item">
                        <a href="https://chat.whatsapp.com/KAdYxNIRCneFshXQPTMcVP" target="_blank" class="social-icon-link bi-whatsapp"></a>
                    </li>

                    @php $locale = session()->get('locale'); @endphp
                    @switch($locale)
                        @case('en')
                            <li class="social-icon-item">
                                <a href="lang/br" title="Portuguese" ><img src="{{asset('assets/images/icons/flags/br.png')}}" width="35px"></a>
                            </li>
                            @break
                        @case('br')
                            <li class="social-icon-item">
                                <a href="lang/en" title="English" ><img src="{{asset('assets/images/icons/flags/en.png')}}" width="35px"></a>
                            </li>
                            @break
                        @default
                            <li class="social-icon-item">
                                <a href="lang/en" title="English" ><img src="{{asset('assets/images/icons/flags/en.png')}}" width="35px"></a>
                            </li>
                    @endswitch

                </ul>
            </div>

        </div>
    </div>
</header>
