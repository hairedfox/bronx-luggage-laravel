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
      @include('layouts._header')
      @include('layouts._breadcrumbs')

      <div class="container mb-5">
        @include('shared._flash_message')
        @yield('content')
      </div>

      @include('layouts._footer')
    </main>
  </div>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('.owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        autoplay: true,
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 8000,
        items: 1,
        dots: true,
        navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
        navElement: 'div'
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
</body>

</html>
