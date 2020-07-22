@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Regional Passport Offices</h1>
      <p class="lead">Locations, addresses, and phone numbers of regional passport offices</p>
    </header>
    <article>
      <div class="card card-body border-light shadow-sm">
        <ul class="nav nav-tabs" role="tablist">
          @foreach($regions as $region)
          <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" data-toggle="tab" href="#{{ Str::camel($region->region) }}" role="tab">{{ $region->region }}</a></li>
          @endforeach
        </ul>
        <div class="tab-content">
          @foreach($regions as $region)
          <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{ Str::camel($region->region) }}" role="tabpanel">
            @include('components/table', ['items' => $offices->where('region', $region->region)])
          </div>
          @endforeach
        </div>
      </div>
    </article>
  </div>
</section>

@endsection