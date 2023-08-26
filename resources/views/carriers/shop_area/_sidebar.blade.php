<aside class="sidebar_widget">
  <div class="widget_list widget_categories">
    <h3>Product categories</h3>
    <ul>
      @foreach($categories as $category)
        <li><a href="#">{{$category['name']}}</a></li>
      @endforeach
    </ul>
  </div>
  <div class="widget_list widget_filter">
    <h3>Filter by price</h3>
    <form action="#">
      <div id="slider-range"></div>
      <button type="submit">Filter</button>
      <input type="text" name="text" id="amount" />

    </form>
  </div>
  <div class="widget_list">
    <h3>Compare Products</h3>
    <div class="recent_product_container">
      @foreach($compare_carriers as $carrier)
        @include('carriers.shop_area._compare_product', [
            'carrier' => $carrier
        ])
      @endforeach
    </div>
  </div>

  <!--banner area start-->
  <div class="widget_list banner_area">
    <div class="banner_thumb">
      <a href="shop.html"><img src="assets/img/bg/banner15.jpg" alt=""></a>
    </div>
  </div>
  <!--banner area end-->
  <div class="widget_list tags_widget">
    <h3>Product tags</h3>
    <div class="tag_cloud">
      @foreach($carrier_types as $type)
        <a href="#">{{$type}}</a>
      @endforeach
    </div>
  </div>
</aside>
