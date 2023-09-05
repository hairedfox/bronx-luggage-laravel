<div class="product_area product_style2 mb-15">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="product_header">
          <div class="section_title">
            <h2>Featured Products</h2>

          </div>
          <div class="product_tab_btn">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="active" data-bs-toggle="tab" href="#Luggage" role="tab" aria-controls="Luggage" aria-selected="true" data-bs-target="#Luggage">
                  Luggage
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a data-bs-toggle="tab" href="#Backpacks" role="tab" aria-controls="Backpacks" aria-selected="false" data-bs-target="#Backpacks">
                  Backpacks
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a data-bs-toggle="tab" href="#Bags" role="tab" aria-controls="Bags" aria-selected="false" data-bs-target="#Bags">
                  Bags
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="Luggage" role="tabpanel">
        <div class="row">
          <div class="product_carousel product_style product_column4 owl-carousel">
            @foreach($featuredProducts as $product)
              @include('static_pages.product._single_product', [ 'carrier' => $product ])
            @endforeach
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Backpacks" role="tabpanel">
        <div class="row">
          <div class="product_carousel product_style product_column4 owl-carousel">
            @foreach($featuredProducts as $product)
              @include('static_pages.product._single_product', [ 'carrier' => $product ])
            @endforeach
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Bags" role="tabpanel">
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
