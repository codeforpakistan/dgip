@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.officers.update', $item->id) }}" enctype="multipart/form-data" method="post" class="card card-body border-0 shadow-sm">
  @method('patch')
  @else
  <form action="{{ route('admin.officers.store') }}" enctype="multipart/form-data" method="post" class="card card-body border-0 shadow-sm">
    @endif

    @csrf
    <h3 class="card-title">Senior Management</h3>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}" />
      @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $item->title ?? old('title') }}" />
      @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="photo">Photo</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo" name="photo">
        <label class="custom-file-label" for="photo">Choose file</label>
      </div>
      @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <footer>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('admin.officers.index') }}" class="btn btn-default">Cancel</a>
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
    });
  </script>
  @endpush