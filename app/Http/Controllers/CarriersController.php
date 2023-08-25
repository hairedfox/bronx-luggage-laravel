<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CarriersController extends Controller
{
    use ValidatesRequests;

    public function index() {
      return view('carriers.index');
    }
}
