<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
        return view('auth.login');
    }







    public function login(Request $request)
{
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
        $user = Auth::user();
        $greeting = $user->first_name ?? $user->name ?? 'User';
        // Redirect to intended page or user dashboard
        return redirect()->intended(route('home'))->with('success', 'Welcome back, ' . $greeting . '!');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials. Please try again.',
    ])->withInput($request->only('email'));
}




    /**
     * Logout the user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}


