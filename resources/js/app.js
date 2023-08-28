import './bootstrap';
import '../css/plugins.css';
import '../css/style.css';
import.meta.glob([
  '../img/**',
  '../fonts/**',
]);
import * as bootstrap from 'bootstrap';

const triggerTabList = document.querySelectorAll('#pills-tab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    const url = new URL(location.href)
    url.searchParams.set('page', 1)
    tabTrigger.show()
  })
})
