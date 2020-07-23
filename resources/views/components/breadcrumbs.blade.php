<div class="breadcrumbs bg-info text-light py-2">
  <div class="container">
    <a class="text-light" href="{{ route('home') }}">Home</a>
    <i class="feather-16" data-feather="chevron-right"></i>
    @if (Route::is('passport.*'))
    <a class="text-light" href="{{ route('passport.overview') }}">Passport</a>
    @elseif (Route::is('visa.*'))
    <a class="text-light" href="{{ route('visa.overview') }}">Visa</a>
    @elseif (Route::is('immigration.*'))
    <a class="text-light" href="{{ route('immigration.overview') }}">Immigration</a>
    @endif
  </div>
</div>