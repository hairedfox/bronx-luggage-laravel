<div class="pagination">
  <ul>
    @if ($paginator->lastPage() > 1)
      @for($i = 0; $i < $paginator->lastPage(); $i++)
        <li class="{{$paginator->currentPage() == $i + 1 ? 'current' : ''}}">
          <a href="{{route($route, ['page' => $i + 1])}}">{{$i + 1}}</a>
        </li>
      @endfor

      @if ($paginator['has_more_page'])
        <li class="next"><a href="{{$paginator->nextPageUrl()}}">next</a></li>
      @endif
    @endif
  </ul>
</div>
