<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('task.title') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{ action('HomeController@index') }}">{{ trans('master.home') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if (Auth::guard()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ action('TaskController@index') }}">{{ trans('master.task_list') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ action('Auth\LoginController@logout') }}">{{ trans('master.logout') }}</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('Auth\LoginController@showLoginForm') }}">{{ trans('master.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('Auth\RegisterController@showRegistrationForm') }}">{{ trans('master.register') }}</a>
                    </li>
                @endif
            </ul>
          </div>
        </nav>
        @include('common.errors')
        @include('common.messages')
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
