<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('task.title') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container">
        @include('site.includes.menu')

        @include('common.errors')

        @include('common.messages')

        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
