<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ action('Admin\HomeController@index') }}" class="brand-link">
        {!! Html::image('/user/images/AdminLTELogo.png', 'AdminLTE Logo', [
            'class' => 'brand-image img-circle elevation-3',
        ]) !!}
        <span class="brand-text font-weight-light">{{ trans('admin.admin_area') }}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {!! Html::image('/user/images/user2-160x160.jpg', 'User Image', [
                    'class' => 'img-circle elevation-2',
                ]) !!}
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ action('Admin\HomeController@index') }}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            {{ trans('admin.menu.home') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ action('Admin\TaskController@index') }}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            {{ trans('admin.menu.task') }}
                        <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ action('Admin\TaskController@index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{ trans('admin.task.list') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
