@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
  <hr>
  <div class="row">
    <div class="col-md-6 border-end">
      <fieldset class="text-center">
        <legend><u>Express checkout</u></legend>
        <img src="https://support.pixelunion.net/hc/article_attachments/360060934313/Additional_checkout_buttons_on_the_cart_page.png" alt="express checkout" style="cursor: pointer">
      </fieldset>

      <p class="text-center mb-5">
        <em>————————OR CONTINUE BELOW TO PAY WITH A CREDIT CARD————————</em>
      </p>

      <h3 class="mb-3">Shipping Address</h3>
      <form action="/place-order" method="POST">
        @csrf
        <div class="row mt-2">
          <div class="form-group col-md-6">
            <input class="form-control" type="text" name="first_name" placeholder="First name" required>
          </div>
          <div class="form-group col-md-6">
            <input class="form-control" type="text" name="last_name" placeholder="Last name" required>
          </div>
        </div>

        <div class="form-group mt-2">
          <input type="number" placeholder="Phone" name="phone" class="form-control" required>
        </div>

        <div class="form-group mt-2">
          <input type="email" placeholder="Email..." name="email" class="form-control" required>
        </div>

        <div class="form-group mt-2">
          <input class="form-control" type="text" name="address" placeholder="Address (optional)">
        </div>

        <div class="form-group mt-2">
          <input type="text" class="form-control" name="address2" placeholder="Apartment, suite, etc. (optional)">
        </div>

        <div class="form-group mt-2">
          <input type="text" class="form-control" name="city" placeholder="City (optional)">
        </div>

        <div class="row mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <select name="country" id="country" class="form-select">
                <option selected value="VN">Vietnam</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="JP">Japan</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <select name="state" id="state" class="form-select">
              <option selected value="NTL">Nam Tu Liem</option>
              <option value="BD">Ba Dinh</option>
              <option value="TX">Thanh Xuan</option>
              <option value="CG">Cau Giay</option>
              <option value="HBT">Hai Ba Trung</option>
            </select>
          </div>

          <div class="col-md-4">
            <input type="text" name="zip" placeholder="ZIP code" class="form-control">
          </div>
        </div>

        <div class="form-group mt-3 text-end">
          <button class="btn btn-lg btn-primary order-btn">PLACE ORDER</button>
        </div>
      </form>
    </div>

    <div class="col-md-6" style="max-height: 700px; overflow: scroll">
      @foreach($cart->cartItems as $id => $item)
        <div class="d-flex border-bottom">
          <img src="{{Vite::asset($item['imagePath'])}}" alt="" style="width: 120px">
          <div class="item--info pt-3">
            <div><strong>{{ $item['name'] }}</strong></div>
            <div>Qty: {{$item['quantity']}} x <strong>${{number_format($item['price'], 2)}}</strong></div>
          </div>
        </div>
      @endforeach

      <h3 class="mt-3">Total <span style="font-size: .5em">(+8% VAT)</span>: <span>{{ $cart->totalPriceDisplay() }}</span></h3>
    </div>
  </div>
@endsection
