@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Types of Passports</h1>
      <p class="lead">The Passport Act, 1974 and Passport & Visa Manual 2006 regulate the issuance of passports.</p>
    </header>
    <article>
      <p>There are three types of Machine Readable Passports (MRPs) being issued:</p>

      <div class="card-deck">
        <div class="card border-light shadow-sm">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Ordinary</h3>
            <p class="card-text">Ordinary Machine Readable Passport is issued to all citizens of Pakistan</p>
          </div>
        </div>
        <div class="card border-light shadow-sm">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Diplomatic</h3>
            <p class="card-text">Diplomatic passports are issued to highest state officials and those serving in international organizations such as UN and multilateral agencies.</p>
            <a href="{{ asset('downloads/Para_45.pdf') }}" target="_blank" class="btn btn-primary btn-block">#45 of Passport &amp; Visa Manual 2006</a>
          </div>
        </div>
        <div class="card border-light shadow-sm">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Official</h3>
            <p class="card-text">Official passports are issued to Pakistani nationals who are serving with the Government and proceeding abroad on official assignments.</p>
            <a href="{{ asset('downloads/Para_9.pdf') }}" target="_blank" class="btn btn-primary btn-block">#9 of Passport &amp; Visa Manual 2006</a>
          </div>
        </div>
      </div>

      <h2 class="mt-5">Validity</h2>
      <p>Machine Readable Passports are valid for <strong>FIVE</strong> and <strong>TEN</strong> years, subject to <a href="{{ route('passport.fees') }}">fee deposit</a>.</p>
      <ul>
        <li>Passport having validity of 5 years CANNOT be converted into validity for 10 years.</li>
        <li>Children under 15 years of age will be issued a passport having 5 years validity.</li>
      </ul>

      <h2 class="mt-5">Booklets</h2>
      <p>Machine Readable Passports booklets are available in <strong>THREE</strong> sizes, subject to <a href="{{ route('passport.fees') }}">fee deposit</a>.</p>
      <ul>
        <li>36 pages (standard booklet)</li>
        <li>72 pages (for frequent travelers)</li>
        <li>100 pages (for frequent travelers)</li>
      </ul>
    </article>
  </div>
</section>

@endsection