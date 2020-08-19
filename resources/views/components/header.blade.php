<header class="bg-primary text-light">

  <nav class="navbar navbar-light">

    <button class="btn btn-primary-outline" type="button" data-toggle="offcanvas">
      <i data-feather="menu" class="text-light"></i> <span class="text-light align-middle">MENU</span>
    </button>

    <span class="flex-grow-1"></span>

    <a class="btn btn-primary-outline" href="{{ route('about') }}"><i data-feather="users" class="text-light"></i></a>
    <a class="btn btn-primary-outline" href="{{ route('contact') }}"><i data-feather="phone-call" class="text-light"></i></a>
    
    @role('admin')
    <a class="btn btn-primary-outline" href="{{ route('admin.home') }}"><i data-feather="settings" class="text-light"></i></a>
    @endrole
    
    @auth
    <a class="btn btn-primary-outline" href="{{ route('logout') }}"><i data-feather="log-out" class="text-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endauth

    <div class="navbar-collapse offcanvas-collapse bg-light shadow">
      <button class="btn btn-primary-outline my-2" type="button" data-toggle="offcanvas">
        <i data-feather="x"></i> <span class="align-middle">MENU</span>
      </button>
      <ul class="navbar-nav p-3">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <div class="dropdown-divider"></div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Route::is('passport.*') ? 'active show' : '' }}" href="#" data-toggle="dropdown">Passport</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent {{ Route::is('passport.*') ? 'active show' : '' }}">
            <a class="dropdown-item {{ Route::is('passport.overview') ? 'active' : '' }}" href="{{ route('passport.overview') }}">Overview</a>
            <a class="dropdown-item {{ Route::is('passport.types') ? 'active' : '' }}" href="{{ route('passport.types') }}">Passport Types</a>
            <a class="dropdown-item {{ Route::is('passport.process') ? 'active' : '' }}" href="{{ route('passport.process') }}">Application Process</a>
            <a class="dropdown-item {{ Route::is('passport.fees') ? 'active' : '' }}" href="{{ route('passport.fees') }}">Fees and Charges</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Route::is('visa.*') ? 'active show' : '' }}" href="#" data-toggle="dropdown">Visa</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent {{ Route::is('visa.*') ? 'active show' : '' }}">
            <a class="dropdown-item {{ Route::is('visa.overview') ? 'active' : '' }}" href="{{ route('visa.overview') }}">Overview</a>
            <a class="dropdown-item {{ Route::is('visa.categories') ? 'active' : '' }}" href="{{ route('visa.categories') }}">Visa Categories</a>
            <a class="dropdown-item {{ Route::is('visa.indians') ? 'active' : '' }}" href="{{ route('visa.indians') }}">Indian Nationals</a>
            <a class="dropdown-item {{ Route::is('visa.fees') ? 'active' : '' }}" href="{{ route('visa.fees') }}">Fees and Charges</a>
            <a class="dropdown-item {{ Route::is('visa.registration') ? 'active' : '' }}" href="{{ route('visa.registration') }}">Police Registration</a>
            <a class="dropdown-item {{ Route::is('visa.extension') ? 'active' : '' }}" href="{{ route('visa.extension') }}">Visa Extension</a>
            <a class="dropdown-item {{ Route::is('visa.overstay') ? 'active' : '' }}" href="{{ route('visa.overstay') }}">Overstay Charges</a>
            <a class="dropdown-item {{ Route::is('visa.abolition') ? 'active' : '' }}" href="{{ route('visa.abolition') }}">Entry Without Visa</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Route::is('immigration.*') ? 'active show' : '' }}" href="#" data-toggle="dropdown">Immigration</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent {{ Route::is('immigration.*') ? 'active show' : '' }}">
            <a class="dropdown-item {{ Route::is('immigration.overview') ? 'active' : '' }}" href="{{ route('immigration.overview') }}">Overview</a>
            <a class="dropdown-item {{ Route::is('immigration.citizenship') ? 'active' : '' }}" href="{{ route('immigration.citizenship') }}">Grant of Citizenship</a>
            <a class="dropdown-item {{ Route::is('immigration.duality') ? 'active' : '' }}" href="{{ route('immigration.duality') }}">Dual Nationality</a>
            <a class="dropdown-item {{ Route::is('immigration.process') ? 'active' : '' }}" href="{{ route('immigration.process') }}">Application Process</a>
            <a class="dropdown-item {{ Route::is('immigration.renunciation') ? 'active' : '' }}" href="{{ route('immigration.renunciation') }}">Renunciation of Citizenship</a>
            <a class="dropdown-item {{ Route::is('immigration.questions') ? 'active' : '' }}" href="{{ route('immigration.questions') }}">Frequently Asked Questions</a>
            <a class="dropdown-item {{ Route::is('immigration.downloads') ? 'active' : '' }}" href="{{ route('immigration.downloads') }}">Downloads</a>
          </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item"><a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About DGI&amp;P</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('offices') ? 'active' : '' }}" href="{{ route('offices') }}">Regional Offices</a>
        <!-- <li class="nav-item"><a class="nav-link {{ Route::is('jobs') ? 'active' : '' }}" href="{{ route('jobs') }}">Jobs Openings</a></li> -->
        <li class="nav-item"><a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
    </div>

  </nav>

  <div class="jumbotron jumbotron-fluid pt-0 pb-4 mb-0 bg-transparent text-light">
    <div class="container">
      <div class="row">
        <div class="col col-lg-8">
          <div class="media">
            <img class="mr-3 d-none d-sm-block align-self-center" src="{{ asset('img/white.svg') }}" height="80" alt="DGI&amp;P">
            <div class="media-body">
              <h3 class="mb-0"><span class="d-block d-md-inline">Directorate General of </span>Immigration &amp; Passports</h3>
              <p class="lead mb-0"><span class="d-none d-sm-inline">Ministry of Interior, </span>Government of Pakistan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>