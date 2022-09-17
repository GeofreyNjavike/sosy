  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">


          <a href="index.html" class="logo d-flex align-items-center">

              <img class=" w-circle" src='{{ asset('assets/img/logo.png') }}'>

          </a>

          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="{{ url('/') }}" class="active">Home</a></li>
                  <li><a href="{{ url('/') }}#why-us">About</a></li>
                  <li><a href="{{ url('/') }}#services-list">Services</a></li>
                  <li><a href="{{ url('team') }}">Team</a></li>
                  <li><a href="{{ url('contact-us') }}">Contact</a></li>
              </ul>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
