<article class="recent_product_list">
  <figure>
    <div class="product_thumb">
      <a href="product-details.html"><img src="{{Vite::asset($carrier->carriersImages[0]->media->path)}}" alt=""></a>
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
        <span class="old_price">$70.00</span>
        <span class="current_price">{{$carrier->price}}</span>
      </div>
    </div>
  </figure>
</article>
