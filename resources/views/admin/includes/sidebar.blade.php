<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>{{ trans('admin.admin_area') }}</h5>
        <a class="dropdown-item" href="{{ action('Auth\LoginController@logout') }}">{{ trans('admin.logout') }}</a>
    </div>
</aside>
