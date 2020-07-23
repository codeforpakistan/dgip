<footer class="py-5 bg-secondary">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-6 col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-light mb-3">
          <img class="card-img-top" src="{{ asset('img/sms.jpg') }}">
          <div class="card-body">
            <h5 class="card-title">SMS Tracking</h5>
            <p class="card-text">SMS 11-digit token to <a class="stretched-link" href="sms://9988">9988</a></p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-light mb-3">
          <img class="card-img-top" src="{{ asset('img/helpline.jpg') }}">
          <div class="card-body">
            <h5 class="card-title">Help Line</h5>
            <p class="card-text">Dial <a class="stretched-link" href="tel:+9251111344777">+92 (51) 111-344-777</a></p>
          </div>
        </div>
      </div>

      <!-- Online Complaints -->
      <div class="col-12 col-sm-6 col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-light mb-3">
          <a class="stretched-link" href="http://complaint.dgip.gov.pk" target="_blank"><img class="card-img-top" src="{{ asset('img/complaint.jpg') }}"></a>
          <div class="card-body">
            <h5 class="card-title">Online Complaints</h5>
            <p class="card-text">Launch &amp; track complaints</p>
          </div>
        </div>
      </div>

      <!-- Online Tracking -->
      <div class="col-12 col-sm-6 col-md-3 mb-3">
        <div class="card border-0 shadow-sm bg-light mb-3">
          <a class="stretched-link" href="http://tracking.dgip.gov.pk" target="_blank"><img class="card-img-top" src="{{ asset('img/tracking.jpg') }}"></a>
          <div class="card-body">
            <h5 class="card-title">Online Tracking</h5>
            <p class="card-text">Track your application online</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<footer class="bg-dark text-light pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-3">
        <h4>Passport</h4>
        <nav class="nav flex-column">
          <a class="nav-link px-0 text-light" href="{{ route('passport.overview') }}">Overview</a>
          <a class="nav-link px-0 text-light" href="{{ route('passport.types') }}">Passport types</a>
          <a class="nav-link px-0 text-light" href="{{ route('passport.process') }}">Application process</a>
          <a class="nav-link px-0 text-light" href="{{ route('passport.fees') }}">Fees and charges</a>
          <a class="nav-link px-0 text-light" href="{{ route('passport.offices') }}">Regional offices</a>
          <a class="nav-link px-0 text-light" href="{{ route('passport.branches') }}">Bank branches</a>
        </nav>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <h5>Visa</h5>
        <nav class="nav flex-column">
          <a class="nav-link px-0 text-light" href="{{ route('visa.overview') }}">Overview</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.categories') }}">Visa categories</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.indians') }}">Indian nationals</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.fees') }}">Application fee</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.fees') }}">Extending your stay</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.fees') }}">Overstay charges</a>
          <a class="nav-link px-0 text-light" href="{{ route('visa.fees') }}">Police registration</a>
        </nav>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <h4>Immigration</h4>
        <nav class="nav flex-column">
          <a class="nav-link px-0 text-light" href="{{ route('immigration.overview') }}">Overview</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.citizenship') }}">Grant of Citizenship</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.duality') }}">Dual Nationality</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.process') }}">Application Process</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.renunciation') }}">Renunciation of Citizenship</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.guidelines') }}">Immigration Guidelines</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.questions') }}">Frequently Asked Questions</a>
          <a class="nav-link px-0 text-light" href="{{ route('immigration.downloads') }}">Downloads</a>
        </nav>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <h4>Other Links</h4>
        <nav class="nav flex-column">
          <a class="nav-link px-0 text-light small" href="http://www.pakistan.gov.pk" target="_blank">About Pakistan</a>
          <a class="nav-link px-0 text-light small" href="http://www.interior.gov.pk/" target="_blank">Ministry of Interior</a>
          <a class="nav-link px-0 text-light small" href="http://www.mofa.gov.pk/" target="_blank">Ministry of Foreign Affairs</a>
          <a class="nav-link px-0 text-light small" href="http://www.tourism.gov.pk/Index.aspx" target="_blank">Ministry of Tourism</a>
          <a class="nav-link px-0 text-light small" href="http://www.piac.com.pk/" target="_blank">Pakistan International Airlines</a>
          <a class="nav-link px-0 text-light small" href="http://www.opf.org.pk/home/home.aspx" target="_blank">Ministry of Overseas Pakistanis</a>
          <a class="nav-link px-0 text-light small" href="http://www.mofa.gov.pk/Blue_Book/BLUE_BOOK.htm" target="_blank">Foreign Missions in Pakistan</a>
          <a class="nav-link px-0 text-light small" href="http://www.nbp.com.pk/" target="_blank">National Bank of Pakistan</a>
          <a class="nav-link px-0 text-light small" href="http://www.nadra.gov.pk/" target="_blank">National Database &amp; Registration Authority</a>
        </nav>
      </div>
    </div>
    <div class="row mb-0 mt-3 pt-3 pb-5">
      <div class="col-md-9 d-flex flex-column pt-3">
        <p>
          <a class="text-light mr-3" href="{{ route('about') }}">About DGI&amp;P</a>
          <a class="text-light mr-3" href="{{ route('jobs') }}">Job Openings</a>
          <a class="text-light mr-3" href="{{ route('contact') }}">Contact</a> </p>
        <p>Copyright &copy; 2020 Directorate General of Immigration &amp; Passports, Ministry of Interior, Government of Pakistan.</p>
      </div>
      <div class="col-md-3 d-none d-md-block">
        <img class="float-right" src="{{ asset('img/grey.svg') }}" height="100">
      </div>
    </div>
  </div>
</footer>