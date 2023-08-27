@include('layouts._doctype')
@include('layouts._head')

<body>
  <div id="app">
    @include('layouts._navbar')

    <main class="py-4">
      <div class="off_canvars_overlay"></div>
      @if (!str_contains(Route::currentRouteName(), 'admin'))
        @include('layouts._off_canvas')
        @include('layouts._breadcrumbs')
      @endif
      @yield('content')
    </main>
  </div>
</body>

</html>
