<div class="col-lg-3">
  <article class="single_product">
    <figure>
      <div class="product_name">
        <h4><a href="product-details.html">{{ $carrier->name }}</a></h4>
      </div>
      <div class="product_rating">
        <ul>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
        </ul>
      </div>

      <div class="product_thumb">
        <a class="primary_img" href="product-details.html"><img
            src="{{ Vite::asset($carrier->firstImage()) }}" alt=""></a>
        <div class="label_product">
          <span class="label_sale">Sale!</span>
        </div>
      </div>
      <div class="product_footer">
        <div class="price_box">
          <span class="old_price">$80.00</span>
          <span class="current_price">{{$carrier->price}}</span>
        </div>
        <div class="action_links">
          <ul>
            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                  class="ion-android-favorite-outline"></i></a></li>

            <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
          </ul>
        </div>
      </div>
    </figure>
  </article>
</div>
