<div class="niceselect_option">
  <form class="select_option" action="#">
    <select name="orderby" class="js-carriers-sort" id="short">
      <option {{app('request')->input('sort_by') == 'created_at' ? 'selected' : ''}} value="newness">Sort by newness</option>
      <option {{app('request')->input('sort_by') == 'rating' ? 'selected' : ''}} value="average-rating">Sort by average rating</option>
      <option {{app('request')->input('sort_by') == 'price' && app('request')->input('sort_direction') == 'asc' ? 'selected' : ''}} value="price-low-to-high">Sort by price: low to high</option>
      <option {{app('request')->input('sort_by') == 'price' && app('request')->input('sort_direction') == 'desc' ? 'selected' : ''}} value="price-high-to-low">Sort by price: high to low</option>
      <option {{app('request')->input('sort_by') == 'name' && app('request')->input('sort_direction') == 'asc' ? 'selected' : ''}} value="name-a-z">Product Name: A-Z</option>
      <option {{app('request')->input('sort_by') == 'name' && app('request')->input('sort_direction') == 'desc' ? 'selected' : ''}} value="name-z-a">Product Name: Z-A</option>
    </select>
  </form>
</div>
