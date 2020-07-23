@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Pakistani Citizenship</h1>
      <p class="lead">Learn about immigrating to Pakistan, eligibility, and guidelines.</p>
    </header>
    <article>
      <p class="lead">There are three categories of declared citizens of Pakistan including citizens by birth, by descent and by migration, which are briefly mentioned below. (Please see relevant sections of Pakistan citizenship Act, 1951 for details)</p>

      <div class="card-deck">

        <div class="card border-0 shadow-sm mb-5">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">  
          <div class="card-body">
            <h2 class="card-title">Citizen by Birth</h2>
            <p>Persons who or any of their parents or grand parents were born in the territories now included in Pakistan before the commencement of citizenship Act, 1951 are citizens of Pakistan.</p>
            <p>Any person born in Pakistan after the commencement of Pakistan Citizenship Act, 1951 is citizen of Pakistan. Children of foreign diplomats and children of enemy alien born in Pakistan are not included in this category. Persons, who migrated from territories of Pakistan to other areas of Indo-Pakistan sub-continent for permanent stay after March, 1947 shall also be not considered citizens of Pakistan.</p>
          </div>
        </div>
        
        
        <div class="card border-0 shadow-sm mb-5">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">  
          <div class="card-body">
            <h2 class="card-title">Citizen by Decent</h2>
            <p>Children of Pakistanis who are born outside of Pakistan are citizens by descent. If the parent of such child is a citizen by descent himself/herself (as born outside of Pakistan) the child is required to be registered in the nearest consulate or Pakistani mission.</p>
            <p>Children born to Pakistani mother and foreign national father, after 18.04.2000, are treated as citizens of Pakistan.</p>
          </div>
        </div>
        
        <div class="card border-0 shadow-sm mb-5">
          <img src="{{ asset('images/blank.svg') }}" class="card-img-top" alt="...">  
          <div class="card-body">
            <h2 class="card-title">Citizen by Migration</h2>
            <p>The persons who migrated to Pakistan from the territories in the indo-Pakistan subcontinent before the commencement of Pakistan Citizenship Act, 1951 are declared citizens of Pakistan.</p>
          </div>
        </div>
      </div>

    </article>
  </div>
</section>

@endsection