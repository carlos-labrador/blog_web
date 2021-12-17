<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="carlos labrador">
    <meta name="generator" content="japan">
    <title>{{ config('app.name', 'Welcome') }}</title>


    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
    
    @include('layouts.shared.navbar')

    <main class="container">
        @yield('content')
    </main>

  </body>
</html>