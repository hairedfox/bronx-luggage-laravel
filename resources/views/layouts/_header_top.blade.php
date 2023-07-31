<div class="header_top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-4">
        <div class="header_account">
          <ul>
            <li class="language"><a href="#">Language : ENG <i class="ion-chevron-down"></i></a>
              <ul class="dropdown_language">
                <li><a href="#">English</a></li>
                <li><a href="#">Germany</a></li>
                <li><a href="#">Japanese</a></li>
              </ul>
            </li>
            <li class="currency"><a href="#">Currency : USD <i class="ion-chevron-down"></i></a>
              <ul class="dropdown_currency">
                <li><a href="#">EUR – Euro</a></li>
                <li><a href="#">GBP – British Pound</a></li>
                <li><a href="#">INR – India Rupee</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8 col-md-9">
        <div class="top_right text-right">
          <div class="header_support">
            <p><i class="icon ion-android-alarm-clock"></i> Ordered before 17:30, shipped today - Support: <a
                href="tel:+0123456789">0123456789</a></p>
          </div>
          <div class="header_account">
            <ul>
              <li class="wishlist"><a href="wishlist.html"><i class="icon ion-clipboard"></i> Wishlist </a></li>
              <li class="top_links"><a href="#"><i class="ion-gear-a"></i> Setting <i class="ion-chevron-down"></i></a>
                <ul class="dropdown_links">
                  <li><a href="checkout.html">Checkout </a></li>
                  <li><a href="my-account.html">My Account </a></li>
                  <li><a href="cart.html">Shopping Cart</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  @auth
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  @endif
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
