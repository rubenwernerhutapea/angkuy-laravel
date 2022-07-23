<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ url('/img/white-logo.png') }}" />
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar-detail')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer-detail')

    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
