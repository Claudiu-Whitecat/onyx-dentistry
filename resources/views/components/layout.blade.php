<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Onyx-Dentistry</title>
    <meta name="description" content="Cabinet stomatologic Onyx Dentistry situat în zona Ion Mihalache, București."/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/x-icon" href="
    {{asset('images/meta/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/meta/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/meta/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/meta/favicon-16x16.png')}}">

    <!-- FONTS -->
    {{-- Loads Default Font - Poppins --}}
    @googlefonts
    {{-- Loads Inter--}}
    @googlefonts('primary-font')
    {{-- Loads Barlow Condensed--}}
    @googlefonts('secondary-font')
    @vite('resources/js/app.js')

    <script src="https://kit.fontawesome.com/038dcaac05.js" defer crossorigin="anonymous"></script>

</head>
@include('components.header.header')

<main>
    {{ $slot }}
</main>
@include('components.footer.footer')
