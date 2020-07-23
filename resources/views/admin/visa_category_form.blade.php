@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.visa_categories.update', $item->id) }}" method="post" class="card card-body border-0 shadow-sm">
@method('patch')
@else
<form action="{{ route('admin.visa_categories.create') }}" method="post" class="card card-body border-0 shadow-sm">
@endif

  @csrf
  <h3 class="card-title">Visa Category</h3>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}">
    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $item->slug ?? old('slug') }}">
    @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <div class="form-group">
    <label for="summary">Summary / Tagline</label>
    <input type="text" class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary" value="{{ $item->summary ?? old('summary') }}">
    @error('summary')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <div class="form-group">
    <label for="body">Body / Content</label>
    <textarea class="form-control summernote @error('body') is-invalid @enderror" rows="5" id="body" name="body">{{ $item->body ?? old('body') }}</textarea>
    @error('body')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <footer>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.visa_categories.index') }}" class="btn btn-default">Cancel</a>
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