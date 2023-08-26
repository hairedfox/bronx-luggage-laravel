<div class="widget_list widget_categories">
  <h3>Product categories</h3>
  <ul>
    @foreach($categories as $category)
      <li><a href="#">{{$category['name']}}</a></li>
    @endforeach
  </ul>
</div>
