<?php

namespace App\Models;

class Cart {
  const TAX = 0.08;
  protected $session;
  public $cartItems;
  public function __construct($session)
  {
    $this->session = $session;
    $this->cartItems = $session->get('cart') ? $session->get('cart') : [];
  }

  public function subTotalPrice() {
    $result = array_reduce($this->cartItems, fn($sum, $item) => ($item['price'] * $item['quantity']) + $sum, 0);

    return $result;
  }

  public function totalPrice() {
    $result = $this->subTotalPrice() + Cart::TAX * $this->subTotalPrice();

    return $result;
  }

  public function totalPriceDisplay() {

  }

  public function itemsCount() {
    return count($this->cartItems);
  }
}
