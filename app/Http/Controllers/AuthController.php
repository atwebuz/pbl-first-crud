<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    // blade pages
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function secret()
    {
        return view('auth.confirmation');
    }


    // login
     public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/posts');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

    // register store
    public function register_store(Request $request){

       $validated = $request->validate([

                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        auth()->login($user);

        return redirect('/posts')->with('success', "Account successfully registered.");
    }

    // logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/posts');
    }

    
}
