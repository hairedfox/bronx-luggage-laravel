<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Bronx Luggage</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'admin-dashboard' ? 'active' : ''}}" aria-current="page" href="{{route('admin-dashboard')}}">
            <svg class="bi">
              <use xlink:href="#house-fill" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'orders' ? 'active' : ''}}" href="{{route('orders')}}">
            <svg class="bi">
              <use xlink:href="#file-earmark" />
            </svg>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'carriers' ? 'active' : ''}}" href="{{route('admin-carriers')}}">
            <svg class="bi">
              <use xlink:href="#cart" />
            </svg>
            Carriers
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'customers' ? 'active' : ''}}" href="{{route('customers')}}">
            <svg class="bi">
              <use xlink:href="#people" />
            </svg>
            Customers
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'requests' ? 'active' : ''}}" href="{{route('suggestions')}}">
            <svg class="bi">
              <use xlink:href="#graph-up" />
            </svg>
            Requests / Suggestions
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{Route::currentRouteName() == 'admin-media' ? 'active' : ''}}" href="#">
            <svg class="bi">
              <use xlink:href="#puzzle" />
            </svg>
            Media
          </a>
        </li>
      </ul>

      <h6
        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <svg class="bi">
            <use xlink:href="#plus-circle" />
          </svg>
        </a>
      </h6>
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi">
              <use xlink:href="#file-earmark-text" />
            </svg>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi">
              <use xlink:href="#file-earmark-text" />
            </svg>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi">
              <use xlink:href="#file-earmark-text" />
            </svg>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi">
              <use xlink:href="#file-earmark-text" />
            </svg>
            Year-end sale
          </a>
        </li>
      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#" onclick="event.preventDefault();
                                                                 document.getElementById('admin-logout-form').submit();">
            <svg class="bi">
              <use xlink:href="#door-closed" />
            </svg>
            {{ __('Logout') }}
          </a>

          <form id="admin-logout-form" action="{{ route('admin-logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
