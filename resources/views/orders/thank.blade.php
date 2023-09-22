@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
  <h1>Thank you!</h1>
  <div class="container text-center">
    <p>Your order is being shipped to you. It'll take between 1-3 business day for the product to get to you.</p>
    <p>
      We'll try our best to make it quick for you. And have a nice day!
    </p>

    <a class="btn btn-primary" href="{{route('shop')}}">Shop More!</a>
  </div>
@endsection
