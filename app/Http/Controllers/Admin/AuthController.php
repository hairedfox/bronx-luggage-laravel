<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View | RedirectResponse
     */
    public function new()
    {
        if (Auth::check())
        {
          return redirect()->intended('/admin/dashboard')->with('alert-info', 'Already logged in.');
        }

        return view('admin.auth.new');
    }

    /**
     * Handle user login attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->all()['email'])->first();

        if ($user && $user->role == 'admin' && Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->with('alert-success', 'Logged in successfully.');;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('alert-success', 'Logged out successfully.');
    }
}
