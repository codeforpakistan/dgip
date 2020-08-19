@extends('layouts.page')

@section('content')
@include('components/breadcrumbs')
<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">About Us</h1>
      <p class="lead"> The Office of DG. (I & P) is an attached department of Ministry of Interior, responsible to deal with the matters concerning issuance of Passports, Visas, Pakistan Citizenship and Renunciation of Pakistan Citizenship Certificates. This website will guide you  about the processes for acquiring these documents </p>
    </header>
    <div class="row">
      <aside class="col-md-4">
        <h3>Senior Management</h3>
        @foreach ($officers as $officer)
        <div class="card bg-light border-0 shadow-sm mb-3">
          <div class="row no-gutters">
            <div class="col-5">
              <img src="{{ asset('storage/' . Str::of($officer->photo)->split('/\//')[1]) }}" class="card-img rounded-0" alt="...">
            </div>
            <div class="col">
              <div class="card-body">
                <h5 class="card-title">{{ $officer->name }}</h5>
                <p class="card-text">{{ $officer->title }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </aside>
      <article class="col-md-8">

    </article>
    </div>
  </div>
</section>

@endsection