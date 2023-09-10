@include('layouts._doctype')

<head>
  @include('layouts._head')
</head>

<body>
  <div id="app">
    @include('layouts._navbar')

    <main class="py-4">
      <div class="off_canvars_overlay"></div>
      @include('layouts._off_canvas')
      @include('layouts._header', ['cart' => new App\Models\Cart(session())] )
      @include('layouts._breadcrumbs')

      <div class="container mb-5">
        @include('shared._flash_message')
        @yield('content')
      </div>

      @include('layouts._footer')
    </main>
  </div>

  <script type="text/javascript">
    const commonConfig = {
      autoplay: true,
      loop: true,
      nav: true,
      autoplay: false,
      autoplayTimeout: 8000,
      navElement: 'div',
      navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
    }

    jQuery(document).ready(function() {
      jQuery('.slider_area.owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        ...commonConfig,
        items: 1,
        dots: true,
      })

      jQuery('.product_column4.owl-carousel').owlCarousel({
        ...commonConfig,
        items: 4,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 3,
          },
          992: {
            items: 3,
          },
          1200: {
            items: 4,
          },

        }
      })

      jQuery('.product_column3.owl-carousel').owlCarousel({
        ...commonConfig,
        items: 3,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 2,
          },
          1200: {
            items: 3,
          },
        }
      })

      jQuery('.product_column2.owl-carousel').owlCarousel({
        ...commonConfig,
        items: 2,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          992: {
            items: 2,
          },
        }
      })

      jQuery('.product_column1.owl-carousel').owlCarousel({
        ...commonConfig,
        items: 1,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 1,
          },
        }
      })

      $(window).on('load', function () {
        dataBackgroundImage();
      });
    })

    function dataBackgroundImage() {
      $('[data-bgimg]').each(function () {
        var bgImgUrl = $(this).data('bgimg');
        $(this).css({
          'background-image': 'url(' + bgImgUrl + ')', // + meaning concat
        });
      });
    }
  </script>

  @yield('scripts')
</body>

</html>
