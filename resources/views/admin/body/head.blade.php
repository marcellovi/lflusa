<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description','Lar Frei Luiz - USA')">
    <meta name="author" content="Marcello F. Vieira - Bigbits.com.br">
    <meta name="keywords" content="@yield('keywords','lfl-usa,kardecismo,alan kardek,chico xavier')">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}">

    <!-- TITLE -->
    <title>@yield('title','LFL - USA')</title>
    <!-- BOOTSTRAP CSS -->
    @include('admin.body.style')
    <!-- CUSTOM CSS -->
    @yield('style')
</head>
