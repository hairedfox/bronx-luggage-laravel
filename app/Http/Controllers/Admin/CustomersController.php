<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\GuestRepository;
use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
  protected UserRepository $userRepository;
  protected GuestRepository $guestRepository;

  public function __construct(UserRepository $userRepository, GuestRepository $guestRepository)
  {
    $this->userRepository = $userRepository;
    $this->guestRepository = $guestRepository;
  }

  public function index(Request $request)
  {
    if (!auth()->check()) {
      return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Login first');
    }

    $params = $request->all();
    $usersPaginator = $this->userRepository->list($params);
    $guestsPaginator = $this->guestRepository->list($params);

    return view('admin.customers.index', [
      'users' => $usersPaginator->items(),
      'guests' => $guestsPaginator->items(),
      'usersPaginator' => $usersPaginator,
      'guestsPaginator' => $guestsPaginator
    ]);
  }
}
