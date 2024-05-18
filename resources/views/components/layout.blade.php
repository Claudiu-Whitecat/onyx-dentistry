<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Onyx-Dentistry</title>
    <meta name="description" content="Cabinet stomatologic Onyx Dentistry situat în zona Ion Mihalache, București." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="./assets/images/meta/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/meta/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/meta/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/meta/favicon-16x16.png">

    @vite('resources/js/app.js')
{{--    <!-- FONTS -->--}}
{{--    <link rel="stylesheet" href="https://use.typekit.net/gkr7kor.css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css')}}" />--}}
{{--    <!-- CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/reset.css')}}" media="screen" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/variables.css')}}" media="screen" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css')}}" media="screen" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/main.css')}}" media="screen" type="text/css" />--}}

{{--    <script defer src="{{ asset('js/app.js')}}"></script>--}}

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/038dcaac05.js" defer crossorigin="anonymous"></script>

</head>
@include('components.header')

<main>
    {{ $slot }}
</main>
@include('components.footer')
