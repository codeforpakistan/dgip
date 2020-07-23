@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">{{ $visa->name }}</h1>
      <p class="lead">{{ $visa->summary }}</p>
    </header>
    <article>
      {!! nl2br($visa->body) !!}
    </article>
  </div>
</section>

@endsection