import './bootstrap';
import '../css/plugins.css';
import '../css/style.css';
import.meta.glob([
  '../img/**',
  '../fonts/**',
]);
import * as bootstrap from 'bootstrap';
import $ from 'jquery';

window.$ = $;

$(document).on('change', '.js-carriers-sort', (e) => {
  e.preventDefault()
  const sortOption = $(e.target).val()

  let search = location.search.substring(1);
  let searchObject = JSON.parse('{"' + search.replace(/&/g, '","').replace(/=/g,'":"') + '"}', function(key, value) { return key===""?value:decodeURIComponent(value) })

  switch (sortOption) {
    case 'newness':
      searchObject['sort_by'] = 'created_at'
      searchObject['sort_direction'] = 'desc'
      break
    case 'price-low-to-high':
      searchObject['sort_by'] = 'price'
      searchObject['sort_direction'] = 'asc'
      break
    case 'price-high-to-low':
      searchObject['sort_by'] = 'price'
      searchObject['sort_direction'] = 'desc'
      break
    case 'name-a-z':
      searchObject['sort_by'] = 'name'
      searchObject['sort_direction'] = 'asc'
      break
    case 'name-z-a':
      searchObject['sort_by'] = 'name'
      searchObject['sort_direction'] = 'desc'
      break
    case 'average-rating':
      searchObject['sort_by'] = 'rating'
      searchObject['sort_direction'] = 'desc'
      break
    default:
      searchObject['sort_by'] = 'created_at'
      searchObject['sort_direction'] = 'desc'
  }

  location.href = location.origin + location.pathname + "?" + $.param(searchObject)
})
