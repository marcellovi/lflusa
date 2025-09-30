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



    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Coming Soon!</h2>
                </div>
            </div>
        </div>
    </section>




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

    <!--   include "volunteer.php"; ?> -->




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

