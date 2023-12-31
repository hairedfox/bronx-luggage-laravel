<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\OrderRepository;


class OrdersController extends BaseController
{
  protected OrderRepository $orderRepository;

  public function __construct(OrderRepository $orderRepository)
  {
    $this->orderRepository = $orderRepository;
  }

  public function index(Request $request)
  {
    if (Auth::check()) {
      $paginator = $this->orderRepository->list($request->all());

      return view('admin.orders.index', [
        'orders' => $paginator->items(),
        'paginator' => $paginator
      ]);
    } else {
      return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Login first');
    }
  }

  public function moveState(string $id)
  {
    $order = $this->orderRepository->findById($id);

    if (!$order) {
      return redirect()->intended('/admin/orders')->with('alert-warning', 'Order not found.');
    }

    $result = $this->orderRepository->updateStatus($order, $order->nextState());

    if ($result)
    {
      return redirect()->intended('/admin/orders')->with('alert-success', 'State moved successfully.');
    }

    return redirect()->intended('/admin/orders')->with('alert-danger', 'Unexpected error happened.');
  }
}
