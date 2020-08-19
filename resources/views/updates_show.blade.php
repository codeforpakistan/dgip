@extends('layouts.page')

@section('content')

<!-- PILLS -->
<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">News &amp; Updates</h1>
    </header>
    <div class="row">
      <aside class="col-md">
        <ul class="list-group list-group-flush mb-5">
          @foreach ($updates as $update)
          <li class="list-group-item bg-transparent px-0">
            <a class="stretched-link" href="{{ route('updates.show', $update->slug) }}">{{ $update->title }}</a>
            <small>&ndash; {{ \Carbon\Carbon::parse($update->updated_at)->diffForHumans() }}</small>
          </li>
          @endforeach
        </ul>
        <a href="{{ route('updates.index') }}">View all updates</a>
      </aside>
      <article class="col-md-9">
        <small>{{ \Carbon\Carbon::parse($item->updated_at)->format('j F Y') }}</small>
        <h2>{{ $item->title }}</h2>
        <p class="lead">{{ $item->summary }}</p>
        @if ($item->attachment)
        <p><a href="{{ asset('storage/' . Str::of($item->attachment)->split('/\//')[1]) }}"><i data-feather="paperclip"></i> Attachment</a></p>
        @endif
        {!! nl2br($item->body) !!}
      </article>
    </div>
  </div>
</section>

@endsection