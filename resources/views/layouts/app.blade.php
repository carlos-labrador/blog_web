<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  {{-- <script src="{{ asset(mix('js/app.js')) }}" defer></script> --}}
  {{-- <script src="{{ asset(mix('js/app.js')) }}" defer></script> --}}
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  <!-- Bootstrap -->
  {{--
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}
</head>

<body style="font-family: Open Sans, sans-serif">
  <div id="app">
    @include('layouts.shared.navbar5')

    <main class="">
      @yield('content')
    </main>
  </div>
  <script src="{{ asset(mix('js/app.js')) }}"></script>
  {{-- @include('layouts.shared.footer') --}}
</body>

</html>