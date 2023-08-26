<div class="widget_list">
  <h3>Compare Products</h3>
  <div class="recent_product_container">
    @foreach($compare_carriers as $carrier)
      @include('carriers.shop_area.sidebar._product', [
          'carrier' => $carrier
      ])
    @endforeach
  </div>
</div>
