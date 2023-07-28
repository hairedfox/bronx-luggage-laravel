<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CarriersController extends Controller
{
    use ValidatesRequests;

    public function bags() {
      return view('carriers.bags');
    }

    public function backpacks() {
      return view('carriers.backpacks');
    }

    public function luggages() {
      return view('carriers.luggages');
    }
}
