<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
 
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'name' => $request->username,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect()->route('home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Invalid Credential');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}