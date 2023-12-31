<footer class="footer_widgets">
  <!--newsletter area start-->
  <div class="newsletter_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="newsletter_container">
            <div class="newsletter_content">
              <div class="newsletter_icone">
                <img src="{{ Vite::asset('resources/img/about/newsletter-icon.png') }}" alt="">
              </div>
              <div class="newsletter_text">
                <h3>Sign Up For Newsletters</h3>
                <p>Get E-mail updates about our latest shop and special offers.</p>
              </div>
            </div>
            <div class="subscribe_form">
              <form id="mc-form" class="mc-form footer-newsletter">
                <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address..." />
                <button id="mc-submit">Subscribe</button>
              </form>
              <!-- mailchimp-alerts Start -->
              <div class="mailchimp-alerts text-centre">
                <div class="mailchimp-submitting"></div>
                <div class="mailchimp-success"></div>
                <div class="mailchimp-error"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--newsletter area end-->
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-sm-12">
          <div class="widgets_container contact_us">
            <h3>Contacts us</h3>
            <div class="footer_contact">
              <p><span>Address:</span> Your address goes here..</p>
              <p><span>Phone:</span> <a href="tel:0123456789">0123456789</a></p>
              <p><span>Fax:</span> <a href="tel:0123456789">0123456789</a></p>
              <p><span>Email:</span> <a href="#">demo@example.com</a></p>

            </div>
            <div class="footer_payment">
              <p>Payment Methods:</p>
              <img src="{{ Vite::asset('resources/img/icon/payment.png') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widgets_container widget_menu">
            <h3>Information</h3>
            <div class="footer_menu">
              <ul>
                <li><a href="about.html">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widgets_container widget_menu">
            <h3>My Account</h3>
            <div class="footer_menu">
              <ul>
                <li><a href="{{route('shopping-cart')}}">Shopping Cart</a></li>
                <li><a href="wishlist.html">Wish List</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widgets_container widget_menu">
            <h3>Customer Service</h3>
            <div class="footer_menu">
              <ul>
                <li><a href="{{route('sitemap')}}">Sitemap</a></li>
                <li><a href="#">Delivery Information</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</footer>
