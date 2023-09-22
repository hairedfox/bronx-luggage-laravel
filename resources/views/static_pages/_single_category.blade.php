<article class="single_categories_product column1">
  <figure>
    <div class="product_thumb">
      <a class="primary_img" href="{{route('shop')}}"><img
          src="{{ $backgroundImg }}" alt=""></a>
    </div>
    <div class="categories_product_content">
      <h4><a href="{{route('shop')}}"">{{$title}}</a></h4>
      <ul>
        @foreach($brands as $brand)
          <li>
            <a href="#">
              {{$brand->name}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </figure>
</article>
