@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Contact Us</h1>
      <p class="lead">Find here contact information of various sections of the Directorate General office</p>
    </header>
    <article>

      <div class="card border-0 shadow-sm mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.866274406619!2d73.04540781449614!3d33.686526644362566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd19bc22bf5%3A0xfaffe85f4db96aec!2sDirectorate+General+Immigration+and+Passport+Headquarter%2C+Islamabad.!5e0!3m2!1sen!2s!4v1517220774489" width="1110" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="card-body">
          <address>
            <strong>Directorate General of Immigration &amp; Passports</strong><br>
            Headquarters, Mauve Area, G-8/1,<br>
            Islamabad, Pakistan<br>
            <abbr title="Phone">P:</abbr> +92 (0800) 34477
          </address>
        </div>
      </div>

      <div class="card card-body border-0 shadow-sm mb-5">
        <h2 class="card-title">Contact Information</h2>
        <div class="table-responsive">

          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>Designation</th>
                <th>Telephone</th>
                <th>Fax</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Director General</td>
                <td>09107070</td>
                <td>09107071</td>
              </tr>
              <tr>
                <td>Director Headquarter</td>
                <td>09107044</td>
                <td>09107045</td>
              </tr>
              <tr>
                <td>Project Co-ordinator</td>
                <td>09107051</td>
                <td></td>
              </tr>
              <tr>
                <td>Dy. Project Director</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Depty Director (Policy)</td>
                <td>09107048</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Admin)</td>
                <td>09107057</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Black List)</td>
                <td>09107052</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Immigration)</td>
                <td>09107050</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director Passport(Distribution)</td>
                <td>09107083</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Official / Diplomatic) Passport</td>
                <td>09107053</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Visa)</td>
                <td>09107049</td>
                <td></td>
              </tr>
              <tr>
                <td>Assistent Director (Legal)</td>
                <td>09107075</td>
                <td></td>
              </tr>
              <tr>
                <td>Reception</td>
                <td>09107015</td>
                <td></td>
              </tr>
              <tr>
                <td>Helpline</td>
                <td>080034477</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h2>Email your queries to relevant sections only</h2>

      <div class="card-columns">
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Director General</strong><br>
            Email <a href="mailto:dg@dgip.gov.pk">dg@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Complete Name</li>
            <li>Contact Number</li>
            <li>CNIC (Pakistanis) &amp; Passport (Foreigners)</li>
            <li>Contact Address</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Overseas complaints</strong><br>
            Email <a href="mailto:overseas.complaints@dgip.gov.pk">overseas.complaints@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Complete Name</li>
            <li>Contact Number</li>
            <li>CNIC (Pakistanis) &amp; Passport (Foreigners)</li>
            <li>Contact Address</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Queries / Information</strong><br>
            Email <a href="mailto:info@dgip.gov.pk">info@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Complete Name</li>
            <li>Contact Number</li>
            <li>CNIC (Pakistanis) &amp; Passport (Foreigners)</li>
            <li>Contact Address</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Renunciation of Citizenship</strong><br>
            Email <a href="mailto:immigration@dgip.gov.pk">immigration@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Applicant Name with Father/Guardian name</li>
            <li>Case No</li>
            <li>Name of City/Foreign Mission; where case has been initiated</li>
            <li>Name of Country; where case has been initiated</li>
            <li>CNIC/NICOP Number</li>
            <li>Passport No. (if applicable)</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Black-List Cases</strong><br>
            Email <a href="mailto:blcell@dgip.gov.pk">blcell@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Applicant Name with Father Name</li>
            <li>Case No</li>
            <li>Place of Birth (City/District)</li>
            <li>Country</li>
            <li>CNIC/NICOP Number</li>
            <li>Passport No. (if applicable)</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Passport Policy</strong><br>
            Email <a href="mailto:passport.policy@dgip.gov.pk">passport.policy@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Applicant Name with Father/Guardian Name</li>
            <li>Case No. (if initiated)</li>
            <li>Place of Birth (City/District)</li>
            <li>Country</li>
            <li>CNIC/NICOP Number</li>
            <li>Passport No. (if applicable)</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Visa Related Issues</strong><br>
            Email <a href="mailto:visa.policy@dgip.gov.pk">visa.policy@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Applicant Name with Father/Guardian name</li>
            <li>Case No. (If initiated)</li>
            <li>Name of City/Foreign Mission; where case has been initiated</li>
            <li>Name of Country; where case has been initiated</li>
            <li>Passport No</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Diplomatic &amp; Official passports</strong><br>
            Email <a href="mailto:dip.off.passport@dgip.gov.pk">dip.off.passport@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Applicant Name with Father/Guardian name</li>
            <li>Designation</li>
            <li>Department</li>
            <li>Letter No with date. (If initiated)</li>
            <li>CNIC/NICOP Number</li>
            <li>Name of City/Foreign Mission; where case has been initiated</li>
            <li>Name of Country; where case has been initiated</li>
          </ul>
        </div>
        <div class="card card-body border-0 shadow-sm">
          <address>
            <strong>Application Tracking</strong><br>
            Email <a href="mailto:opts@dgip.gov.pkk">opts@dgip.gov.pk</a> with...
          </address>
          <ul>
            <li>Complete Name</li>
            <li>Contact Number</li>
            <li>CNIC (Pakistanis)</li>
            <li>Token Number</li>
            <li>Contact Address</li>
          </ul>
        </div>
      </div>
    </article>
  </div>
</section>

@endsection