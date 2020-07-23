@extends('layouts.admin')

@section('content')

@isset($item)
<form action="{{ route('admin.regional_offices.update', $item->id) }}" method="post" class="card card-body border-0 shadow-sm">
@method('patch')
@else
<form action="{{ route('admin.regional_offices.store') }}" method="post" class="card card-body border-0 shadow-sm">
@endif

  @csrf
  <h3 class="card-title">Regional Office</h3>

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
    <label for="address">Address</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $item->address ?? old('address') }}">
    @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
  
  <div class="form-group">
    <label for="phone">Code</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $item->phone ?? old('phone') }}">
    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>

  <footer>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.regional_offices.index') }}" class="btn btn-default">Cancel</a>
  </footer>

</form>
@endsection
