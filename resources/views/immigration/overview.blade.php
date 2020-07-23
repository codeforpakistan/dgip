@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Immigration to Pakistan</h1>
      <p class="lead">Learn about immigrating to Pakistan, eligibility, and guidelines.</p>
    </header>

    <article class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card border-0 shadow-sm mb-3">
          <!-- <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h2 class="card-title">Citizenship of Pakistan</h2>
            <p class="card-text"> How does one become a citizen of Pakistan </p>
            <a class="stretched-link" href="{{ route('immigration.citizenship') }}">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card border-0 shadow-sm mb-3">
          <div class="card-body">
            <h2 class="card-title">Dual Nationality</h2>
            <p class="card-text"> Can you become a citizen of both countries </p>
            <a class="stretched-link" href="{{ route('immigration.duality') }}">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title"> Grant of Citizenship </h2>
          <p class="card-text">  </p>
          <a class="stretched-link" href="{{ route('immigration.process') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title"> Renunciation of Citizenship </h2>
          <p class="card-text"> How can I cease to be a citizen of Pakistan? </p>
          <a class="stretched-link" href="{{ route('visa.registration') }}">Learn more</a>
        </div>
      </div>
    </article>
  </div>
</section>

@endsection