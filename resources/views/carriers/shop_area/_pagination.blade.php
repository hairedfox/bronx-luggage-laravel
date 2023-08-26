<div class="shop_toolbar t_bottom">
  <div class="pagination">
    <ul>
      @if ($paginator['last_page'] > 1)
        @for($i = 0; $i < $paginator['last_page']; $i++)
          <li class="{{$paginator['page'] == $i + 1 ? 'current' : ''}}">
            <a href="{{route('shop', ['page' => $i + 1])}}">{{$i + 1}}</a>
          </li>
        @endfor

        @if ($paginator['has_more_page'])
          <li class="next"><a href="{{$paginator['next']}}">next</a></li>
        @endif
      @endif
    </ul>
  </div>
</div>
