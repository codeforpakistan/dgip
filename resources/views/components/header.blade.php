<header class="bg-primary text-light">

  <nav class="navbar navbar-light">

    <button class="btn btn-primary-outline" type="button" data-toggle="offcanvas">
      <i data-feather="menu" class="text-light"></i> <span class="align-middle text-light">MENU</span>
    </button>

    <button class="btn btn-primary-outline" type="button"><i data-feather="search" class="text-light"></i></button>

    <div class="navbar-collapse offcanvas-collapse bg-light shadow">
      <button class="btn btn-primary-outline my-2" type="button" data-toggle="offcanvas">
        <i data-feather="x"></i> <span class="align-middle">MENU</span>
      </button>
      <ul class="navbar-nav p-3">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <div class="dropdown-divider"></div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Passport</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent">
            <a class="dropdown-item" href="{{ route('passport.overview') }}">Overview</a>
            <a class="dropdown-item" href="{{ route('passport.types') }}">Passport Types</a>
            <a class="dropdown-item" href="{{ route('passport.process') }}">Application Process</a>
            <a class="dropdown-item" href="{{ route('passport.offices') }}">Regional Offices</a>
            <a class="dropdown-item" href="{{ route('passport.zones') }}">RPO Zones</a>
            <a class="dropdown-item" href="{{ route('passport.branches') }}">Bank Branches</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Visa</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent">
            <a class="dropdown-item" href="{{ route('visa.overview') }}">Overview</a>
            <a class="dropdown-item" href="{{ route('visa.categories') }}">Visa Categories</a>
            <a class="dropdown-item" href="{{ route('visa.indians') }}">Indian Nationals</a>
            <a class="dropdown-item" href="{{ route('visa.fee') }}">Application Fee</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Immgration</a>
          <div class="dropdown-menu pt-0 border-0 bg-transparent">
            <a class="dropdown-item" href="{{ route('immigration.overview') }}">Overview</a>
            <a class="dropdown-item" href="{{ route('immigration.citizenship') }}">Grant of Citizenship</a>
            <a class="dropdown-item" href="{{ route('immigration.duality') }}">Dual Nationality</a>
            <a class="dropdown-item" href="{{ route('immigration.process') }}">Application Process</a>
            <a class="dropdown-item" href="{{ route('immigration.renunciation') }}">Renunciation of Citizenship</a>
            <a class="dropdown-item" href="{{ route('immigration.guidelines') }}">Immigration Guidelines</a>
            <a class="dropdown-item" href="{{ route('immigration.questions') }}">Frequently Asked Questions</a>
            <a class="dropdown-item" href="{{ route('immigration.downloads') }}">Downloads</a>
          </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About DGI&amp;P</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('jobs') }}">Jobs Openings</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
    </div>

  </nav>

  <div class="jumbotron jumbotron-fluid pt-0 bg-transparent text-light">
    <div class="container">
      <div class="row">
        <div class="col col-lg-8">
          <div class="media">
            <img class="mr-3" src="{{ asset('img/white.svg') }}" height="80" alt="DGI&amp;P">
            <div class="media-body">
              <h3 class="mt-0"><span class="d-block d-md-inline">Directorate General of </span>Immigration &amp; Passports</h3>
              <p class="lead"><span class="d-none d-sm-inline">Ministry of Interior, </span>Government of Pakistan</p>
              <p class="small">The Office of DG(I&P) is an attached department of Ministry of Interior, responsible for issuance of Passports, Visas, Pakistan Citizenship and Renunciation of Pakistan Citizenship Certificates.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</header>