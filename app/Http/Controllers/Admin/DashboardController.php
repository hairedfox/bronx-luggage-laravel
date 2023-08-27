<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;


class DashboardController extends BaseController
{

  public function index(Request $request)
  {
    if (Auth::check()) {
      return view('admin.dashboard.index');
    } else {
      return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Login first');
    }
  }
}
