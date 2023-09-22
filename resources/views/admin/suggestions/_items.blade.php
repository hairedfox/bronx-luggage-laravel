<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Request</th>
      <th scope="col">Request by</th>
      <th scope="col">Source</th>
    </tr>
  </thead>
  <tbody>
    @foreach($suggestions as $suggestion)
    <tr>
      <th scope="row">{{$suggestion->id}}</th>
      <td>{{$suggestion->request}}</td>
      <td>{{$suggestion->suggestable->fullname()}}</td>
      <td>{{class_basename($suggestion->suggestable->getModel())}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
