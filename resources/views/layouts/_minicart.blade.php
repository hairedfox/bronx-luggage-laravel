<div class="mini_cart_wrapper">
  <a href="javascript:void(0)">
    <span class="cart_icon">
      <i class="ion-android-cart"></i>
    </span>
    <span class="cart_title">
      <span class="cart_quantity">{{ $cart->itemsCount() }} item(s) </span>
      <span class="cart_price">{{ $cart->totalPriceDisplay() }}</span>
    </span>
  </a>

  <!--mini cart-->
  <div class="mini_cart">
    <div class="mini_cart_inner">
      @foreach($cart->cartItems as $id => $item)
        @include('layouts.minicart._cart_item', ['item' => $item, 'id' => $id])
      @endforeach
      <div class="mini_cart_table">
        <div class="cart_total">
          <span>Sub total:</span>
          <span class="price">{{ $cart->subTotalPriceDisplay() }}</span>
        </div>
        <div class="cart_total mt-10">
          <span>total:</span>
          <span class="price">{{ $cart->totalPriceDisplay() }}</span>
        </div>
      </div>
    </div>
    <div class="mini_cart_footer">
      <div class="cart_button">
        <a href="{{route('shopping-cart')}}">View cart</a>
      </div>
      <div class="cart_button">
        <a href="{{route('checkout')}}">Checkout</a>
      </div>

    </div>

  </div>
  <!--mini cart end-->
</div>
