@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Pakistani Visa</h1>
      <p class="lead"></p>
    </header>
    <article class="row">
      <div class="col-12">
        <div class="card border-0 shadow-sm mb-3">
          <img src="{{ asset('images/banner_visa.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title">Apply Online</h2>
            <p class="card-text"><a href="https://visa.nadra.gov.pk/" target="_blank" class="underline stretched-link">Visit our site</a> to apply online for your machine readable visa, pay your fee and track your application.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Visa Categories</h2>
          <p class="card-text">Different types of visa currently being issued for a variety of visit purposes.</p>
          <a class="stretched-link" href="{{ route('visa.categories') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Indian Nationals</h2>
          <p class="card-text"> Specific instructions for Indian nationals who wish to visit Pakistan. </p>
          <a class="stretched-link" href="{{ route('visa.indians') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Application Process</h2>
          <p class="card-text"> Walk through our step-by-step process for obtaining machine readable visa.</p>
          <a class="stretched-link" href="{{ route('visa.process') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Police Registration</h2>
          <p class="card-text"> Find out if you need to register with the local authorities upon your visit.</p>
          <a class="stretched-link" href="{{ route('visa.registration') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Fees and Charges</h2>
          <p class="card-text"> Details on fees for different types of visas and their processing requirements. </p>
          <a class="stretched-link" href="{{ route('visa.fees') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title">Visa Extension</h2>
          <p class="card-text"> How to get your visa extended from within Pakistan if you extend your stay. </p>
          <a class="stretched-link" href="{{ route('visa.extension') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title"> Overstay Charges </h2>
          <p class="card-text"> How to get your visa extended from within Pakistan if you extend your stay. </p>
          <a class="stretched-link" href="{{ route('visa.overstay') }}">Learn more</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card card-body border-0 shadow-sm mb-3">
          <h2 class="card-title"> Entry without visa </h2>
          <p class="card-text"> Do you even need a visa to enter Pakistan? </p>
          <a class="stretched-link" href="{{ route('visa.abolition') }}">Learn more</a>
        </div>
      </div>
  </article>
</section>

@endsection