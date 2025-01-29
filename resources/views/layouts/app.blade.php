<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('assets/frontend/default/favicons/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/default/favicons/favicon-196x196.png') }}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/default/favicons/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/default/favicons/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/default/favicons/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ asset('assets/frontend/default/favicons/favicon-128.png') }}" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ asset('assets/frontend/default/favicons/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ asset('assets/frontend/default/favicons/mstile-70x70.png') }}" />
        <meta name="msapplication-square150x150logo" content="{{ asset('assets/frontend/default/favicons/mstile-150x150.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset('assets/frontend/default/favicons/mstile-310x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ asset('assets/frontend/default/favicons/mstile-310x310.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            [x-cloak]{
                display: none !important;
            }
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col items-center justify-center">
              <!-- Page content here -->
{{--              <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>--}}
                {{$slot}}
            </div>
            <div class="drawer-side">
              <label for="my-drawer-2" class="drawer-overlay"></label>

              @include('layouts.sidebar')

            </div>
          </div>

    </body>
</html>
