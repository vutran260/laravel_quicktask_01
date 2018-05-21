<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ action('Admin\HomeController@index') }}" class="nav-link">{{ trans('admin.menu.home') }}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ action('Admin\TaskController@index') }}" class="nav-link">{{ trans('admin.menu.task') }}</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fa fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
