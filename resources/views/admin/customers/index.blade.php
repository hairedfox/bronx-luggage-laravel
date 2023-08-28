@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Customers</h1>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#registered-users-tab-pane" type="button"
      role="tab" aria-controls="home-tab-pane" aria-selected="true">Registered Users</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#guests-tab-pane" type="button"
      role="tab" aria-controls="profile-tab-pane" aria-selected="false">Guests</button>
  </li>
</ul>
<div class="tab-content" id="customersTabContent">
  <div class="tab-pane fade show active" id="registered-users-tab-pane" role="tabpanel" aria-labelledby="pills-registered-users-tab">
    @include('admin.customers._users')
    @include('admin.shared._paginator', [
      'route' => 'customers',
      'paginator' => $usersPaginator
    ])
  </div>
  <div class="tab-pane fade" id="guests-tab-pane" role="tabpanel" aria-labelledby="pills-guests-tab">
    @include('admin.customers._guests')
    @include('admin.shared._paginator', [
      'route' => 'customers',
      'paginator' => $guestsPaginator
    ])
  </div>
</div>
@endsection
