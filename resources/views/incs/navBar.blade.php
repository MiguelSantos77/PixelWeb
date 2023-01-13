<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">WebPixel</a>
          </li>

        @if(Route::has('login'))

            @auth

            <li class="nav-item">
                <a class="btn btn-primary" href="{{ url('/dashboard') }}">Dasboard</a>
              </li>

              <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('profile.edit') }}">Conta</a>
              </li>

              <li class="nav-item">
                <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
              </li>
            @else


            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
              </li>


            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
              </li>



            @endauth
        @endif




      </div>
    </div>
  </nav>



  {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
