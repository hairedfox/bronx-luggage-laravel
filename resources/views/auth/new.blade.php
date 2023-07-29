@extends('layouts.login')

@section('content')
<div class="customer_login mt-45">
  <div class="container">
    <div class="row justify-content-around">
      @include('auth._form')
    </div>
  </div>
</div>
@endsection
