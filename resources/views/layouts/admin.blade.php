@include('layouts._doctype')
@include('layouts._head')

<body>
  <div id="app">
    <h1>Admin</h1>

    <div class="container mb-5">
      @include('shared._flash_message')
      @yield('content')
    </div>
  </div>
</body>
