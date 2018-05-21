<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level != config('settings.level.admin')) {
            return redirect()->back()->with('message', trans('messages.permission_denied'));
        }

        return $next($request);
    }
}
