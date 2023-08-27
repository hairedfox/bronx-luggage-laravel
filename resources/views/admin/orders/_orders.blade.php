<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order By</th>
      <th scope="col">Type</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->orderable->fullname()}}</td>
      <td>{{class_basename($order->orderable->getModel())}}</td>
      <td>{{$order->total_price}}</td>
      <td>{{$order->status}}</td>
      <td>
        @if (!$order->isDone())
          <button class="btn btn-success">Move to {{$order->nextState()}}</button>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
