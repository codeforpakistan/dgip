@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.bank_branches.update', $item->id) }}" method="post" class="card card-body border-0 shadow-sm">
@method('patch')
@else
<form action="{{ route('admin.bank_branches.store') }}" method="post" class="card card-body border-0 shadow-sm">
@endif

  @csrf
  <h3 class="card-title">Bank Branch</h3>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}">
    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ $item->city ?? old('city') }}">
    @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  
  <div class="form-group">
    <label for="region">Region</label>
    <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region" value="{{ $item->region ?? old('region') }}">
    @error('region')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  
  <div class="form-group">
    <label for="code">Code</label>
    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $item->code ?? old('code') }}">
    @error('code')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <footer>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.bank_branches.index') }}" class="btn btn-default">Cancel</a>
  </footer>

</form>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('js/summernote-0.8.18-dist/summernote-lite.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/summernote-0.8.18-dist/summernote-lite.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 300
    });
  });
</script>
@endpush