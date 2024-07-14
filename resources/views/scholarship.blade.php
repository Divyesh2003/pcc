@php
    $canonicalUrl = url()->current();
    $domain = Request::root();
@endphp
@section('title', 'Global Korea Scholarship | Apostille service & GKS Application Form-2024')
@section('meta_description', "If you are an Indian National looking to study in Korea for free, obtaining the GKS  Apostille service you could be Apply Now!")
@section('meta_keywords', "")
@section('index_tag')
    {{-- {!! '<meta name="robots" content="noindex, nofollow">' !!} --}}
@endsection
@section('json-ld')
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [ 
		{
			"@type": "ListItem",
			"position": 1,
			"name": "Home",
			"item": "{{ $domain }}"
		},
		{
			"@type": "ListItem",
			"position": 2,
			"name": "Global Korea Scholarship",
			"item": "{{ $canonicalUrl }}"
		}
		]
	}
</script>
@endsection
@extends('layouts.app')
@section('content')
@php
use App\Models\Youtube;
$youtubes = Youtube::all();
use Carbon\Carbon;
@endphp
<section class="home-banner-section">
    <div >
        <h1 class="nev_hed mt-m-0 d-flex justify-content-center">GLOBAL KOREA <span class="ms-2">SCHOLARSHIP</span>
        </h1>
        <h2 class="nev_subhed pt-2 pb-5 d-flex justify-content-center">
            <pre class="mb-0"><a href="/" class="fw-bold">Home</a>   >   </pre> Global Korea Scholarship
    </div>
