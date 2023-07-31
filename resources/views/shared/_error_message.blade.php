@if (!$errors->isEmpty())
  <div class="alert alert-danger">
    @foreach($attribute_list as $attribute)
      @error($attribute)
        <li>{{ $message }}</li>
      @enderror
    @endforeach
  </div>
@endif
