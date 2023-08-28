<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Added at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($guests as $guest)
      <tr>
        <td>{{$guest->id}}</td>
        <td>{{$guest->first_name}}</td>
        <td>{{$guest->last_name}}</td>
        <td>{{$guest->email}}</td>
        <td>{{$guest->phone_number}}</td>
        <td>{{$guest->created_at}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
