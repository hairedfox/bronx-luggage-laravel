@extends('layouts.app')
@section('content')
  <div class="customer_register mt-45">
    <div class="container">
      <div class="row justify-content-around">
        @include('users._new_form')
      </div>
    </div>
  </div>
@endsection
