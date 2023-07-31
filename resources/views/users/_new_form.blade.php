<div class="col-lg-6 col-md-6">
  <div class="account_form register">
    <h2>Register</h2>
    <form action="/users" method="POST">
      @csrf
      @include('shared._error_message', ["attribute_list" => App\Models\User::FILLABLE_ATTRIBUTES])
      <div class="row">
        <p class="col-md-6">
          <label for="first_name">First Name <span>*</span></label>
          <input id="first_name" type="text" name="first_name" class="@error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
        </p>
        <p class="col-md-6">
          <label for="last_name">Last Name <span>*</span></label>
          <input id="last_name" type="text" name="last_name" class="@error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
        </p>
      </div>
      <p>
        <label for="email">Email address <span>*</span></label>
        <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
      </p>
      <p>
        <label for="password">Password <span>*</span></label>
        <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror">
      </p>
      <p>
        <label for="password_confirmation">Password Confirmation <span>*</span></label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror">
      </p>
      <div class="login_submit">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>
</div>
