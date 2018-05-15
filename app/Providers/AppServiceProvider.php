<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Task\TaskInterface;
use App\Repositories\Task\TaskRepository;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(TaskInterface::class, TaskRepository::class);
        App::bind(UserInterface::class, UserRepository::class);
    }
}
