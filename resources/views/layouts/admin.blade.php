@include('layouts._doctype')
@include('layouts._head')

<body>
  <div id="app">
    <main class="d-flex flex-nowrap">
      @include('layouts.admin._sidebar')
      <div class="container mb-5">
        @include('shared._flash_message')
        @yield('content')
      </div>
    </main>
  </div>
</body>
