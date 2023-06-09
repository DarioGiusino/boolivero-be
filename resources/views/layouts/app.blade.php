<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- favicon --}}
  <link rel="icon" type="image/svg+xml" href="{{ asset('loader_logo.png') }}" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  {{-- fontawesome --}}
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
    crossorigin='anonymous' />

  <!-- cdns -->
  @yield('cdns')

  <!-- Usando Vite -->
  @vite(['resources/js/app.js'])
</head>

<body style="visibility: hidden">
  <div id="app">
    {{-- include navbar --}}
    @include('includes.navbar')

    {{-- main --}}
    <main class="d-flex flex-column flex-md-row-reverse">
      {{-- main content --}}
      <div class="main-content flex-grow-1">
        @yield('content')
      </div>
      {{-- main sidebar --}}
      <div class="fb-10-md-20 flex-shrink-0">
        @include('includes.sidebar')
      </div>
    </main>

    {{-- toast --}}
    @include('includes.alerts.toast')

    {{-- scripts --}}
    @yield('scripts')
  </div>

</body>

</html>
