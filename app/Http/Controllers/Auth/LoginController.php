<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use Illuminate\Http\Request;

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
    protected $channelAccessToken;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->channelAccessToken = env('LINE_ACCESS_TOKEN');
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
                    'flag' => 0,
                ]);
            }
            // Login the user
            Auth::login($user);
            // Set Rich Menu
            $this->setRichMenuToUser($user->provider_id);
            // update user flag
            $user->flag = 1;

        } catch (\Exception $e) {
            // Log the exception if needed
            dd($e->getMessage());
        }
    }
    private function setRichMenuToUser($user)
    {
        $channelAccessToken = $this->channelAccessToken; // ใช้ channel access token จาก .env;
        $channelSecret = env('LINE_CHANNEL_SECRET');
        $lineUserId = $user; // ใช้ provider_id จาก User model

        // กำหนด Rich Menu ตามสถานะของผู้ใช้
        //$richMenuId = 'richmenu-effbc57726f8aa18546090c31e40c20c'; // รหัส Rich Menu Register
        $richMenuId = 'richmenu-d8e1ae9f0e73fbfe633529d408a1688e'; // รหัส Rich Menu Register success

        $httpClient = new CurlHTTPClient($channelAccessToken);
        $bot = new LINEBot($httpClient, ['channelSecret' => $channelSecret]);

        // ลิงค์ Rich Menu
        $response = $bot->linkRichMenu($lineUserId, $richMenuId);

        if ($response->isSucceeded()) {
            return response()->json(['message' => 'Rich Menu set successfully!']);
        } else {
            // เพิ่มการตรวจสอบข้อผิดพลาดเพิ่มเติม
            $errorMessage = $response->getRawBody();
            \Log::error('Failed to set Rich Menu: ' . $errorMessage); // บันทึกข้อผิดพลาดใน log
            return response()->json(['message' => 'Failed to set Rich Menu: ' . $errorMessage], 500);
        }
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {

                return redirect()->route('admin');

            }else{

                return redirect()->route('myData');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
