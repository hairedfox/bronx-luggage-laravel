<div class="col-lg-6 col-md-6">
  <div class="account_form login">
    <h2>login</h2>
    <form action="/admin/login" method='POST'>
      @csrf
      @error('auth')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <p>
        <label>Email <span>*</span></label>
        <input id="email" type="email" name="email" class="@error('auth') is-invalid @enderror">
      </p>
      <p>
        <label>Passwords <span>*</span></label>
        <input type="password" name="password">
      </p>
      <div class="login_submit">
        <a href="#">Lost your password?</a>
        <label for="remember">
          <input id="remember" type="checkbox" name="remember">
          Remember me
        </label>
        <button type="submit">login</button>
      </div>
    </form>
  </div>
</div>
