@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Overstaying Your Visit</h1>
      <p class="lead"></p>
    </header>
    <article>
      <p>The Ministry of Interior has imposed overstay charges on foreigners and Pak origin foreigners as described below.</p>
      
      <div class="card card-body border-0 shadow-sm table-responsive mb-3">
        <h3 class="card-title">All foreign nationals</h3>
        <table class="table table-striped mb-0">
          <thead>
            <tr>
              <th>S#</th>
              <th>Period of Over-Stay</th>
              <th>Overstay Surcharge</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Upto 2 Weeks</td>
              <td>–</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Above – 2 Weeks to 1 Month</td>
              <td>US $ 50/-</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Above – 1 Month to 3 Months</td>
              <td>US $ 200/-</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Above – 3 Months to 1 Year</td>
              <td>US $ 400/- per year</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p><strong>Note:</strong> No surcharge shall be payable in case of holders of diplomatic passports.</p>

      
      <div class="card card-body border-0 shadow-sm table-responsive mb-3">
        <h3 class="card-title">Foreigners of Pakistani-origin</h3>
        <table class="table table-striped mb-0">
          <thead>
            <tr>
              <th>S#</th>
              <th>Period of Over-Stay</th>
              <th>Overstay Surcharge</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Upto 1 Month</td>
              <td>–</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Above – 1 Month to 6 Months</td>
              <td>US $ 40/-</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Above – 6 Months to 1 Year</td>
              <td>US $ 80/-</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Above – Beyond 1 Year</td>
              <td>US $ 200/- per year</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p><strong>Note:</strong> </p>
      <ol>
        <li>No surcharge shall be payable in case of children upto 12 years of age.</li>
        <li>50% surcharge shall be payable in case of children upto 18 years of age.</li>
      </ol>
    </article>
  </div>
</section>

@endsection