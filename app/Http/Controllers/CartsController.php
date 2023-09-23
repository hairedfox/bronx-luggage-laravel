<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Carrier;

class CartsController extends Basecontroller
{
  public function show(Request $request)
  {
    $cart = new Cart(session());

    if (!$cart) {
      return view('carts.show', ['cart' => []]);
    }

    return view('carts.show', ['cart' => $cart]);
  }

  public function addToCart(Request $request, int $id) {
    $carrier = Carrier::find($id);

    if (!$carrier) {
      abort(404);
    }

    $cart = session()->get('cart');

    if (!$cart) {
      $cart = [
        $id => [
          "name" => $carrier->name,
          "quantity" => 1,
          "price" => $carrier->price,
          "imagePath" => $carrier->firstImage()
        ]
      ];

      session()->put('cart', $cart);

      return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    if (isset($cart[$id])) {
      $cart[$id]['quantity']++;
      session()->put('cart', $cart);

      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    $cart[$id] = [
      "name" => $carrier->name,
      "quantity" => 1,
      "price" => $carrier->price,
      "imagePath" => $carrier->firstImage()
    ];

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');
  }

  public function update(Request $request) {
    if ($request->id and $request->quantity) {
      $cart = session()->get('cart');
      $cart[$request->id]['quantity'] = $request->quantity;
      session()->put('cart', $cart);
      session()->flash('success', 'Cart updated successfully');
    }
  }

  public function remove(Request $request) {
    if ($request->id) {
      $cart = session()->get('cart');

      if(isset($cart[$request->id])) {
        unset($cart[$request->id]);
        session()->put('cart', $cart);
      }

      session()->flash('success', 'Product removed successfully');
    }
  }
}
