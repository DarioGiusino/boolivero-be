<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- cdns -->
  @yield('cdns')

  <!-- Usando Vite -->
  @vite(['resources/js/app.js'])
</head>

<body>
  <div id="app">


    <nav class="navbar navbar-expand-md ">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
          <div class="logo_laravel">
            <img src="https://avatars.githubusercontent.com/u/10514109?s=280&v=4" class="logo">
          </div>
          {{-- config('app.name', 'Laravel') --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">

            <li class="nav-item">
              <a class="text-link" href="{{ url('/') }}">{{ __('Boolivero') }}</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto d-flex align-items-center">

            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
            @else
              <li class="link">
                <a class="one-link mx-1" href="('#')">Torna a ordinare</a>
                <a class="one-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
              </li>
              <li class="dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle p-0 mx-3 text-light" href="#" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>


                <div class="dropdown-menu dropdown-menu-right text-light" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a>
                  <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              <li>
                <div class="media">
                  <figure>
                    <img class="rounded-circle mt-2"
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp03ufSRfn7HaHhshFyqzmGCWQjh_LozvMRA&usqp=CAU"
                      alt="user.name" />
                  </figure>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="d-flex flex-column flex-md-row-reverse">
      <div class="flex-grow-1">
        @yield('content')
      </div>
      <div class="fb-10-md-20">
        @yield('sidebar')
      </div>
    </main>
  </div>
</body>

</html>
