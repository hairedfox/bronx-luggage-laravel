<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Guest;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class OrdersController extends BaseController {
  protected $orderRepository;
  protected $orderDetailRepository;

  public function __construct(OrderRepository $orderRepository, OrderDetailRepository $orderDetailRepository)
  {
    $this->orderRepository = $orderRepository;
    $this->orderDetailRepository = $orderDetailRepository;
  }

  public function checkout(Request $request) {
    $cart = new Cart(session());

    if (count($cart->cartItems) > 0) {
      return view('orders.checkout',
      [
        'cart' => $cart
      ]);
    }

    return redirect()->intended('/shop')->with('alert-info', 'Please choose something first!');
  }

  public function placeOrder(Request $request) {
    // { items: [{ item_id: 1, quantity: 1 }, { item_id: 2, quantity: 2 }, totalPrice: 1000 ]
    // create Order totalPrice = params['totalPrice']
    $items = session()->get('cart');
    $cart = new Cart(session());
    $input = $request->all();

    if (auth()->check()) {
      $orderableId = auth()->user()->id;
      $orderableType = 'User';
    } else {
      $guest = Guest::query()->where('email', $input['email'])->firstOrCreate(
        [
          'email' => $input['email'],
          'phone_number' => $input['phone'],
          'first_name' => $input['first_name'],
          'last_name' => $input['last_name']
        ]
      );
      $orderableId = $guest->id;
      $orderableType = 'Guest';
    }

    if ($cart->itemsCount() > 0) {
      $order = $this->orderRepository->create([
        'orderable_id' => $orderableId,
        'orderable_type' => $orderableType,
        'total_price' => $cart->totalPrice(),
        'status' => 'paid'
      ]);

      foreach($cart->cartItems as $id => $item) {
        $this->orderDetailRepository->create([
          'order_id' => $order->id,
          'carrier_id' => $id,
          'price' => $item['price'],
          'quantity' => $item['quantity']
        ]);
      }

      return redirect()->intended('/thank-you');
    } else {
      return redirect()->intended('/')->with('alert-danger', 'Your cart is empty!');
    }
  }

  public function thank() {
    return view('orders.thank');
  }
}
