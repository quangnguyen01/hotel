<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function getGoogleSignInUrl()
    {
        try {
            $url = Socialite::driver('google')->stateless()
                ->redirect()->getTargetUrl();
            return redirect()->to($url);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function loginCallback(Request $request)
    {
        try {
            $state = $request->input('state');

            parse_str($state, $result);
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $googleUser->email)->first();
            if ($user) {
                $credentials = ['email' => $user->email, 'password' => '123'];
                if (Auth::attempt($credentials)){
                    return redirect()->route('home-page');
                }
            }
            $user = new User();
            $user->email = $googleUser->email;
            $user->name = $googleUser->name;
            $user->google_id = $googleUser->id;
            $user->avatar = $googleUser->avatar;
            $user->password = '123';
            $user->save();
            $credentials = ['email' => $user->email, 'password' => '123'];
            if (Auth::attempt($credentials)){
                return redirect()->route('home-page');
            }
            return redirect()->route('login');
        } catch (\Exception $exception) {
            return response()->json([
                'status' => __('google sign in failed'),
                'error' => $exception,
                'message' => $exception->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
