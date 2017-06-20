<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/favicon.ico?17693065493374194414" type="image/x-icon" />
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/favicon.ico?17693065493374194414">
    <link rel="apple-touch-icon" sizes="57x57" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-57x57.png?17693065493374194414">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-57x57.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="72x72" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-72x72.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="114x114" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-114x114.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="120x120" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-120x120.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="144x144" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-114x114.png?17693065493374194414">
    <link rel="apple-touch-icon" sizes="152x152" href="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-152x152?17693065493374194414">
    <meta name="application-name" content="BevyBar">
    <meta name="msapplication-TileImage" content="//cdn.shopify.com/s/files/1/1103/5152/t/5/assets/apple-icon-140x140.png?17693065493374194414">
    <meta name="msapplication-TileColor" content="#1B2D38">
    <!-- Styles -->
    <link href="{{ asset('css/foundation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
        ]) !!}
        ;
    </script>
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/what-input.js') }}"></script>
    <script src="{{ asset('js/vendor/foundation.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
