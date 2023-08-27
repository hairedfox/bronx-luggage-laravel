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
</body>

</html>
