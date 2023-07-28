<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StaticPagesController extends Controller
{
    use ValidatesRequests;

    public function homepage() {
      return view('static_pages.homepage');
    }

    public function contact_us() {
      return view('static_pages.contact_us');
    }
}
