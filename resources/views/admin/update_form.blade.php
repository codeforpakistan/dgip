@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.updates.update', $item->id) }}" enctype="multipart/form-data" method="post" class="card card-body border-0 shadow-sm">
  @method('patch')
  @else
  <form action="{{ route('admin.updates.store') }}" enctype="multipart/form-data" method="post" class="card card-body border-0 shadow-sm">
    @endif

    @csrf
    <h3 class="card-title">News and Update</h3>

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $item->title ?? null) }}" />
      @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    @if (Route::is('admin.updates.edit'))
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $item->slug) }}">
      @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    @endif

    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary" value="{{ old('summary', $item->summary ?? null) }}" />
      @error('summary')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="attachment">Attachment</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="attachment" name="attachment">
        <label class="custom-file-label" for="attachment">Choose file</label>
      </div>
      @isset ($item) @if($item->attachment)
      <small id="passwordHelpBlock" class="form-text text-muted"><a href="{{ asset('storage/' . Str::of($item->attachment)->split('/\//')[1]) }}" target="_blank">{{ $item->attachment }}</a></small>
      <input type="hidden" name="attachment" value="{{ $item->attachment }}" />
      @endif @endif
      @error('attachment')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <textarea class="form-control summernote @error('body') is-invalid @enderror" rows="5" id="body" name="body">{{ old('body', $item->body ?? null) }}</textarea>
      @error('body')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <footer>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('admin.updates.index') }}" class="btn btn-default">Cancel</a>
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
      $('.summernote').summernote();
      $('.custom-file-input').on('change', function(e) {
        var fileName = document.getElementById("attachment").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
      })
    });
  </script>
  @endpush