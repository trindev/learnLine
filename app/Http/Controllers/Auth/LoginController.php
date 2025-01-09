<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToLine()
    {
        // Send user's request to Line
        return Socialite::driver('line')->redirect();
    }

    // Line callback
    public function handleLineCallback()
    {
        try {
            // Get user data from line
            $user = Socialite::driver('line')->stateless()->user();
            // Register or login user
            $this->_registerOrLoginUser($user);
            //return Home After login
            return redirect()->route('home');

        }catch (\Exception $e) {
            // Log the exception if needed
            Log::error($e->getMessage());
        }
    }

    protected function _registerOrLoginUser($data)
    {
        try {
            // Check if user exists
            $user = User::where('provider_id', $data->id)->first();
            // If user does not exist, register user
            if ($user == null) {
                $user = User::create([
                    'name' => $data->name,
                    'email' => $data->email,
                    'provider_id' => $data->id,
                    'avatar' => $data->avatar,
                ]);
            }
            // Login the user
            Auth::login($user);
        } catch (\Exception $e) {
            // Log the exception if needed
            dd($e->getMessage());
        }
    }
}
