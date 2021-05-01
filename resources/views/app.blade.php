<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucwords(str_replace('.', ' ', getPageTitle())) . ' - ' . config('app.name') }}</title>
    <meta name="theme-color" content="#000000">

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/app.js.map') }}" defer></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/script.js.map') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css.map') }}" rel="json">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css.map') }}" rel="json">
</head>
<body>

@if($isAdmin)
    @include('includes.adminBar')
@endif

<div id="app">

    @include('includes.header')

    @include('includes.pageTitle')

    <main class="py-5">
        @yield('content')
    </main>

    @include('includes.footer')

</div>
</body>
</html>
