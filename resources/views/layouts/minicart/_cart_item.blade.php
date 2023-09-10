<div class="cart_item">
  <div class="cart_img">
    <a href="#"><img src="{{ Vite::asset($item['imagePath']) }}" alt=""></a>
  </div>
  <div class="cart_info">
    <a href="#">{{$item['name']}}</a>
    <p>Qty: {{$item['quantity']}} X <span> $ {{$item['price']}} </span></p>
  </div>
  <div class="cart_remove">
    <a href="#"><i class="ion-android-close"></i></a>
  </div>
</div>
