@extends('layouts.master')

@section('page')

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">About</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('admin.officers.index') }}">Senior Management</a>
            <a class="dropdown-item" href="{{ route('admin.regional_offices.index') }}">Regional Offices</a>
            <a class="dropdown-item" href="{{ route('admin.bank_branches.index') }}">Bank Branches</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Visa</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('admin.visa_categories.index') }}">Visa Categories</a>
            <a class="dropdown-item" href="{{ route('admin.visa_fees.index') }}">Fee Structure</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Immigration</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="">Fee Structure</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.updates.index') }}">Updates</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">Go</button>
          </div>
        </div>
      </form>
      <a class="btn btn-primary-outline" href="{{ route('logout') }}"><i data-feather="log-out" class="text-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </div>
</nav>

<section class="my-3">
  <div class="container-fluid">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @yield('content')
  </div>
</section>


@endsection