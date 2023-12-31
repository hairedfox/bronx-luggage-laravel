<div class="header_middle sticky-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-6">
        <div class="logo">
          <a href="{{ route('root') }}">
            <img style="max-width: 135%" src="{{ Vite::asset('resources/img/logo/logo.svg') }}" alt="Bronx Luggage Logo">
          </a>
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <div class="main_menu menu_position text-right">
          <nav>
            <ul>
              <li><a href="{{ route('root') }}" class="{{ Route::currentRouteName() == 'root' ? 'active' : '' }}">home</li>
              <li><a href="{{ route('shop') }}" class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">shop</i></a></li>
              <li><a href="{{ route('gallery') }}" class="{{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">Gallery</a></li>
              <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"> Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </div>
</div>
