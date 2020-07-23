@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.visa_fees.update', $item->id) }}" method="post" class="card card-body border-0 shadow-sm">
@method('patch')
@else
<form action="{{ route('admin.visa_fees.store') }}" method="post" class="card card-body border-0 shadow-sm">
@endif

    @csrf
    <h3 class="card-title">Visa Fee</h3>

    <div class="form-group">
      <label for="category">Category</label>
      <select name="category" class="form-control @error('category') is-invalid @enderror">
        <option default selected value="">Select a category...</option>
        @foreach ($categories as $category)
        <option value="{{ $category->name }}" @isset($item) @if ($item->category == $category->name) selected @endif
          @endisset
          @if (old('category') == $category->name) selected @endif>{{ $category->name }}</option>
        @endforeach
      </select>
      @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="country">Country</label>
      <select name="country" class="form-control @error('country') is-invalid @enderror">
        <option default selected value="">Select a country...</option>
        @foreach ($countries as $country)
        <option value="{{ $country->name }}" @isset($item) @if ($item->country == $country->name) selected @endif
          @endisset
          @if (old('country') == $country->name) selected @endif>{{ $country->name }}</option>
        @endforeach
      </select>
      @error('country')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="type" class="d-block">Application Type</label>
      @foreach($types as $type)
      <div class="form-check form-check-inline @error('type') is-invalid @enderror">
        <input class="form-check-input" name="type" type="radio" id="{{ $type }}" value="{{ $type }}" @isset($item) @if ($item->type == $type) checked @endif @else @if(old('type') == $type) checked @endif @endif>
        <label class="form-check-label" for="{{ $type }}">{{ $type }}</label>
      </div>
      @endforeach
      @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="entry" class="d-block">Entry Type</label>
      @foreach($entries as $entry)
      <div class="form-check form-check-inline @error('entry') is-invalid @enderror">
        <input class="form-check-input" name="entry" type="radio" id="{{ $entry }}" value="{{ $entry }}" @isset($item) @if ($item->entry == $entry) checked @endif @else @if(old('entry') == $entry) checked @endif @endif>
        <label class="form-check-label" for="{{ $entry }}">{{ $entry }}</label>
      </div>
      @endforeach
      @error('entry')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
      <label for="fee">Fee and Charges</label>
      <textarea class="form-control summernote @error('fee') is-invalid @enderror" rows="5" id="fee" name="fee">{{ $item->fee ?? old('fee') }}</textarea>
      @error('fee')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <footer>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('admin.visa_fees.index') }}" class="btn btn-default">Cancel</a>
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
      height: 200
    });
  });
</script>
@endpush