@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Application Process</h1>
      <p class="lead">Process Flow In Pakistan & Foreign Missions Abroad</p>
    </header>
    <article>
      <section class="steps my-3 py-2">
          <h3 class="text-center">Steps to obtain Machine Readable Passport (MRP)</h3>
          <p class="text-center">Visit any of our Regional Passport Office (RPO), <a class="underline" href="{{ route('offices') }}">click here for list</a></p>

          <div class="row">
            <div class="col"><span class="badge rounded-pill badge-warning position-absolute mt-3 shadow">1</span>
              <p class="position-absolute mt-5 p-4 text-center text-white">Token Counter + Photograph Capturing</p><img src="{{ asset('img/process-1.jpg') }}" class="img-fluid rounded-circle">
            </div>
            <div class="col"><span class="badge rounded-pill badge-warning position-absolute mt-3 shadow">2</span>
              <p class="position-absolute mt-5 p-4 text-center text-white">Biometric Data Capturing. i.e. Finger Print</p><img src="{{ asset('img/process-2.jpg') }}" class="img-fluid rounded-circle">
            </div>
            <div class="col"><span class="badge rounded-pill badge-warning position-absolute mt-3 shadow">3</span>
              <p class="position-absolute mt-5 p-4 text-center text-white">Data Entry of all the required data of the Applicant</p><img src="{{ asset('img/process-3.jpg') }}" class="img-fluid rounded-circle">
            </div>
            <div class="col"><span class="badge rounded-pill badge-warning position-absolute mt-3 shadow">4</span>
              <p class="position-absolute mt-5 p-4 text-center text-white">Verification as per Office Record</p><img src="{{ asset('img/process-4.jpg') }}" class="img-fluid rounded-circle">
            </div>
            <div class="col"><span class="badge rounded-pill badge-warning position-absolute mt-3 shadow">5</span>
              <p class="position-absolute mt-5 p-4 text-center text-white">Interview and Decision by Assistant Director</p><img src="{{ asset('img/process-5.jpg') }}" class="img-fluid rounded-circle">
            </div>
          </div>
      </section>

      <blockquote class="blockquote p-3 my-5 bg-light callout">
        <p class="mb-0">NOTE: Before arrival at the Regional Passport Office (RPO), Original Bank Challan receipt must be acquired from the authorized <a class="underline" href="{{ route('branches') }}">branches of the National Bank</a> in Pakistan and relevant bank branches for Foreign Missions respectively, by depositing the prescribed <a class="underline" href="{{ route('passport.fees') }}">Passport Fee</a>.</p>
      </blockquote>

      <h2 class="mt-5">Arrival of Applicant at Customer Service Counter</h2>

      <ul>
        <li>The applicant will approach the customer service counter at Regional Passport Office.</li>
        <li>Applicant will be guided about the process flow of the System for applying the passport.</li>
        <li>In case the applicant has all the requisite documents he/she will be guided to the Token Counter.</li>
        <li>Separate passport will be issued to each and every applicant irrespective of age.</li>
        <li>ALL SORTS OF ENDORSEMENTS INCLUDING NAMES OF CHILDREN IN PARENTS PASSPORTS IS Not-Allowed in the Machine Readable Passport.</li>
      </ul>

      <h2 class="mt-5">Token Counter + Capturing of Photograph</h2>

      <ul>
        <li>The applicant will produce the original CNIC/Smart-Card/NICOP or Children Registration Certificate (CRC), in case of below 18 years of age, along with its copies and Bank Chalan Form.</li>
        <li>The Camera operator will proceed with capturing of applicants photograph.</li>
        <li>Token will be issued to the applicant.</li>
      </ul>

      <h2 class="mt-5">Biometric Data Capture (Finger Prints)</h2>

      <ul>
        <li>The applicant after obtaining token will approach the Biometric Counter as soon as his token appears at Biometric Capturing Counter.</li>
        <li>Data Entry Operator (DEO) at the Counter will capture his right thumb, right index finger, Left Thumb and Left index finger impressions.</li>
      </ul>

      <h2 class="mt-5">Data Entry</h2>

      <ul>
        <li>The Applicant will move to the Data Entry Counters as soon as his token number appears on the Counter.</li>
        <li>The Data Entry Operator will enter all the required data of the Applicant while the data entry screen will also be visible to the Applicant.</li>
        <li>In case of any modification in data, the Applicant should guide by the Data Entry Operator accordingly. After the data entry is completed Data Entry Form will be printed by the operator and will be presented to the Applicant for verification.</li>
        <li>The Applicant will verify all its contents by signing the form.</li>
        <li>The applicant will be asked to collect duplicate token from the data entry counter.</li>
      </ul>

      <p>NOTE: ANY CHANGE IN THE DATA SHOULD BE POINTED OUT AT THIS STAGE. ONCE THE INFORMATION HAVE BEEN SAVED, FOR ANY MODIFICATION THE TOKEN WILL HAVE TO BE CANCELLED AND THE APPLICANT WILL HAVE TO GO THROUGH THE WHOLE PROCESS AGAIN. AFTER ALLOWING “GO AHEAD” THE DATA BY THE ASSISTANT DIRECTOR, NO CHANGE IN THE DATA WILL BE POSSIBLE.</p>

      <h2 class="mt-5">Verification as per Office Record (ECL/BL)</h2>

      <ul>
        <li>The verification against office record will be carried out.</li>
        <li>Verification against Exit Control List (ECL) and Black List (BL).</li>
        <li>In case of slightest doubt about the National Status of the applicant the case may be referred to Special Branch/IB for confirmation of his National Status as a citizen of Pakistan or otherwise.</li>
      </ul>

      <h2 class="mt-5">Interview &amp; Decision by Assistant Director</h2>

      <ul>
        <li>Finally the applicant will appear before Assistant Director when his token appears on AD counter along with all the original documents.</li>
        <li>The Assistant Director will interview the Applicant and declare his verdict to the applicant whether his case is to be allowed go-ahead or overruled.</li>
        <li>Assistant Director will defer the case of Applicant below 18 years of age and will handover the printed form to the applicant for attestation of his photograph from a Class 1 Govt. officer.</li>
        <li>The attester will have to write his/her CNIC/Contact No. along with the official stamp on the form.</li>
        <li>On production of data form (duly atteseted) the deferred Token will be allowed go-ahead.</li>
      </ul>

      <h2 class="mt-5">Passport Delivery Time (Collection of Passport)</h2>

      <ul>
        <li>After successful completion of above stages, the Applicant will be given:-
          <ul>
            <li>10 working days time to collect his/her passport; in case of normal passport.</li>
            <li>04 working days time to collect his/her passport; in case of urgent passport.</li>
          </ul>
        </li>
      </ul>

      <blockquote>
        <p>NOTE: Passports dispatched from the Headquarters for delievery to the applicants within prescribed processing period could be tracked through SMS &amp; Online Passport Tracking System, but to reach their destination i.e. respective Regional Passport Office (RPO) or Foreign Mission (FM) they may take some shipment time.</p>
      </blockquote>

      <h2>RPO process flow chart</h2>

      <p><img alt="Passport Application Process" data-entity-type="file" data-entity-uuid="351eed75-20c2-42ef-a54c-3c6cbc8d9dd8" src="/sites/default/files/inline-images/passport_flow%5B1%5D.gif" /></p>

    </article>
  </div>
</section>

@endsection