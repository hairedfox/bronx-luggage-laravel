@extends('layouts.app')
@section('title', 'Cart')
@section('content')
<table id="cart" class="table table-hover table-condensed">
  <thead>
    <tr>
      <th style="width:50%">Product</th>
      <th style="width:10%">Price</th>
      <th style="width:8%">Quantity</th>
      <th style="width:22%" class="text-center">Subtotal</th>
      <th style="width:10%"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($cart->cartItems as $id => $details)
    <tr>
      <td data-th="Product">
        <div class="row">
          <div class="col-sm-3 hidden-xs"><img src="{{ Vite::asset($details['imagePath']) }}" width="100" height="100"
              class="img-responsive" /></div>
          <div class="col-sm-9">
            <h4 class="nomargin">{{ $details['name'] }}</h4>
          </div>
        </div>
      </td>
      <td data-th="Price">${{ number_format($details['price'], 2) }}</td>
      <td data-th="Quantity">
        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
      </td>
      <td data-th="Subtotal" class="text-center">${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
      <td class="actions" data-th="">
        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i
            class="fa fa-trash-o"></i></button>
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
      <td colspan="2" class="hidden-xs"></td>
      <td class="hidden-xs text-center"><strong>Total {{ $cart->totalPriceDisplay() }}</strong></td>
    </tr>
  </tfoot>
</table>
@endsection
