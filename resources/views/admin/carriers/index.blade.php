@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-start align-items-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 mx-3">Carriers</h1>
  <a class="btn btn-primary" href="{{route('admin-carriers-new')}}">New</a>
</div>

@include('admin.carriers._items')

@include('admin.shared._paginator', ['route' => 'admin-carriers'])
@endsection
