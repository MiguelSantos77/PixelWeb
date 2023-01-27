


@include('incs.navBar')

@guest



<div class="dropdown-menu">
    <form class="px-4 py-3" method="POST" action="{{ route('register') }}">
        @csrf


        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
          </div>




          <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email"name="email" value="{{ old('email')}}" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>



      <div class="mb-3">
        <label for="password_confirmation" class="form-label">password_confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>



      <button type="submit" class="btn btn-primary">Register</button>
    </form>

  </div>

  @endguest
