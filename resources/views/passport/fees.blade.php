@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Fees and Charges</h1>
      <p class="lead">Fees for application and renewal of machine readable passport</p>
    </header>
    <div class="row">
      
      <article class="col">
        <p class="lead">The following tables outline the fees charged for applying for a machine readable passport.</p>

        <div class="card card-body border-0 shadow-sm mb-5">
          <h2 class="card-title">5 Year Validity</h2>
          <div class="table-responsive">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>36 pages</th>
                  <th>72 pages</th>
                  <th>100 pages</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Normal</td>
                  <td>₨ 3,000</td>
                  <td>₨ 5,500</td>
                  <td>₨ 6,000</td>
                </tr>
                <tr>
                  <td>Urgent</td>
                  <td>₨ 5,000</td>
                  <td>₨ 9,000</td>
                  <td>₨ 12,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card card-body border-0 shadow-sm mb-5">
          <h2 class="card-title">10 Year Validity</h2>
          <div class="table-responsive">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>36 pages</th>
                  <th>72 pages</th>
                  <th>100 pages</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>Normal</td>
                  <td>₨ 5,400</td>
                  <td>₨ 9,900</td>
                  <td>₨ 10,800</td>
                </tr>
                <tr>
                  <td>Urgent</td>
                  <td>₨ 9,000</td>
                  <td>₨ 16,200</td>
                  <td>₨ 21,600</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </article>
      <aside class="col-3">
        <div class="alert alert-warning shadow-sm lead">
        <i data-feather="alert-triangle"></i>
          Applicants must submit appropriate passport fee through the <a href="{{ route('passport.branches') }}">authorised branches</a> of the National Bank of Pakistan, <strong>BEFORE</strong> visiting the regional passport offices.
        </div>
      </aside>
    </div>
  </div>
</section>

@endsection