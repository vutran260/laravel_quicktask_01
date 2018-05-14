<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>{{ trans('task.title') }}</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-default">
            <!-- Navbar Contents -->
        </nav>
    	@yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
