<header class="bg-white shadow-sm">
  <div class="container-fluid">
    <!-- Top Header -->
    <div class="row py-3 align-items-center">

      <!-- Logo -->
      <div class="col-6 col-sm-4 col-lg-3 text-center text-sm-start">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/logo2.png') }}" alt="NightBird Logo" class="img-fluid" style="max-height: 50px;">
        </a>
      </div>

      <!-- Search Bar (Hidden on small screens) -->
      <div class="col-lg-5 d-none d-lg-block">
        <form action="#" method="POST" class="d-flex bg-light rounded-4 p-2">
          @csrf
          <select class="form-select border-0 bg-transparent me-2" style="width: 45%;">
            <option selected>All Categories</option>
            <option>Mens</option>
            <option>Womens</option>
            <option>Kids</option>
          </select>
          <input type="text" class="form-control border-0 bg-transparent" placeholder="Search">
          <button class="btn btn-light px-2" type="submit">
            <svg width="20" height="20" viewBox="0 0 24 24">
              <use xlink:href="#search"></use>
            </svg>
          </button>
        </form>
      </div>

      <!-- Support | Auth | Cart -->
      <div class="col-6 col-sm-8 col-lg-4 d-flex align-items-center justify-content-end gap-3 mt-3 mt-sm-0">

        <!-- Support Info -->
        <div class="d-none d-xl-block text-end">
          <span class="text-muted small">Support?</span>
          <h6 class="mb-0 fw-bold">+91 95318 89591</h6>
        </div>

        <!-- Auth Links -->
         
        <!-- Auth Buttons with Icons -->
        <div class="d-flex align-items-center gap-2 flex-wrap mt-2 mt-lg-0">
          @auth
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
        class="btn btn-outline-dark btn-sm rounded-pill px-3 d-flex align-items-center gap-1">
        <i class="fas fa-user-circle"></i> Dashboard
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button type="submit"
          class="btn btn-outline-danger btn-sm rounded-pill px-3 d-flex align-items-center gap-1">
          <i class="fas fa-sign-out-alt"></i> Logout
        </button>
        </form>
      @else
        <!-- Login -->
        <a href="{{ route('login') }}" class="btn btn-dark btn-sm rounded-pill px-3 d-flex align-items-center gap-1">
        <i class="fas fa-sign-in-alt"></i> Login
        </a>

        <!-- Register -->
        <a href="{{ route('register') }}"
        class="btn btn-outline-dark btn-sm rounded-pill px-3 d-flex align-items-center gap-1">
        <i class="fas fa-user-plus"></i> Register
        </a>
      @endauth
        </div>
        <!-- Cart -->
        <a href="" class="btn btn-light position-relative p-2">
          🛒
          @if(session('cart_count'))
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        {{ session('cart_count') }}
        </span>
      @endif
        </a>
      </div>
    </div>
  </div>
  <!-- Navigation Bar -->
  <div class="bg-light border-top py-2">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" id="offcanvasNavbar">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column flex-lg-row align-items-center w-100">

              <!-- Category Filter -->
              <select class="form-select w-auto me-lg-5 mb-3 mb-lg-0">
                <option selected>Shop by Products</option>
                <option>Mens</option>
                <option>Womens</option>
                <option>Kids</option>
              </select>

              <!-- Menu Items -->
              <ul class="navbar-nav gap-3">
                <li class="nav-item"><a href="#" class="nav-link">Women</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Men</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Accessories</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>