<div class="categories_product_area mb-50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section_title">
          <h2>Hot Brands</h2>
        </div>
      </div>
    </div>
    <div class="row categories_margin no-gutters">
      <div class="col-lg-3 col-md-6">
        @include('static_pages._single_category', [
          'backgroundImg' => Vite::asset('resources/img/custom-p/product1.jpg'),
          'title' => 'Luggage',
          'brands' => App\Models\Brand::where(['type' => 'luggage'])->get()
        ])
      </div>
      <div class="col-lg-3 col-md-6">
        @include('static_pages._single_category', [
          'backgroundImg' => Vite::asset('resources/img/custom-p/product2.jpg'),
          'title' => 'Backpacks',
          'brands' => App\Models\Brand::where(['type' => 'backpack'])->get()
        ])
      </div>
      <div class="col-lg-3 col-md-6">
        @include('static_pages._single_category', [
          'backgroundImg' => Vite::asset('resources/img/custom-p/product3.jpg'),
          'title' => 'Bags',
          'brands' => App\Models\Brand::where(['type' => 'bag'])->get()
        ])
      </div>
      <div class="col-lg-3 col-md-6">
        @include('static_pages._single_category', [
          'backgroundImg' => Vite::asset('resources/img/custom-p/product4.jpg'),
          'title' => 'Other',
          'brands' => App\Models\Brand::where(['type' => 'other'])->get()
        ])
      </div>
    </div>
  </div>
</div>
