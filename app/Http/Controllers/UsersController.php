<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UsersController extends Controller
{
    use ValidatesRequests;

    public function new() {
      return view('users.new');
    }

    public function create() {

    }
}
