<div class="row shop_wrapper grid_list">
  @foreach($carriers as $carrier)
    @include('carriers.shop_area._product', ['carrier' => $carrier])
  @endforeach
</div>
