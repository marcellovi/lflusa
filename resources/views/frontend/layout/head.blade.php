<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description','Lar Frei Luiz - USA')">
    <meta name="author" content="Marcello F. Vieira - Bigbits.com.br">
    <meta name="keywords" content="@yield('keywords','lfl-usa,kardecismo,alan kardek,chico xavier')">

    <title>Lar Frei Luiz - USA</title>

    <!--  ============ Favicon  =============  -->
    <link href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" rel="icon"/>

    <!-- TITLE -->
    <title>@yield('title','LFL - USA')</title>
    <!--  ============ Styles  =============  -->
    @include('frontend.layout.style')
    <!--  ============ Add Dynamic Styles  =============  -->
    @yield('style')

</head>
