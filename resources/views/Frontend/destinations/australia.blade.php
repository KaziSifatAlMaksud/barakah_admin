@extends('Frontend.layouts.master')

@section('title', 'Australia Destinations - BSAT')

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

        <h2 class="title mb-4">Study in USA – Barakah Study Abroad & Tours (BSAT)</h2>
        <p>The United States is home to many of the world’s top-ranking universities, cutting-edge research facilities, and diverse cultural experiences. A degree from a U.S. institution is globally recognized and can open doors to prestigious job opportunities and further academic advancement.</p>
               
          <img
            src="../img/img_pic/3.1 USA/Whisk_761758a91f.jpg"
            alt="Pre and Post Arrival Support"
            class="img-fluid"
          />
        <p><strong>BSAT</strong> helps students navigate programs, scholarships, and visa processes required to study in the U.S. — guiding you from application to arrival and beyond.</p>

        <hr class="my-5">

        <h3>Key Benefits</h3>
        <ul>
            <li>Access to globally ranked universities and colleges</li>
            <li>Hands-on research and internship opportunities</li>
            <li>OPT & CPT work options during and after graduation</li>
            <li>Exposure to diverse cultures and global networks</li>
            <li>Wide range of scholarships and funding options</li>
        </ul>

        <h3 class="mt-5">7 Reasons to Study in the USA</h3>
        <ol>
            <li><b>Globally Ranked Institutions</b> – Home to most of the world’s top 100 universities.</li>
            <li><b>Cutting-Edge Research Opportunities</b> – Universities are deeply involved in innovation across disciplines.</li>
            <li><b>Career-Focused Education</b> – Practical training, OPT/CPT programs, job placement support.</li>
            <li><b>Cultural Diversity</b> – Multicultural environment promoting inclusivity and global exposure.</li>
            <li><b>Flexible Education System</b> – Freedom to choose courses and tailor your degree.</li>
            <li><b>Scholarship & Funding Access</b> – Wide range of financial aid options.</li>
            <li><b>Post-Study Work & PR Pathways</b> – OPT, STEM extension, and H-1B visa options.</li>
        </ol>

        <hr class="my-5">

        <h3>Study Cost in USA</h3>
        <h5>Tuition Fees by Degree Level (Per Year)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Program Level</th>
                <th>Tuition Range (USD)</th>
                <th>Notes</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Bachelor's</td><td>$15,000 – $25,000</td><td>Varies by major and institution</td></tr>
            <tr><td>Master's</td><td>$20,000 – $30,000</td><td>MBA & STEM programs may cost more</td></tr>
            <tr><td>Doctorate (PhD)</td><td>$25,000 – $45,000</td><td>Often includes funding/assistantships</td></tr>
            </tbody>
        </table>

        <h5 class="mt-4">Estimated Living Expenses (Per Month)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Category</th>
                <th>Estimated Cost (USD)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Housing & Utilities</td><td>$300 – $600</td></tr>
            <tr><td>Food & Groceries</td><td>$200 – $300</td></tr>
            <tr><td>Transportation</td><td>$50 – $100</td></tr>
            <tr><td>Health Insurance & Others</td><td>$100 – $200</td></tr>
            <tr class="fw-bold"><td>Total (Monthly)</td><td>$650 – $1,100</td></tr>
            <tr class="fw-bold"><td>Total (Annually)</td><td>$7,800 – $13,200</td></tr>
            </tbody>
        </table>
        <div class="graph-placeholder border rounded p-5 text-center my-4 bg-light">
            <i class="bi bi-bar-chart fs-1 text-primary"></i>
            <p class="mt-3">[Graph Placeholder – Cost Breakdown]</p>
        </div>

        <hr class="my-5">

        <h3>Admission Requirements</h3>
        <p>To apply for higher education in the United States, students must submit academic records and supporting documents. Requirements differ for undergraduate and graduate/doctoral applicants.</p>

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
            <tr><td>Academic Certificates</td><td>SSC & HSC transcripts</td><td>Bachelor’s/Master’s transcripts</td></tr>
            <tr><td>Minimum GPA/CGPA</td><td>3.0+ preferred</td><td>2.75 – 3.5</td></tr>
            <tr><td>Statement of Purpose</td><td>Recommended</td><td>Required</td></tr>
            <tr><td>Letters of Recommendation</td><td>Optional</td><td>2–3 Required</td></tr>
            <tr><td>Resume / CV</td><td>Optional</td><td>Required</td></tr>
            <tr><td>Valid Passport</td><td>Required</td><td>Required</td></tr>
            <tr><td>Proof of Financial Support</td><td>Required</td><td>Required</td></tr>
            <tr><td>Additional Documents</td><td>N/A</td><td>GRE/GMAT, Research Proposal, Portfolio</td></tr>
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
            <tr><td>IELTS</td><td>6.0 – 6.5</td><td>6.5 – 7.5</td></tr>
            <tr><td>TOEFL iBT</td><td>70 – 80</td><td>80 – 100</td></tr>
            <tr><td>PTE</td><td>50 – 58</td><td>58 – 65</td></tr>
            <tr><td>Duolingo</td><td>100 – 110</td><td>110 – 120</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Visa Requirements (F-1 Visa)</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Requirement</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>I-20 Form</td><td>Issued by U.S. university after admission</td></tr>
            <tr><td>DS-160 Form</td><td>Completed online visa application</td></tr>
            <tr><td>SEVIS Fee (I-901)</td><td>$350</td></tr>
            <tr><td>Passport</td><td>Valid for 6+ months beyond study period</td></tr>
            <tr><td>Visa Fee (MRV)</td><td>$185</td></tr>
            <tr><td>Photo</td><td>2”x2” passport-size</td></tr>
            <tr><td>Interview Appointment</td><td>Confirmation page</td></tr>
            <tr><td>Financial Documents</td><td>Bank statement/sponsorship letter</td></tr>
            <tr><td>Academic Documents</td><td>Transcripts, certificates, test scores</td></tr>
            <tr><td>Ties to Home Country</td><td>Proof of return intent</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Scholarships & Funding</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Merit-Based Scholarships</td><td>Awarded for academic excellence</td></tr>
            <tr><td>Need-Based Scholarships</td><td>For students with financial need</td></tr>
            <tr><td>University Grants</td><td>Directly from universities</td></tr>
            <tr><td>Research/Teaching Assistantships</td><td>Paid positions for graduate students</td></tr>
            <tr><td>Government Scholarships</td><td>e.g., Fulbright Program</td></tr>
            <tr><td>External Scholarships</td><td>AAUW, World Bank, etc.</td></tr>
            <tr><td>Work-Study</td><td>On-campus jobs</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Intakes in the USA</h3>
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
            <tr><td>Fall</td><td>Aug – Sep</td><td>Dec – Apr (prior year)</td><td>Widest course & scholarships</td></tr>
            <tr><td>Spring</td><td>Jan</td><td>Aug – Oct</td><td>Many programs, fewer seats</td></tr>
            <tr><td>Summer</td><td>May – Jun</td><td>Jan – Mar</td><td>Limited courses, short programs</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Top Courses</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr><th>Field</th><th>Popular Programs</th></tr>
            </thead>
            <tbody>
            <tr><td>Engineering & Tech</td><td>Computer Science, Mechanical, Electrical</td></tr>
            <tr><td>Business & Mgmt</td><td>MBA, Finance, Business Analytics</td></tr>
            <tr><td>Health Sciences</td><td>Public Health, Nursing, Biomedical</td></tr>
            <tr><td>Social Sciences</td><td>Psychology, Sociology, IR, Political Science</td></tr>
            <tr><td>STEM</td><td>Data Science, AI, Cybersecurity</td></tr>
            <tr><td>Media & Arts</td><td>Film, Graphic Design, Music Production</td></tr>
            <tr><td>Education & Humanities</td><td>English, History, Linguistics</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Top Universities</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr><th>#</th><th>University Name</th><th>Type</th></tr>
            </thead>
            <tbody>
            <tr><td>1</td><td>MIT</td><td>Private</td></tr>
            <tr><td>2</td><td>Stanford University</td><td>Private</td></tr>
            <tr><td>3</td><td>Harvard University</td><td>Private</td></tr>
            <tr><td>4</td><td>Caltech</td><td>Private</td></tr>
            <tr><td>5</td><td>University of Chicago</td><td>Private</td></tr>
            <tr><td>6</td><td>Princeton University</td><td>Private</td></tr>
            <tr><td>7</td><td>Yale University</td><td>Private</td></tr>
            <tr><td>8</td><td>Columbia University</td><td>Private</td></tr>
            <tr><td>9</td><td>University of Pennsylvania</td><td>Private</td></tr>
            <tr><td>10</td><td>UC Berkeley</td><td>Public</td></tr>
            <!-- Continue up to 30 as needed -->
            </tbody>
        </table>
        </article>




    <!-- Article Content End -->
    <!-- FAQs Start -->
    <div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
            <div class="text-center mb-5">
            <h4 class="text-primary">Some Important FAQ's</h4>
            <h1 class="display-5 mb-0">Common Frequently Asked Questions</h1>
            </div>

            <div class="accordion" id="accordionExample">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Q: What are the main intakes for studying in the USA?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: U.S. universities offer three intakes: Fall (August/September), Spring (January), and Summer (May/June). Fall is the most popular with the widest course and scholarship availability.
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q: Do I need to take IELTS, TOEFL, or other English tests?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Yes, most universities require proof of English proficiency. IELTS, TOEFL, Duolingo, and PTE are accepted. Some may waive this if your previous education was in English.
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q: How early should I start my U.S. university application?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Ideally, you should start your application process 8–12 months before your desired intake. This allows enough time for test prep, documentation, university deadlines, and visa processing.
                </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Q: Can I work part-time as a student in the USA?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Yes. On an F-1 visa, students can work up to 20 hours per week on campus during semesters, and full-time during vacations. After graduation, students may apply for OPT or STEM OPT to work full-time in the U.S.
                </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Q: How does BSAT help students applying to the USA?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: BSAT provides complete support — from helping you choose universities and write SOPs, to preparing financial documents, scheduling visa interviews, and offering pre-departure guidance.
                </div>
                </div>
            </div>

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