@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Carriers</h1>
</div>

@include('admin.carriers._carriers')

<div class="pagination">
  <ul>
    @if ($paginator['last_page'] > 1)
    @for($i = 0; $i < $paginator['last_page']; $i++) <li class="{{$paginator['page'] == $i + 1 ? 'current' : ''}}">
      <a href="{{route('admin-carriers', ['page' => $i + 1])}}">{{$i + 1}}</a>
      </li>
      @endfor

      @if ($paginator['has_more_page'])
      <li class="next"><a href="{{$paginator['next']}}">next</a></li>
      @endif
      @endif
  </ul>
</div>
@endsection
