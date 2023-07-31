<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    use ValidatesRequests;

    public function new() {
      return view('users.new');
    }

    public function create(Request $request) {
        $user_params = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $user = new User;

        $user->fill($user_params);

        # TODO: Fix flash message, it doesn't work yet.
        if ($user->save()) {
            session()->flash('alert-success', 'Your account is created. Please login!');
        } else {
            session()->flash('alert-danger', 'Failed to register');
        }

        return redirect('/');
    }
}
