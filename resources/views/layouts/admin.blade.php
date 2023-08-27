@include('layouts._doctype')

<head>
  @include('layouts._head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  @vite([
    'resources/css/dashboard.css',
    'resources/js/dashboard.js'
  ])
</head>

<body>
  <div id="app">
    @include('layouts.admin._navbar')
    @include('shared._flash_message')
    <div class="container-fluid">
      <div class="row">
        @include('layouts.admin._sidebar')
        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
    integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
</body>
