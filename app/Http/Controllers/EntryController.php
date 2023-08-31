<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntryController extends Controller
{
    public function loginForm() {
        return view('login');
    }
    public function login(LoginRequest $request){
        $request->validated();
        $credentials = $request->only('email', 'password');
        dd($credentials);
        if(Auth::attempt($credentials)){
            if(Auth::user()->role == Role::ADMIN) {
                return redirect()->route('managerRoom');
            }
            return redirect()->route('home-page');
        }
        else{
            return back()->with('error-login','Invalid account and/or password. Please check and try again.');
        }

    }

    public function register(UserRequest $request) {
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->save();
        return back()->with(['status' => 'Tạo tài khoản thành công']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
