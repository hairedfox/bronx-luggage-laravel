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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User;

        $user->fill($user_params);
        if ($user->save()) {
            session()->flash('message', 'Your account is created. Please login!');
        } else {
            session()->flash('message', 'Failed to register');
        }

        return redirect('/');
    }
}
