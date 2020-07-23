@extends('layouts.page')

@section('content')

<!-- PILLS -->
<section class="py-5">
  <div class="container">

    <div class="row">
      <div class="col-md mb-3">
        <h3 class="display-4">Passport</h3>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Apply Online</h5>
          <p class="card-text"><a href="http://onlinemrp.dgip.gov.pk/" class="stretched-link">Apply for renewal</a> of your Machine Readable Passport, if your passport has expired OR its validity is less than 7 months.</p>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Know the application process</h5>
          <p class="card-text">Learn more about the <a href="{{ route('passport.process') }}" class="stretched-link">application process</a>, and documentary requirements, to avoid any inconvenience.</p>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Find an office near you</h5>
          <p class="card-text">Lookup our <a href="{{ route('passport.offices') }}" class="stretched-link">office locations</a> and find the one nearest you.</p>
        </div>
        <a class="d-block" href="{{ route('passport.overview') }}">More&hellip;</a>
      </div>
      <div class="col-md mb-3">
        <h3 class="display-4">Visa</h3>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Which visa do I apply for?</h5>
          <p class="card-text">There are a number of different <a href="{{ route('visa.categories') }}" class="stretched-link">visa categories</a> one can apply for depending upon circumstances.</p>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Indian Nationals</h5>
          <p class="card-text">If you are an <a href="{{ route('visa.indians') }}" class="stretched-link">Indian national</a>, please read through specific requirements for your visit.</p>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Visa Applications</h5>
          <p class="card-text">Find our how to apply for a Pakistani visa, application fee, and other requirements. </p>
          <a href="{{ route('visa.overview') }}" class="stretched-link">Read more</a>
        </div>
        <a class="d-block" href="{{ route('visa.overview') }}">More&hellip;</a>
      </div>
      <div class="col-md mb-3">
        <h3 class="display-4">Immigration</h3>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Looking to migrate?</h5>
          <p class="card-text">See if you are eligible to apply for Pakistani Citizenship.</p>
          <a href="{{ route('immigration.overview') }}" class="stretched-link">Read more</a>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Forms and Downloads</h5>
          <p class="card-text"><a href="{{ route('immigration.downloads') }}" class="stretched-link">Download</a> the required forms here.</p>
        </div>
        <div class="card card-body border-0 shadow-sm mb-3">
          <h5 class="card-title">Frequently Asked Questions</h5>
          <p class="card-text">Look through compiled answers to the more <a href="{{ route('immigration.questions') }}" class="stretched-link">frequently asked quesions</a>.</p>
        </div>
        <a class="d-block" href="{{ route('immigration.overview') }}">More&hellip;</a>
      </div>
    </div>
  </div>
</section>

<!-- NEWS -->
<section class="gray-200 py-5">
  <div class="container">
    <div class="d-flex align-items-center">
      <h3 class="display-4 flex-grow-1">News and Updates</h3>
      <a class="carouselcontrol-prev" href="#news" role="button" data-slide="prev">
        <i data-feather="chevron-left"></i><span class="sr-only">Previous</span>
      </a>
      <a class="carouselcontrol-next" href="#news" role="button" data-slide="next">
        <i data-feather="chevron-right"></i><span class="sr-only">Next</span>
      </a>
    </div>
    <div id="news" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner p-1">
        <div class="carousel-item active">
          <div class="card-deck">
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-deck">
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-deck">
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card card-body border-0 shadow-sm">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection