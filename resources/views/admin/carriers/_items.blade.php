<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">For Gender</th>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Release Year</th>
    </tr>
  </thead>
  <tbody>
    @foreach($carriers as $carrier)
    <tr>
      <th scope="row">{{$carrier->id}}</th>
      <td>
        <a href="#">{{$carrier->name}}</a>
      </td>
      <td><img style="width: 150px" src="{{Vite::asset($carrier->carriersImages[0]->media->path)}}"/></td>
      <td>{{$carrier->description}}</td>
      <td>{{$carrier->gender}}</td>
      <td>{{$carrier->brand->name}}</td>
      <td>{{$carrier->type}}</td>
      <td>{{$carrier->price}}</td>
      <td>{{$carrier->release_year}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
