@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">

    <header class="mb-5">
      <h1 class="display-4">Pakistani Passport</h1>
      <p class="lead">Every Citizen of Pakistan is entitled to Machine Readable Passport for traveling abroad, subject to completion of all codal formalities.</p>
    </header>

    <div class="row">
      <article class="col">
        
        <div class="card border-0 shadow-sm mb-3">
          <img src="{{ asset('img/eservices.jpg') }}" class="card-img-top" alt="...">  
          <div class="card-body">
            <h2 class="card-title">Apply Online</h2>
            <p class="card-text"><a href="http://onlinemrp.dgip.gov.pk/" target="_blank" class="stretched-link">Apply for renewal</a> of your Machine Readable Passport, if your passport has expired OR its validity is less than 7 months.</p>
          </div>
        </div>

        <div class="card-columns">
          <div class="card card-body border-0 shadow-sm mb-3">
            <h2 class="card-title">Types of Passports</h2>
            <p class="card-text">Types of passports currently being issued with validity periods and booklet sizes.</p>
            <a class="stretched-link" href="{{ route('passport.types') }}">Learn more</a>
          </div>
          <div class="card card-body border-0 shadow-sm mb-3">
            <h2 class="card-title">Bank Branches</h2>
            <p class="card-text"> A list of branches of the National Bank where you can submit your fee.</p>
            <a class="stretched-link" href="{{ route('branches') }}">Learn more</a>
          </div>
          <div class="card card-body border-0 shadow-sm mb-3">
            <h2 class="card-title">Application Process</h2>
            <p class="card-text"> Walk through our step-by-step process for obtaining machine readable passports.</p>
            <a class="stretched-link" href="{{ route('passport.process') }}">Learn more</a>
          </div>
          <div class="card card-body border-0 shadow-sm mb-3">
            <h2 class="card-title">Regional Offices</h2>
            <p class="card-text"> Find out where you can apply for your machine readable passport.</p>
            <a class="stretched-link" href="{{ route('offices') }}">Learn more</a>
          </div>
          <div class="card card-body border-0 shadow-sm mb-3">
            <h2 class="card-title">Fees and Charges</h2>
            <p class="card-text"> Details on fees for different passport types, booklets, and processing requirements. </p>
            <a class="stretched-link" href="{{ route('passport.fees') }}">Learn more</a>
          </div>
          
        </div>

      </article>
    </div>
  </div>
</section>

@endsection