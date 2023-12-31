@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Orders</h1>
</div>

@include('admin.orders._items')
@include('admin.shared._paginator', ['route' => 'orders'])
@endsection
