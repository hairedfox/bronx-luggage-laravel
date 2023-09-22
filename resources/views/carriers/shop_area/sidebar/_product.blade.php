<article class="recent_product_list">
  <figure>
    <div class="product_thumb">
      <a href="product-details.html"><img src="{{Vite::asset($carrier->firstImage())}}" alt=""></a>
    </div>
    <div class="product_content">
      <h4><a href="product-details.html">{{$carrier->name}}</a></h4>
      <div class="product_rating">
        <ul>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="price_box">
        <span class="current_price">{{$carrier->priceInUsd()}}</span>
      </div>
    </div>
  </figure>
</article>
