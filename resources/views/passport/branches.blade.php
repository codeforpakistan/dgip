@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Bank Branches</h1>
      <p class="lead">Authorised branches of the National Bank of Pakistan</p>
    </header>
    <article>
      <div class="card card-body border-0 shadow-sm">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          @foreach($regions as $region)
          <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" data-toggle="tab" href="#{{ Str::camel($region->region) }}" role="tab">{{ $region->region }}</a></li>
          @endforeach
        </ul>
        <div class="tab-content">
          @foreach($regions as $region)
          <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{ Str::camel($region->region) }}" role="tabpanel">
            @include('components/table', ['items' => $branches->where('region', $region->region)])
          </div>
          @endforeach
        </div>
      </div>
    </article>
  </div>
</section>

@endsection