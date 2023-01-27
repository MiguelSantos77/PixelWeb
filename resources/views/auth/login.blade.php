
    @guest



    <div class="dropdown-menu">
        <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
            @csrf
            <x-auth-session-status class="mb-4" :status="session('status')" />
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email"name="email" value="{{ old('email')}}" required autofocus>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember_me">
              <label class="form-check-label" for="remember_me">
                Remember me
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>

      </div>

      @endguest
