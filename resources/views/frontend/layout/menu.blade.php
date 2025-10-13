<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo-lfl.png') }}" class="logo img-fluid" alt="Frei Luiz">
            <span>
                    Lar Frei Luiz - USA
                    <small>Non-profit Organization</small>
                </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">{{ trans('messages.about') }}</a>
                </li>

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link click-scroll dropdown-toggle" href="#"--}}
{{--                       role="button" data-bs-toggle="dropdown"--}}
{{--                       aria-expanded="false">{{ trans('messages.about') }}</a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">--}}
{{--                        <li><a class="dropdown-item" href="#">{{ trans('messages.administration') }}</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/about">Lar Frei Luiz</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/spiritism">{{ trans('messages.espiritism') }}</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/founders">{{ trans('messages.founders') }}</a></li>--}}
{{--                        <!-- <li><a class="dropdown-item" href="/soon">{{ trans('messages.photo-gallery') }}</a></li> -->--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" href="/library">{{  trans('messages.library') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/calendar">{{ trans('messages.our-calendar') }}</a>
                </li>

                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#"
                       id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ trans('messages.our-calendar') }}</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item mt-2" href="/soon">{{ trans('messages.lfl-news') }}</a></li>
                        <div class="dropdown-divider"></div>

                      <li><a class="dropdown-item" href="#">{{ trans('messages.lectures') }}</a></li>
                        <li><a class="dropdown-item" href="/soon">{{ trans('messages.message-board') }}</a></li>
                        <li><a class="dropdown-item" href="/soon">{{ trans('messages.social-actions') }}</a></li>
                        <li><a class="dropdown-item" href="/library">{{ trans('messages.library') }}</a></li>
                        <li><a class="dropdown-item" href="/soon">{{ trans('messages.bazaar') }}</a></li>
                        <li><a class="dropdown-item" href="/soon">{{ trans('messages.partners') }}</a></li>
                        <li><a class="dropdown-item" href="/soon">{{ trans('messages.courses-trainning') }}</a></li>
                         <li><a class="dropdown-item" href="#">Estudos Doutrinarios</a></li>

                    </ul>
                </li>-->

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="library.php">{{ trans('messages.library') }}</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="bazaar.php">{{ trans('messages.bazaar') }}</a>--}}
{{--                </li>--}}

               <!-- <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">{{ trans('messages.contact') }}</a>
                </li> -->
                <li class="nav-item ms-3">
                    <a class="nav-link click-scroll" href="#" data-bs-toggle="modal" data-bs-target="#input-modal" data-bs-whatever="@mdo">{{ trans('messages.prayer_box') }}</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn" onclick="window.open('https://www.paypal.com/donate/?hosted_button_id=PQQB5SV8MATTS',
                    '_blank', 'width=800,height=600')">{{ trans('messages.donate') }}</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
