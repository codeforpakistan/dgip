@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Visa categories</h1>
      <p class="lead"></p>
    </header>
    
    <article class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach ($visas as $visa)
          <a class="nav-link @if ($loop->first) active @endif" id="v-pills-{{$visa->slug}}-tab" data-toggle="pill" href="#v-pills-{{$visa->slug}}" role="tab">{{$visa->name}}</a>
          @endforeach
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          @foreach ($visas as $visa)
            <div class="tab-pane fade @if ($loop->first) show active @endif" id="v-pills-{{$visa->slug}}" role="tabpanel">
              @auth
              <a href="{{ route('admin.visa_categories.edit', $visa->id) }}" class="float-right">Edit</a>
              @endauth
              <h2>{{ $visa->name }}</h2>
              <p class="lead">{{ $visa->summary }}</p>
              {!! nl2br($visa->body) !!}
            </div>
            @endforeach
          </div>
        </div>
      </article>

  </div>
</section>

@endsection