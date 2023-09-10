@extends('layouts.app')
@section('title', 'Shop')
@section('content')
  @include('carriers._shop_banner')
  @include('carriers._shop_area')
  @include('carriers._modal')
@endsection
