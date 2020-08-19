@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Application Process</h1>
      <!-- <p class="lead">Learn about immigrating to Pakistan, eligibility, and guidelines.</p> -->
    </header>
    <article>
      <p>Following are the steps of processing application.</p>
      <ol>
        <li>Availability of Application Forms.</li>
        <li>Submission of Application.</li>
        <li>Further Official Process.</li>
        <li>Issuance of Citizenship Certificate.</li>
      </ol>

      <h3 class="mt-5">Availability of Application Forms</h3>
      <p>Application forms can be obtained from our Headquarters in Islamabad, and our Regional Passport Offices at provincial headquarters. You can also <a class="underline" href="{{ route('immigration.downloads') }}">download</a> these forms.</p>

      <h3 class="mt-5">Submission of Application</h3>
      <p>Submit applications at the nearest <a class="underline" href="{{ route('offices') }}">Regional Passport Offices</a> at Provincial Headquarters, and Home Departments of concerned Provincial Government.</p>

      <h3 class="mt-5">Further Official Process</h3>
      <p>After submission of the application it shall be examined and applicant shall be informed if some documents are missing or if there is any other discrepancy in the application.</p>
      <p>Applicants are advised to ensure that applications are complete in all respects and all required documents are attached. After approval of formal submission of the application, a receipt/certificate shall be issued to applicant. Application shall be referred to concerned departments for verification. Application to other concerned departments shall be send only after completion of required aggregate stay in Pakistan.</p>

      <h3 class="mt-5">Issuance of Citizenship Certificate</h3>
      <p>After the official process and approval of the competent authority the Citizenship certificate has to be issued through concerned RPOs or Directorate General of Immigration &amp; Passports.</p>

      <blockquote class="blockquote p-3 bg-light callout"><strong>NOTE:</strong> Applicants are advised to get their foreign passports renewed from concerned authorities and get their visas/extensions renewed until receipt of Pakistan Citizensip Certificate.</blockquote>

      
    </article>
  </div>
</section>

@endsection