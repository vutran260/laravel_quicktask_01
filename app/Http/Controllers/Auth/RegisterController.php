<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\User\UserInterface;
use Exception;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/tasks';

    protected $userRepository;

    public function __construct(
        UserInterface $userRepository
    ) {
        $this->middleware('guest');
        $this->userRepository = $userRepository;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(StoreUserRequest $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        try {
            $user = $this->userRepository->firstOrCreate($data);
            Auth::login($user);

            return redirect()
                ->action('TaskController@index')
                ->with('message', trans('messages.register.success'));
        } catch (Exception $e) {
            return redirect()
                ->action('Auth\RegisterController@showRegistrationForm')
                ->with('message', trans('messages.register.unsuccess'));
        }
    }
}