</section>
    <!-- documenttranslation -->
    <div class="container documentattestation SCHOLARSHIP">
        <h6 class="button-hed my-3">APOSTILLE SERVICES IN POPULAR CITIES</h6>
        <div class="buttons">
            <button type="button" class="btn mb-2 ">Chennai</button>
            <button type="button" class="btn mb-2">Bangalore</button>
            <button type="button" class="btn mb-2">Pune</button>
            <button type="button" class="btn mb-2">Kolkata</button>
            <button type="button" class="btn mb-2">Ahmedabad</button>
            <button type="button" class="btn mb-2">Hyderabad</button>
            <button type="button" class="btn mb-2">Mumbai</button>
            <button type="button" class="btn mb-2">Delhi</button>
            <button type="button" class="btn mb-2">Kerala</button>
            <button type="button" class="btn mb-2">Surat</button>
        </div>
        <div class="my-4">
            <p>GKS stands for Global Korean Scholarship; these awards are given on merit basis to students outside South
                Korea who don't belong. GKS (Global Korea Scholarship) aims to offer scholarships for international
                students from outside Korea who wish to pursue higher education in South Korea, in order to strengthen
                international relationships, cultural exchange and provide quality education.</p>
        </div>
        <div>
            <h6>Global Korea Scholarship - Apply for this Scholarship</h6>
            <ul>
                <li class="mb-3 mb-md-0">Students who apply need not be Korean nationals.</li>
                <li class="mb-3 mb-md-0">Parents of students must not be Korean nationals.</li>
                <li class="mb-3 mb-md-0">Graduate students should not be older than 25 years old.</li>
                <li class="mb-3 mb-md-0">Students who are applying to postgraduate programs must be under 40 years old.</li>
                <li class="mb-3 mb-md-0">All previous formal education should be completed by students.</li>
                <li class="mb-3 mb-md-0">Students must have a minimum GPA of 80% in their previous education.</li>
            </ul>

            <h6>Why Should You Apply for GKS?</h6>
            <p  class="mb-3 mb-md-0">Apply for the Global Korea Scholarship program if you're planning to study abroad for many reasons.
                Firstly, this scholarship program offers full scholarships that cover tuition fees, living expenses and
                other benefits so international students can pursue undergraduate or graduate studies in South Korea
                without incurring further debt.</p>
            <p class="mb-3 mb-md-0">Another key advantage is that this program gives students an incredible opportunity to study in a country
                with such a rich culture and economy as South Korea. Furthermore, language training as well as cultural
                immersion activities help students adapt quickly to academic life in South Korea.</p>
            <p class="mb-3 mb-md-0">One of the hallmarks of the gks apostille services (GKS) program is providing access to top-quality
                education and research facilities across fields like engineering, science, humanities and social
                sciences. The GKS program also gives international students an incredible opportunity to experience new
                cultures while receiving financial support for their studies.</p>

            <h6 class="my-3">How to Apply for a GKS Scholarship?</h6>
            <p class="mb-3 mb-md-0">You can apply in two different ways.</p>
            <ul>
                <li class="mb-3 mb-md-0">Through Embassy Track</li>
                <li class="mb-3 mb-md-0">By University Track</li>
            </ul>
            <p class="mb-3 mb-md-0">You can apply to three colleges for a scholarship if you use the Embassy. These colleges offer the
                courses you're interested in.</p>
            <ul>
                <li class="mb-3 mb-md-0">Korean University Application is the place where students can apply to universities.</li>
                <li class="mb-3 mb-md-0">Apply to the universities of Korea after you have read through this page.</li>
                <li class="mb-3 mb-md-0">You can apply online for a scholarship after you have applied for university using the link Korean
                    Scholarship.</li>
            </ul>
            <h6>Documents Needed for Global Korea Scholarship Applications</h6>
            <p>Before sending any documents to GKS Scholarship, they must first be authenticated using an Apostille
                Certificate. Should there be any inquiries concerning its apostille process, feel free to reach out -
                for help, contact GKS Scholarship at [GK Scholarship Information Office].</p>
        </div>

         <div class="row align-items-center py-3">
            <div class="col-md-6 order-2 order-sm-1">
                <h6 >What is Apostille Stamp and what details are included in it?</h6>
                <div class="row align-items-sm-center mt-5 ">
                    <div class="col-2 align-items-start  ">
                        <img src="{{ asset('assets/img/image 28.png') }}" alt="" class="img-fluid ">
                    </div>
                    <div class="col-10 align-items-center ">
                        <p>A form of authentication, an apostille can be used to confirm the authenticity of documents.
                            It is usually for use in foreign countries. The apostille stamp is square in shape and is
                            printed with 11 standard fields. The top of the apostille is the word APOSTILLE. Below it is
                            the text Convention de La Haye du 5 octobre 1961. These fields will contain important
                            information that will be used to place the Apostille on the document.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-sm-2">
                <img src="{{ asset('assets/img/About-section.png') }}" class="img-fluid ">
            </div>
        </div>

        <div class="row align-items-center ">
            <div class="col-md-6 ">
                <img src="{{ asset('assets/img/Group 21873.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column p-4">
                <h6>The list of documents required for GKS Post Graduation Scholarship is below.</h6>
                <ol>
                    <li>Undergraduate Degree</li>
                    <li>Undergraduate Transcript</li>
                    <li>Birth Certificate</li>
                    <li>Government ID with Father's Nationality</li>
                    <li>Mother's Nationality Government ID</li>
                </ol>
            </div>
        </div>

        <div class="Application_Guidelines mt-0 mt-lg-5 ">
            <div class="row d-flex align-items-center text-center ">
                <div class="col-md-12 p-md-5 p-4">
                    <h6 class="mb-3">Global Korea Scholarship Application Guidelines 2024</h6>
                    <p class="my-2">Download and fill out the application form below and submit it as a checklist.</p>
                    <button type="button" class="btn align-items-center text-center mt-2  ">
                        <a href="#" class=" text-dark Reviews text-decoration-none ">Click Here
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <p class="p-text my-3">To apply for scholarships, applicants must fill out an online application and submit all
            pertinent
            documentation such as academic transcripts, letters of recommendation and personal statements. Selection
            decisions typically consider factors like academic performance and language proficiency along with research
            or work experiences as primary selection criteria.</p>
        <h6>All documents mentioned above must be apostille.</h6>
        <p class="p-text my-3">Undergraduate degree programs usually impose eligibility requirements that state applicants
            have completed at
            least one year of undergraduate study in their native country or obtained a high school diploma or
            equivalent, in addition to meeting other conditions like age limits, language proficiency requirements and
            health regulations.</p>
        <p class="p-text my-3">To apply for the GKS scholarship, applicants will need to submit an online application through
            the Korean
            government's official website. Typically this involves providing transcripts, language proficiency test
            scores, recommendation letters and any additional supporting documentation that might be requested during
            this application process.</p>
        <p class="p-text my-3">Before applying, it's crucial that you thoroughly assess all eligibility criteria and
            application
            requirements to ensure you meet them all. Furthermore, starting to prepare application materials early can
            make this competitive application process less intimidating for you.</p>

        {{-- <hr> --}}
        <div class="table-1 my-5">
            <table class="table ">
                <tr class=" heding">
                    <th class="px-2 px-lg-4">Ref No.</th>
                    <th class="px-2 px-lg-4">Document Name</th>
                    <th class="px-2 px-lg-4">Download link</th>
                </tr>
                <tr class="">
                    <td class="">Form 1</td>
                    <td class="">GKS Scholarship Application</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 2</td>
                    <td class="">Personal Statement</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 3</td>
                    <td class="">Study Plan</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 4</td>
                    <td class="">Research Proposal</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 5</td>
                    <td class="">Recommendation Letter</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 6</td>
                    <td class="">GKS Applicant Agreement</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 7</td>
                    <td class="">Letter of Invitation</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
                <tr class="">
                    <td class="">Form 8</td>
                    <td class="">Personal Medical Assessment</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                <tr class="">
                    <td class="">Form 9</td>
                    <td class="">Consent to Collect Personal Information</td>
                    <td class=""><a href="#"><img src="{{ asset('assets/img/Group 21875.png') }}" alt="" class="img-fluid"></a></td>
                </tr>
            </table>
        </div>
        <p class="p-text">To apply for the scholarship, candidates must complete an online application and submit all
            required
            documents, including academic transcripts, letters of recommendation, and a personal statement. Selection is
            based on academic performance, language proficiency, and other criteria such as research or work experience.
        </p>
        <p class="p-text my-4">Documents required for Global Korea Scholarship application.</p>
        <p>To apply for GKS Scholarship the applicants should submit the following documents after getting this
            apostilled.<br><span class="fw-bold">If you have any questions about Apostille you can reach out to Mob. +91
                9106614849
                Mob. +91 8460677376 Mob. +91 8750388388</span>
        </p>
        <div class="table-2 my-5">
            <table class="table ">
                <tr class=" heding ">
                    <th class="A px-2 px-lg-4 py-4">Ref No.</th>
                    <th class="B px-2 px-lg-4 py-4">Document Name</th>
                    <th class="C px-2 px-lg-4 py-4">Remarks</th>
                </tr>
                <tr class="">
                    <td class="A">Educational Document</td>
                    <td class="B">Diploma, Degree, Masters</td>
                    <td class="C apply">Candidates need to Apostille there Degree, Masters in-order to apply for GKS-2023
                        scholarship program. Candidates can apply here <a href="#">Apply Online</a></td>
                </tr>
                <tr class="">
                    <td class="A">Transcripts</td>
                    <td class="B">Transcript or Consolidated</td>
                    <td class="C apply">All GKS aspiants needs collect Transcripts or consolidated marksheet from university and
                        duly apostille the transcript or the marsheets to apply for the GKS scholarship. Candidates
                        can apply here <a href="#">Apply Online</a></td>
                </tr>
                <tr class="">
                    <td class="A">Age Proof</td>
                    <td class="B">Birth Certificate / Passport </td>
                    <td class="C apply">Candidates need to produce a birth certificate or passport to proof the age of candidates.
                        Birth certificate or the passport copy needs to be apostilled to submit for GKS program.
                        Candidates can apply here <a href="#">Apply Online</a></td>
                </tr>
                <tr class="">
                    <td class="A">Parents Citizenship Documents</td>
                    <td class="B">Election ID card, Ration Card, Passport,
                        Family Registar, Aadhar Card</td>
                    <td class="C apply">Candidates need to submit there parents any of the listed documents to proof the
                        citizenship. This document has to be apostilled. Candidates can apply here <a href="#">Apply Online</a></td>
                </tr>
            </table>
        </div>
        <p class="p-text mb-5 d-none d-md-block">These 5 documents are mandatory for applying for GKS Scholarship.Details information for
            applying Global
            Korea Scholarship 2023 <br>How to Apply <br>Instructions for filling the form for GKS Scholarship</p>

        <p class="p-text mb-4 mb-md-5 d-md-none">These 5 documents are mandatory for applying for GKS Scholarship.Details information for
                applying Global
                Korea Scholarship 2023 <br><br>How to Apply <br><br>Instructions for filling the form for GKS Scholarship</p>


            <p class="p-text mb-5 d-none d-md-block">Applicants interested in graduate (Masters, Research, R&D, and Ph.d. programs) can apply
            online on the
            Ministry of Education portal online application at Apply Online<br>Applicants need to submit 4 copies of the
            2023 GKS application form duly filled and submit to Embassy of South Korea with the supporting documents by
            March 2023. Extact dates are not announced.</p>
            <p class="p-text mb-5  d-md-none">Applicants interested in graduate (Masters, Research, R&D, and Ph.d. programs) can apply
                online on the
                Ministry of Education portal online application at Apply Online<br><br>Applicants need to submit 4 copies of the
                2023 GKS application form duly filled and submit to Embassy of South Korea with the supporting documents by
                March 2023. Extact dates are not announced.</p>
        <p class="fw-bold">Address:</p>
        <p class="fw-bold">Ms. Cho Sunghee</p>
        <p class="fw-bold"> Third Secretary</p>
        <p class="fw-bold">Political Affairs Department</p>
        <p class="fw-bold">Embassy of the Republic of Korea</p>
        <p class="fw-bold">9, Chandragupta Marg, Chanakyapuri Extension, New Delhi-110021.</p>
        <p class="fw-bold">Phone: 011-4200-7000 Email: india@mofa.go.kr</p>

        <h2 class="mt-4 mt-md-5">Documents required for postgraduates</h2>

        <div class="table-2 my-3">
            <table class="table ">
                <tr class=" heding ">
                    <th class="A px-2 px-lg-4 py-4">Ref No.</th>
                    <th class="B px-2 px-lg-4 py-4">Document Name</th>
                    <th class="C px-2 px-lg-4 py-4">Remarks</th>
                </tr>
                <tr class="">
                    <td class="A">Educational Document</td>
                    <td class="B">Marks sheet of Secondary Examination (Class X)</td>
                    <td class="C apply">Candidates need to apostille there Degree, Masters in-order to apply for GKS-2023 scholarship program</td>
                </tr>
                <tr class="">
                    <td class="A">Transcripts</td>
                    <td class="B">Transcript or Consolidated Marksheet Marks sheet of Higher Secondary Examination (Class XII).Last Grade Card available (if you are an appearing candidate) or degree certificate if already passed candidates.</td>
                    <td class="C apply">All GKS aspiants needs collect Transcripts or consolidated marksheet from university and duly apostille the transcript or the marsheets to apply for the GKS scholarship</td>
                </tr>
                <tr class="">
                    <td class="A">Age Proof</td>
                    <td class="B">Birth Certificate / Passport </td>
                    <td class="C apply">Candidates need to produce a birth certificate or passport to proof the age of candidates. Birth certificate or the passport copy needs to be apostilled to submit for GKS program</td>
                </tr>
                <tr class="">
                    <td class="A">Citizenship Documents</td>
                    <td class="B">Election ID card, Ration Card, Passport,
                        Family Registar, Aadhar Card</td>
                    <td class="C apply">Candidates need to submit Self-attested Proof of citizenship for self and parents (Voter ID card (apostille) / passport)listed documents to proof the citizenship. This document has to be apostilled</td>
                </tr>
            </table>
        </div>

        <p class="p-text mt-5">For further information about the scholarship, visit the site <a href="#">Study in Korea Apply Online</a>
        </p>
        <p class="p-text mt-5">For more informqation about national institute for Internation Education visit the site
            <a href="#">NIIED</a></p>
        <p class="p-text mt-5">For Visa and Immigration visit the site <a href="#">Visa Imigration</a></p>
        <p class="p-text mt-5">Things Decide GKS Scholarship selection</p>
        <p class="p-text mt-5">The specific requirements and application procedures for the Global Korea Scholarship
            (GKS) program may vary depending on the country of origin and the level of study (undergraduate, graduate,
            or research program) chosen by the applicant. However, some general checklist items that may be required for
            the GKS application are:</p>
        <p class="p-text mt-5">Eligibility criteria: Check if you meet the eligibility requirements for the GKS program.
            These may include academic requirements, age limits, and health requirements.</p>
        <p class="p-text mt-5">Research universities and programs: Identify the Korean universities and programs that
            are available for your chosen level of study and research your potential field of study and professors that
            match your interest.</p>
        <p class="p-text mt-5">Required documents: Gather all the required documents such as academic transcripts,
            diplomas, certificates of proficiency in Korean or English, letters of recommendation, personal statement,
            research proposal, etc.</p>
        <p class="p-text mt-5">Language proficiency: Check the language proficiency requirements and take the necessary
            language proficiency tests like TOPIK or TOEFL to prove your proficiency in Korean or English.</p>
        <p class="p-text mt-5">Online application: Create an account and submit an online application through the GKS
            application portal. Follow the instructions carefully and fill in all the required information accurately.
        </p>
        <p class="p-text mt-5">Submit the required documents: Submit all required documents, including the application
            form and required documents, online or through the Korean embassy or consulate in your home country.</p>
        <p class="p-text mt-5">Interview: If you are shortlisted, prepare for an interview with the Korean embassy or
            consulate in your home country.</p>
        <p class="p-text mt-5">Follow-up: After submitting the application, check the status of your application
            regularly and follow up with any requests for additional information or documents.</p>
        <p class="p-text mt-5">Remember that the above checklist items may not be exhaustive, and you should always
            check the specific requirements and procedures for your country and level of study. Good luck!</p>
        <p class="p-text mt-5">All the documentations should be either in Korean or in English, other languages are not
            accepted.</p>
        <p class="p-text mt-5">Applicant’s English name MUST match the name on their passport.</p>
        <p class="p-text mt-5">Letter of recommendation should be from 2 different recommenders, Who assess your
            academic performance thoroughly, The recommendation letters must be sealed in an envelope and be submitted
            to the Embassy or University that conducts the first round of selection.</p>
 <!-- customer Review section -->
 <section class="customer-Review-section">
    <div class="container ">
        <h5 class="text-center section-title my-5">What’s our Customer says</h5>
        <!-- <div class="owl-carousel owl-theme"> -->
        <div class="row ">
            <div class="col-lg-3 customer-Review owl-carousel owl-theme">
            @foreach ($youtubes as $youtube)
                <div class="item">
                    <div class="card mx-auto text-center">
                        <div class="Review-img">
                            <iframe width="300" height="446" style="border-radius: 20px;"
                                src="https://youtube.com/embed/{{$youtube->url}}" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <h6 class="services-title mt-3">{{ $youtube->title }}</h6>
                        <p class="services-desc">{{ $youtube->description}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
        <!-- contact section -->
        <section class="contact-section mb-5">
            <div class="container">
                <div class="contact-wrapper1">
                    <h6 class="text-center contact-section-title">Contact Us</h6>
                    <form action="{{ route('contact.inquiry')}}" method="POST" id="contact" class="row justify-content-between align-items-center contact-form needs-validation" style="padding: 0px 6%;" enctype="multipart/form-data" novalidate>
                        @csrf()
                        @method('POST')
                        <div class="col-md-12 col-lg-6 mb-3 ">
                            <label for="exampleInputEmail1" class="my-2 d-none d-xl-block">First Name<span class="text-danger">*</span></label>
                            <input class="form-control" id="firstname" name="name" placeholder="Enter Firstname*" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a First Name
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                            <label for="lastname" class="my-2 d-none d-xl-block">Last Name<span class="text-danger">*</span></label>
                            <input class="form-control" name="lastname" placeholder="Enter Lastname*" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Last Name
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3 ps-lg-2">
                            <label for="email" class="my-2 d-none d-xl-block">Email<span class="text-danger">*</span></label>
                            <input class="form-control" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Enter Email*" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Email
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <label for="lastname" class="my-2 d-none d-xl-block">Phone Number<span class="text-danger">*</span></label>
                            <input class="form-control country_code" type="hidden" name="country_code" placeholder="Phone Number" value="" required>    
                            <input type="number" class="form-control mobile_code" id="mobile_code" name="phone" placeholder="Enter Phone Number" required>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Phone
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-12 mb-3 ps-lg-2">
                            <label for="lastname" class="my-2 d-none d-xl-block">Services<span class="text-danger">*</span></label>
                            <select class="form-select" name="services" id="services_model" required>
                                <option>Select Services</option>
                                <option value="Apostille Services" selected>Apostille Services</option>
                                <option value="Embassy Attestation Services">Embassy Attestation Services</option>
                                <option value="Document Translation">Document Translation</option>
                                <option value="Visa Services">Visa Services</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Services
                              </div>
                        </div>
                        <div class="col-12 mb-3" name="message">
                            <label for="message" class="my-2 d-none d-xl-block">Message<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="message" rows="3" placeholder="Type your message here*" required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please choose a Message
                              </div>
                        </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-3 mb-2">
                        <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    </div>
                    <div
                        class="col-12 col-md-4 col-lg-3 mb-4 mb-md-2 d-flex ml-auto justify-content-center md-justify-content-end">
                        <button class="btn custom-btn" name="contact">submit</button>
                    </div>
                </form>
                </div>
            </div>
        </section>
    </div>
@endsection
