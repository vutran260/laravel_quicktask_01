<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);

        if (Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ])) {
            return redirect()
                ->action('TaskController@index')
                ->with('message', trans('messages.login.success'));
        }

        return redirect()
            ->action('Auth\LoginController@showLoginForm')
            ->with('message', trans('messages.login.unsuccess'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->action('Auth\LoginController@showLoginForm');
    }

    protected function redirectTo()
    {
        return action('TaskController@index');
    }
}
