<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\CarrierRepository;


class CarriersController extends BaseController
{
  protected CarrierRepository $carrierRepository;

  public function __construct(CarrierRepository $carrierRepository)
  {
    $this->carrierRepository = $carrierRepository;
  }

  public function index(Request $request)
  {
    if (Auth::check()) {
      $paginator = $this->carrierRepository->list($request->all());

      return view('admin.carriers.index', [
        'carriers' => $paginator->items(),
        'paginator' => [
          'page' => $paginator->currentPage(),
          'prev' => $paginator->previousPageUrl(),
          'next' => $paginator->nextPageUrl(),
          'count' => $paginator->total(),
          'per_page' => $paginator->perPage(),
          'last_page' => $paginator->lastPage(),
          'has_more_page' => $paginator->hasMorePages(),
          'first_item' => $paginator->firstItem(),
          'last_item' => $paginator->lastItem()
        ]
      ]);
    } else {
      return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Login first');
    }
  }
}
