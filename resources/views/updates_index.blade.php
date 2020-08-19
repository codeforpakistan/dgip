@extends('layouts.page')

@section('content')

<!-- PILLS -->
<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">News &amp; Updates</h1>
    </header>
    <article class="card-columns">
      @foreach ($updates as $update)
      <div class="card card-body border-0 shadow-sm mb-3">
        <h3 class="card-title"><a class="stretched-link" href="{{ route('updates.show', $update->slug) }}">{{ $update->title }}</a></h3>
        <p class="lead">{{ $update->summary }}</p>
        <small>&ndash; {{ \Carbon\Carbon::parse($update->updated_at)->diffForHumans() }}</small>
      </div>
      @endforeach
      {{ $updates->links() }}
    </article>
  </div>
</section>

@endsection