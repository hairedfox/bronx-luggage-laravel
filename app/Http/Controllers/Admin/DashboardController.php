<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
  public function index(Request $request)
  {
    return view('admin.dashboard.index');
  }
}
