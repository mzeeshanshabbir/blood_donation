<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}

{{--<head>--}}
{{--    <meta charset="utf-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">--}}
{{--    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">--}}
{{--    <title>--}}
{{--        {{ config('app.name', 'Laravel') }}--}}
{{--    </title>--}}
{{--    <!--     Fonts and icons     -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />--}}
{{--    <!-- Nucleo Icons -->--}}
{{--    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />--}}
{{--    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />--}}
{{--    <!-- Font Awesome Icons -->--}}
{{--    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>--}}
{{--    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />--}}
{{--    <!-- CSS Files -->--}}
{{--    <link id="pagestyle" href="{{ asset('/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />--}}
{{--</head>--}}

{{--@include('layouts.navigation')--}}

{{--@if (isset($header))--}}
{{--    <header class="bg-white dark:bg-gray-800 shadow">--}}
{{--        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--            {{ $header }}--}}
{{--        </div>--}}
{{--    </header>--}}
{{--@endif--}}

{{--{{ $slot }}--}}
