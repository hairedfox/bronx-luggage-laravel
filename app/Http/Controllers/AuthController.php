<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showFormLogin()
    {
        if (auth()->check()) {
            return redirect()->intended('/')->with('alert-danger', 'Already logged in.');
        }

        return view('auth.new');
    }

    /**
     * Handle user login attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('alert-success', 'Logged in successfully.');;
        }

        // Authentication failed, redirect back to the login form with errors.
        return redirect()->back()->withInput()->withErrors([
            'auth' => 'Invalid credentials.',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('alert-success', 'Logged out successfully.');
    }
}
