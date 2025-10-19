@extends('Frontend.layouts.master')

@section('title', 'Canada Destinations - BSAT')

@section('content')

<!-- Modal Search Start -->
    <div
      class="modal fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Search by keyword
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body d-flex align-items-center bg-primary">
            <div class="input-group w-75 mx-auto d-flex">
              <input
                type="search"
                class="form-control p-3"
                placeholder="keywords"
                aria-describedby="search-icon-1"
              />
              <span
                id="search-icon-1"
                class="btn bg-light border nput-group-text p-3"
                ><i class="fa fa-search"></i
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb_service">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div> -->
    <!-- Header End -->

 
    <article class="container article my-5">
        <a href="javascript:void(0);" onclick="window.history.back()" class="btn btn-transparent d-flex align-items-center">
            <strong><i class="bi bi-arrow-left me-2"></i> Back</strong>
        </a>

        <h2 class="title mb-4">Study in Canada – Barakah Study Abroad & Tours (BSAT)</h2>
        <p>Canada is one of the most desirable destinations for international students, offering a balance of academic excellence, affordability, safety, and long-term career prospects. With globally recognized institutions, modern campus facilities, and inclusive multicultural communities, Canada opens doors to quality education and rewarding careers worldwide.</p>
          <img
            src="../img/img_pic/3.3 Canada/Whisk_698882cb9a.jpg"
            alt="Pre and Post Arrival Support"
            class="img-fluid"
          />
        <p><strong>BSAT</strong> helps students navigate university selection, SOP writing, visa applications, scholarships, and pre-departure guidance — supporting you at every step of your journey to Canada.</p>

        <hr class="my-5">

        <h3>Key Benefits</h3>
        <ul>
            <li>Globally recognized universities and colleges</li>
            <li>Affordable tuition and living costs</li>
            <li>Safe and welcoming environment</li>
            <li>Part-time work allowed during studies (20 hours/week)</li>
            <li>Post-Graduation Work Permit (PGWP) of up to 3 years</li>
            <li>Pathways to Permanent Residency (PR)</li>
            <li>Strong multicultural communities and student support</li>
        </ul>

        <h3 class="mt-5">7 Reasons to Study in Canada</h3>
        <ol>
            <li><b>World-Class Education</b> – High academic standards, research opportunities, and globally recognized degrees.</li>
            <li><b>Affordable Tuition & Living</b> – Cost-effective compared to other English-speaking countries.</li>
            <li><b>Safe and Welcoming Environment</b> – Ranked among the safest countries for international students.</li>
            <li><b>Work While Studying</b> – Gain experience and manage expenses legally during semesters and breaks.</li>
            <li><b>Post-Graduation Work Opportunities</b> – PGWP allows up to 3 years of work experience in Canada.</li>
            <li><b>Pathway to Permanent Residency</b> – Programs like Express Entry and Provincial Nominee Programs.</li>
            <li><b>Cultural Diversity & Support</b> – Inclusive communities and excellent student services.</li>
        </ol>

        <hr class="my-5">

        <h3>Study Cost in Canada</h3>
        <h5>Tuition Fees by Degree Level (Per Year)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Program Level</th>
                <th>Tuition Range (CAD)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Bachelor's</td><td>CAD 15,000 – 25,000</td></tr>
            <tr><td>Master's</td><td>CAD 17,000 – 30,000</td></tr>
            <tr><td>Doctorate (PhD)</td><td>CAD 20,000 – 35,000</td></tr>
            </tbody>
        </table>

        <h5 class="mt-4">Estimated Living Expenses (Per Month)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Category</th>
                <th>Estimated Cost (CAD)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Housing & Utilities</td><td>CAD 400 – 800</td></tr>
            <tr><td>Food & Groceries</td><td>CAD 150 – 250</td></tr>
            <tr><td>Transportation</td><td>CAD 80 – 120</td></tr>
            <tr><td>Health Insurance & Others</td><td>CAD 100 – 200</td></tr>
            <tr class="fw-bold"><td>Total (Monthly)</td><td>CAD 730 – 1,400</td></tr>
            <tr class="fw-bold"><td>Total (Annually)</td><td>CAD 8,760 – 16,800</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Admission Requirements</h3>
        <p>Admission requirements vary by institution and program level, but generally include academic transcripts, proof of English language proficiency, SOPs, letters of recommendation, and other supporting documents.</p>

        <h5>Table 1: Necessary Application Documents</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Document Type</th>
                <th>Undergraduate (Bachelor’s)</th>
                <th>Graduate (Master’s / PhD)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Academic Transcripts</td><td>SSC & HSC results</td><td>Bachelor’s/Master’s transcripts</td></tr>
            <tr><td>Minimum GPA</td><td>3.0+ preferred</td><td>2.75 – 3.5</td></tr>
            <tr><td>Statement of Purpose</td><td>Recommended</td><td>Required</td></tr>
            <tr><td>Letters of Recommendation</td><td>Optional</td><td>2–3 Required</td></tr>
            <tr><td>Resume / CV</td><td>Optional</td><td>Required</td></tr>
            <tr><td>Valid Passport</td><td>Required</td><td>Required</td></tr>
            <tr><td>Proof of Funds</td><td>Required</td><td>Required</td></tr>
            <tr><td>Additional Documents</td><td>N/A</td><td>Research proposal, portfolio (if required)</td></tr>
            </tbody>
        </table>

        <h5>Table 2: English Language Proficiency</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Test</th>
                <th>Undergraduate</th>
                <th>Graduate</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>IELTS</td><td>6.0 – 6.5</td><td>6.5 – 7.0</td></tr>
            <tr><td>TOEFL iBT</td><td>80 – 90</td><td>90 – 100</td></tr>
            <tr><td>PTE</td><td>50 – 58</td><td>58 – 65</td></tr>
            <tr><td>Duolingo</td><td>95 – 105</td><td>105 – 120</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Visa Requirements (Study Permit)</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Requirement</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Letter of Acceptance (LOA)</td><td>From a recognized DLI in Canada</td></tr>
            <tr><td>Valid Passport</td><td>Valid for full duration of study</td></tr>
            <tr><td>Proof of Funds</td><td>Bank statement, sponsor affidavit, or student loan</td></tr>
            <tr><td>Tuition Payment Receipt</td><td>Optional but recommended</td></tr>
            <tr><td>English Proficiency Test</td><td>IELTS, TOEFL, Duolingo, or equivalent</td></tr>
            <tr><td>Passport-Size Photo</td><td>Canadian visa specifications</td></tr>
            <tr><td>Medical Exam</td><td>Mandatory for certain countries or programs >6 months</td></tr>
            <tr><td>Police Clearance</td><td>May be requested</td></tr>
            <tr><td>SOP / Study Plan</td><td>Explain goals and ties to home country</td></tr>
            <tr><td>IMM Forms</td><td>IMM 1294, IMM 5645, etc.</td></tr>
            <tr><td>Biometrics</td><td>Fingerprint and photo at VAC</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Intakes in Canada</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Intake</th>
                <th>Start Time</th>
                <th>Application Deadline</th>
                <th>Availability</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Fall</td><td>September</td><td>Dec – Mar (prior year)</td><td>Most courses, scholarships & seats</td></tr>
            <tr><td>Winter</td><td>January</td><td>July – Sep</td><td>Good course availability</td></tr>
            <tr><td>Summer</td><td>May</td><td>Oct – Jan</td><td>Limited programs, mostly diplomas</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Work & Post-Graduation Opportunities</h3>
        <ul>
            <li>On-Campus Jobs: Available without work permit</li>
            <li>Off-Campus Work: Up to 20 hours/week during semesters, full-time during breaks</li>
            <li>Co-op / Internship Programs: Gain practical experience</li>
            <li>Post-Graduation Work Permit (PGWP): Up to 3 years open work permit</li>
            <li>Permanent Residency Pathways: Express Entry, Provincial Nominee Programs, Atlantic Immigration Program, Quebec Experience Program</li>
        </ul>

        <hr class="my-5">

        <h3>Scholarships & Financial Aid</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Entrance Scholarships</td><td>Automatic based on admission academic performance</td></tr>
            <tr><td>Merit-Based</td><td>GPA, leadership, extracurricular achievements</td></tr>
            <tr><td>Need-Based Grants</td><td>For documented financial need</td></tr>
            <tr><td>Program-Specific</td><td>Faculty-specific awards (e.g., Engineering, IT)</td></tr>
            <tr><td>Government Scholarships</td><td>Vanier, Banting, etc.</td></tr>
            <tr><td>Research & Teaching Assistantships</td><td>Master’s/PhD academic roles</td></tr>
            </tbody>
        </table>

        <h5 class="mt-4">Notable Scholarships</h5>
        <ul>
            <li>Lester B. Pearson International Scholarship – University of Toronto</li>
            <li>York University International Student Scholarship</li>
            <li>UBC International Major Entrance Scholarship (IMES)</li>
            <li>Humber College International Entrance Scholarship</li>
            <li>Vanier Canada Graduate Scholarships (PhD)</li>
        </ul>

        <hr class="my-5">

        <h3>Popular Courses & Career Pathways</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Program Area</th>
                <th>Career Pathways</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Computer Science & IT</td><td>Software Developer, Data Analyst, Cybersecurity Specialist</td></tr>
            <tr><td>Engineering</td><td>Civil, Mechanical, Electrical, Chemical Engineers</td></tr>
            <tr><td>Business & Finance</td><td>Accountant, Business Analyst, Financial Planner</td></tr>
            <tr><td>Health Sciences & Nursing</td><td>Registered Nurse, Public Health Consultant, Lab Technician</td></tr>
            <tr><td>Hospitality & Tourism</td><td>Hotel Manager, Travel Consultant, Event Coordinator</td></tr>
            <tr><td>Media & Communication</td><td>Digital Marketer, Journalist, Content Creator</td></tr>
            <tr><td>Environmental Studies</td><td>Sustainability Consultant, Urban Planner, Researcher</td></tr>
            <tr><td>AI, Data Science & Analytics</td><td>Data Scientist, Machine Learning Engineer, AI Specialist</td></tr>
            <tr><td>Supply Chain & Logistics</td><td>Logistics Coordinator, Procurement Officer, Operations Manager</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>How BSAT Helps You Study in Canada</h3>
        <ul>
            <li>Career Counseling: Choose the right program and destination</li>
            <li>University & Course Selection: Match institutions with profile, goals & budget</li>
            <li>Application Assistance: SOPs, LORs, CVs, online submission</li>
            <li>Scholarship Guidance: Identify funding & prepare strong applications</li>
            <li>Visa Application Support: Document prep, online application, interview prep</li>
            <li>Mock Visa Interviews: Prepare for embassy questions</li>
            <li>Pre-Departure Briefing: Travel, accommodation, and student life guidance</li>
            <li>Post-Arrival Support: Airport pickup, housing assistance, connect with BSAT alumni</li>
        </ul>

        <hr class="my-5">

        <h3>Top Universities in Canada</h3>
        <h5>Public Universities</h5>
        <ul>
            <li>University of Toronto – Ontario</li>
            <li>University of British Columbia – British Columbia</li>
            <li>McGill University – Quebec</li>
            <li>University of Alberta – Alberta</li>
            <li>McMaster University – Ontario</li>
            <li>University of Waterloo – Ontario</li>
            <li>Western University – Ontario</li>
            <li>Queen’s University – Ontario</li>
            <li>Simon Fraser University – British Columbia</li>
            <li>Dalhousie University – Nova Scotia</li>
            <li>University of Ottawa – Ontario</li>
            <li>University of Calgary – Alberta</li>
            <li>University of Manitoba – Manitoba</li>
            <li>University of Saskatchewan – Saskatchewan</li>
            <li>Memorial University – Newfoundland</li>
            <li>York University – Ontario</li>
            <li>University of Victoria – British Columbia</li>
            <li>Carleton University – Ontario</li>
            <li>Concordia University – Quebec</li>
            <li>University of Guelph – Ontario</li>
            <li>Toronto Metropolitan University – Ontario</li>
            <li>Brock University – Ontario</li>
            <li>University of Windsor – Ontario</li>
            <li>University of Regina – Saskatchewan</li>
            <li>Laurentian University – Ontario</li>
        </ul>

        <h5 class="mt-4">Private / Independent Universities</h5>
        <ul>
            <li>Quest University Canada – Liberal arts focus</li>
            <li>Trinity Western University – Christian private university (BC)</li>
            <li>Canadian Mennonite University – Christian university (Manitoba)</li>
            <li>St. Mary’s University (Calgary) – Catholic university</li>
            <li>King’s University (Edmonton) – Christian private university</li>
        </ul>
    </article>





    <!-- Article Content End -->
    
    <!-- FAQs Start -->
    <div class="container my-5">
        <h2 class="mb-4">Frequently Asked Questions (FAQs)</h2>
        <div class="accordion" id="faqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                        1. What are the main intakes in Canada for international students?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Canada offers three primary intakes: Fall (September), Winter (January), and Summer (May). Fall is the most popular and has the widest range of courses and scholarships.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        2. Do I need to take IELTS or other English language tests?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. Most institutions require proof of English proficiency. IELTS, TOEFL, PTE, and Duolingo English Test are widely accepted. Some colleges may waive this if you’ve studied in English previously.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        3. Can I work while studying in Canada?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. International students can work up to 20 hours/week during academic sessions and full-time during scheduled breaks. Many programs also include co-op or internship opportunities.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        4. What are the post-study work options after graduation?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Graduates from eligible programs can apply for a Post-Graduation Work Permit (PGWP) of up to 3 years. This Canadian work experience helps build a pathway to Permanent Residency (PR).
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                        5. How does BSAT support me through the Canada application process?
                    </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        BSAT offers step-by-step support including university selection, application assistance, SOP writing, visa processing, and pre-departure guidance — ensuring a smooth and successful journey to Canada.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- FAQs End -->




    <!-- Journey today Start -->
    <div class="container-fluid team py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">
            You may be eligible for up to 50% Scholarship at a renowned
            University Abroad
          </h4>
          <p class="mb-0">
            Check your eligibility and receive end to end assisstance for FREE!
          </p>
          <a href="../apply_form.html" target="_blank" class="learn-more btn btn-primary px-5 py-3 mt-5 h6">
            Get a Free Profile Assessment <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- End of container -->
    </div>
    <!--  Journey today End -->

@endsection