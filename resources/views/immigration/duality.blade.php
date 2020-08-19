@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Dual Nationality</h1>
      <p class="lead">Learn about immigrating to Pakistan, eligibility, and guidelines.</p>
    </header>
    <article>
      <p class="lead">Government of Pakistan has dual nationality arrangements with following 18 countries. Citizens of these countries are not required to renounce their nationality while acquiring Pakistani Citizenship.</p>

      <div class="card card-body border-0 shadow-sm table-responsive">
        <table class="table table-striped mb-0">
          <thead>
            <tr>
              <th>Sr.#</th>
              <th>Name of Country</th>
              <th>Sr.#</th>
              <th>Name of Country</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>United Kingdom</td>
              <td>10</td>
              <td>Egypt</td>
            </tr>
            <tr>
              <td>2</td>
              <td>France</td>
              <td>11</td>
              <td>Jordan</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Italy</td>
              <td>12</td>
              <td>Syria</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Belgium</td>
              <td>13</td>
              <td>Switzerland</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Iceland</td>
              <td>14</td>
              <td>Netherland</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Australia</td>
              <td>15</td>
              <td>United States of America</td>
            </tr>
            <tr>
              <td>7</td>
              <td>New Zealand</td>
              <td>16</td>
              <td>Sweden</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Canada</td>
              <td>17</td>
              <td>Ireland</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Finland</td>
              <td>18</td>
              <td>Bahrain</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
  </div>
</section>
@endsection