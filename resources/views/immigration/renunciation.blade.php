@extends('layouts.page')

@section('content')

@include('components/breadcrumbs')

<section class="py-5">
  <div class="container">
    <header class="mb-5">
      <h1 class="display-4">Renunication of Citizenship</h1>
      <p class="lead">Learn about immigrating to Pakistan, eligibility, and guidelines.</p>
    </header>
    <article>
      <blockquote class="blockquote p-3 bg-light callout">Any citizen of Pakistan residing outside Pakistan, who is not a minor and is also a citizen or national of another country or has been given by the competent authority of another country any valid document assuring him/her citizenship or nationality of that other country, shall make a declaration of renunciation of citizenship on Form "X" in triplicate to the Directorate General Immigration &amp; Passports Islamabad through Pakistan Mission abroad.</blockquote>
      <p>The person concerned will cease to be citizen of Pakistan from the date of registration of his citizenship by Directorate General Immigration &amp; Passports Islamabad.</p>
      <p>Where a male person ceases to be citizen of Pakistan:</p>
      <ul>
        <li>Every such minor child of that person as is residing outside Pakistan shall, thereupon, cease to be a citizen of Pakistan provided any such child may, within one year of his completing the age of 21 years, make a declaration that he wishes to resume the citizenship of Pakistan and shall upon making of such declaration becomes a citizen of Pakistan.</li>
        <li>Every such minor of that person as is residing in Pakistan shall continue to be a citizen of Pakistan.</li>
      </ul>

      <h3 class="mt-5">Application Fee</h3>
      <p>The fee for renunciation of citizenship is Rs 500.</p>

      <h3 class="mt-5">Availability of Form "X"</h3>
      <ul>
        <li>Application form "X" can be obtained from Pakistani consulate or Mission abroad.</li>
        <li>This form is also available at Directorate General of Immigration and Passports Islamabad. </li>
        <li>You can also download this form <a class="underline" href="{{ route('immigration.downloads') }}">here</a>.</li>
      </ul>

      <h3 class="mt-5">Processing of Application</h3>
      <p>After being received at this Directorate General, your application shall be referred to concerned department for clearance and after such clearance renunciation certificate shall be prepared and dispatched to concerned foreign mission. Applicants are requested to submit their applications after carefully enclosing all required documents particularly original CNIC, Photocopies of Passports and assurance letter issued by concerned Foreign Government. Please mention the name of only those children in form "X" who are residing with you in a foreign country. Also enclose copies of those childrens Birth Certificates/NICOP/Pakistan Passports.</p>
      <p>If your application is complete in all respects delivery of renunciation certificate to you may take three months. However incomplete applications, non availability of CNIC or lake of supporting documents regarding children whose names are mentioned in Form "X" may cause delay in finalization of your case. You may check status of your application by sending email at: <a class="underline" href="mailto:immigration@dgip.gov.pk">immigration@dgip.gov.pk</a> after three months of submission of your application.</p>

      <p>The renunciation certificates in those cases have not yet been issued where replies are awaited from missions regarding providing missing documents/information. The reminders in all these cases have been issued and concerned missions are requested to expedite replies, so these cases may be finalized. Missions are requested to ensure that CNIC of a applicant is enclosed with each case at the time of its forwarding to this department. If they don't have it, first they get the NICOP/CNIC from NADRA and after that apply for the same.</p>
      <p>Further guide lines for forwarding the cases after ensuring that such cases are complete in all aspects, are provided as under...</p>

      <ul>
        <li>Please examine the all cases and ensure that all required documents are enclosed with each case as per attached list of required documents.</li>
        <li>CNIC/NICOP of the applicant in original required to be enclosed with the case. Please ensure that CNIC/NICOP is provided with each case.</li>
        <li>When applicant is not in possession of CNIC/NICOP, he/she may produce evidence that under what provision of law, the applicant is a citizens of Pakistan.</li>
        <li>Please note that children under the age of 21 years are not authorized to independently renounce their nationality under section 14-A Pakistan Renunciation Act 1951. Therefore, the separate cases for renunciation of nationality regarding minor children may not be forwarded. Applicant may be guided that when a male person renounces his nationality all his minor children who are residing with him in a foreign country cease to be Pakistani. This renunciation shall not effect the children of the applicant residing in Pakistan and they remain citizens of Pakistan.</li>
        <li>Where applicant specifically require inclusion of names of minor children residing in a foreign country he may be ask to mention these children in Form "X". In this case, RG-II/ Birth Certificate/NICOP/Form "S" may be provided any of as an evidence of minor children's being citizen of Pakistan. Minor children residing in Pakistan should not be included in Form "X".</li>
        <li>Names of the children may not be included in the form "X" of the female applicant (i.e. mother), as the names of the children are not included in Renunciation Certificate issued to female applicants.</li>
        <li>The required photograph may be attached with the case carefully and may be stapled properly so these are not detached or displaced causing delay in processing of the case.</li>
        <li>It has been observed that certain missions write same case number on all forwarded cases (which seems to be a file number) making it difficult for this office to track/trace an individual case with the help of case number. It is suggested that a separate tracking number or a serial number given to each individual case may be mentioned on that case so tracking/tracing of the case may been easy.</li>
        <li>The email address of the applicant (if available) may be included in forwarding letter so this department may also contact the applicant directly if some information/documents are needed.</li>
        <li>The applicants may please be provided with email address of this department (immigration@dgip.gov.pk) so they may contact for checking status of their applications.</li>
        <li>On filling of application, the Missions may immediatley forward the case to Directorate General of Immigration &amp; Passports, so that the cases may be finalized in stipulated time.</li>
        <li>Delivery of Renunciation Certificate and cancellation of Pakistani Passport.</li>
        <li>Applicants are not required to submit their original Pakistani Passport at the time of submission of their case for renunciation. Such passports are required to be submitted at the time of delivery of Renunciation Certificate. However, some times applicant's passports or his previous passports are sent with the case by concerned missions.</li>
        <li>Please ensure that each and every page of such passports is stamped with word "CANCELLED".</li>
        <li>After delivery of Renunciation Certificate the original passport may be obtained and forward to this Department after canceling each and every page of these passports including pages containing visas.</li>
      </ul>


    </article>
  </div>
</section>

@endsection