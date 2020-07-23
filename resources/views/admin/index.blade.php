@extends('layouts.admin')

@section('content')
<div class="card card-body border-0 shadow-sm">
  <header class="d-flex align-items-center">
    <h3 class="card-title flex-grow-1">{{ ucwords(Str::of(Str::plural(Str::snake(class_basename($items[0]))))->replace('_', ' ')) }}</h3>

    <div class="form-inline">
      @isset($regions)
      <select class="form-control mr-3" onchange="window.location.href=`{{ url()->current() }}?region=${this.value}`">
        <option default selected value="">Select a region...</option>
        @foreach ($regions as $region)
        <option value="{{ $region }}" @if (request()->has('region') && request()->query('region') == $region) selected @endif)>{{ $region }}</option>
        @endforeach
      </select>
      @endif


      <a href="{{ route('admin.'.Str::plural(Str::snake(class_basename($items[0]))).'.create') }}"><i data-feather="plus-circle"></i></a>
    </div>

  </header>
  @include('admin.components.table', ['items' => $items])
  {{ $items->appends(['region' => request()->query('region')])->links() }}
</div>
@endsection