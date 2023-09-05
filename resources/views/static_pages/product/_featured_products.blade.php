<div class="product_area product_style2 mb-15">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="product_header">
          <div class="section_title">
            <h2>Featured Products</h2>

          </div>
          <div class="product_tab_btn">
            <ul class="nav" role="tablist">
              <li>
                <a class="active" data-bs-toggle="tab" href="#featured-luggage" role="tab"
                  aria-controls="featured-luggage" aria-selected="true">
                  Luggage
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#featured-backpacks" role="tab" aria-controls="featured-backpacks"
                  aria-selected="false">
                  Backpacks
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" href="#featured-bags" role="tab" aria-controls="featured-bags"
                  aria-selected="false">
                  Bags
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="featured-luggage" role="tabpanel">
        <div class="row">
          <div class="product_carousel product_style product_column4 owl-carousel">
            @foreach($featuredProducts as $product)
              @include('static_pages.product._single_product', [ 'carrier' => $product ])
            @endforeach
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="featured-backpacks" role="tabpanel">
        <div class="row">
          <div class="product_carousel product_style product_column4 owl-carousel">
            @foreach($featuredProducts as $product)
              @include('static_pages.product._single_product', [ 'carrier' => $product ])
            @endforeach
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="featured-bags" role="tabpanel">
        <div class="row">
          <div class="product_carousel product_style product_column4 owl-carousel">
            @foreach($featuredProducts as $product)
              @include('static_pages.product._single_product', [ 'carrier' => $product ])
            @endforeach
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
