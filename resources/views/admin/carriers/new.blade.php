@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add New Carrier</h1>
</div>

<div class="card">
  <div class="card-body">
    <div class="card-text">
      <div class="container">
        @include('admin.shared._validation_error', ['errors' => $errors])
        <form action="/admin/carriers" method="POST" class="g-3">
          @csrf
          <div class="form-group mb-2">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" name="name" class="form-control">
          </div>
          <div class="form-group mb-2">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
          </div>

          <div class="form-group mb-2">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-select">
              <option value="bags">Bags</option>
              <option value="luggage">Luggage</option>
              <option value="backpacks">Backpacks</option>
            </select>
          </div>

          <div class="form-group mb-2">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="unisex">Unisex</option>
            </select>
          </div>

          <div class="form-group mb-2">
            <label for="brand_id" class="form-label">Brand</label>
            <select name="brand_id" id="brand_id" class="form-select">
              @foreach($brands as $brand)
              <option value="{{$brand['id']}}">{{$brand['name']}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group mb-2">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control">
          </div>

          <div class="form-group mb-2">
            <label for="release_year" class="form-label">Release Year</label>
            <select name="release_year" id="release_year" class="form-select">
              @foreach(array_reverse(range(1995, intval(date('Y')))) as $year)
              <option value="{{$year}}">{{$year}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group mb-2">
            <label for="featured" class="form-label">Featured?</label>
            <input type="checkbox" name="featured" id="featured">
          </div>

          <div class="form-group mb-2">
            <input class="btn btn-primary" type="submit" value="Create">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
