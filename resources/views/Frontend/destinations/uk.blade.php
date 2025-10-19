@extends('Frontend.layouts.master')

@section('title', 'UK Destinations - BSAT')

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

        <h2 class="title mb-4">Study in UK – Barakah Study Abroad & Tours (BSAT)</h2>
        <p>The United Kingdom is one of the world’s most prestigious education destinations, known for its rich academic history, globally recognized degrees, and innovative teaching methods. Home to some of the world’s top universities, the UK offers students an opportunity to learn from renowned faculty, engage in cutting-edge research, and gain an education that is respected worldwide.</p>
        <p>Studying in the UK also means shorter degree durations, which can save both time and money — most undergraduate degrees take 3 years and master’s degrees just 1 year. Students benefit from a diverse, multicultural environment, excellent student support services, and a chance to experience British culture and heritage.</p>
          <img
            src="../img/img_pic/3.2 United Kingdom/Whisk_0ad5784c9c.jpg"
            alt="Pre and Post Arrival Support"
            class="img-fluid"
          />
        <p>With the introduction of the Post-Study Work Visa (Graduate Route), students can now stay and work in the UK for up to 2 years after graduation — enhancing their career prospects and immigration pathways.</p>

        <hr class="my-5">

        <h3>7 Reasons to Study in the UK</h3>
        <ol>
            <li><b>Globally Respected Universities</b> – UK institutions like Oxford, Cambridge, and Imperial College London consistently rank among the world’s best, offering degrees recognized worldwide.</li>
            <li><b>Shorter Course Duration</b> – Most bachelor’s programs take just 3 years, and master’s degrees can be completed in 1 year, helping reduce tuition and living costs.</li>
            <li><b>Post-Study Work Opportunities</b> – The Graduate Route Visa allows international students to stay and work in the UK for up to 2 years after graduation (3 years for PhD graduates).</li>
            <li><b>Flexible Program Options</b> – Choose from thousands of programs across disciplines, with options to tailor your studies through electives, research, or combined degrees.</li>
            <li><b>Multicultural Experience</b> – The UK is a global hub for international students, offering a rich blend of cultures, ideas, and networking opportunities in every city and campus.</li>
            <li><b>Part-Time Work While Studying</b> – Students can legally work up to 20 hours per week during academic terms and full-time during holidays to support their expenses.</li>
            <li><b>Gateway to Europe & the World</b> – The UK’s location and global connections make it a great launchpad for internships, international careers, and travel across Europe.</li>
        </ol>

        <hr class="my-5">

        <h3>Cost of Studying in the UK</h3>
        <h5>Estimated Tuition Fees (Per Year)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Program Level</th>
                <th>Tuition Range (£)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Bachelor’s</td><td>£10,000 – £18,000</td></tr>
            <tr><td>Master’s</td><td>£11,000 – £20,000</td></tr>
            <tr><td>Doctorate (PhD)</td><td>£15,000 – £25,000</td></tr>
            </tbody>
        </table>

        <h5 class="mt-4">Estimated Living Expenses (Per Month)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>City</th>
                <th>Estimated Cost (£)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>London</td><td>£1,200 – £1,500</td></tr>
            <tr><td>Other cities</td><td>£800 – £1,200</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Admission Requirements</h3>
        <p>To apply to a UK university or college, international students must meet academic eligibility, language proficiency, and documentation standards set by the institution. Requirements vary by level (undergraduate, postgraduate, or PhD), but most universities follow a similar structure.</p>

        <h5>Undergraduate (Bachelor’s)</h5>
        <ul>
            <li>Completed 12 years of schooling (HSC or equivalent)</li>
            <li>Minimum GPA or grade requirement (varies by university)</li>
            <li>Proof of English language proficiency</li>
        </ul>

        <h5>Postgraduate (Master’s)</h5>
        <ul>
            <li>Bachelor’s degree from a recognized institution</li>
            <li>Minimum 2.75 – 3.5 CGPA (depending on university)</li>
            <li>English language test results (IELTS or equivalent)</li>
            <li>Statement of Purpose (SOP) and CV</li>
            <li>1–2 Letters of Recommendation (LORs)</li>
        </ul>

        <h5>PhD Programs</h5>
        <ul>
            <li>Master’s degree with strong academic background</li>
            <li>Research proposal and academic references</li>
            <li>Supervisor acceptance (in some cases)</li>
            <li>Minimum English Language Requirements</li>
        </ul>

        <h5>English Language Test Scores</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Test</th>
                <th>Undergraduate</th>
                <th>Postgraduate</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>IELTS</td><td>6.0 – 6.5</td><td>6.5 – 7.0</td></tr>
            <tr><td>TOEFL iBT</td><td>80 – 90</td><td>90 – 100</td></tr>
            <tr><td>PTE Academic</td><td>58 – 60</td><td>60 – 65</td></tr>
            <tr><td>Duolingo</td><td>100 – 110</td><td>110 – 120</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Visa Requirements (Student Visa)</h3>
        <p>International students must apply for a Student Visa through the UKVI system. BSAT assists with document preparation, financial verification, visa application, and interview support.</p>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Requirement</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Confirmation of Acceptance for Studies (CAS)</td><td>Official letter issued by your university</td></tr>
            <tr><td>Valid Passport</td><td>Must cover the full duration of your studies</td></tr>
            <tr><td>Proof of Funds</td><td>Bank statement showing ability to cover tuition + living expenses for 9 months</td></tr>
            <tr><td>Tuition Fee Payment Receipt</td><td>Optional, improves visa strength</td></tr>
            <tr><td>IELTS/TOEFL/PTE/Duolingo Certificate</td><td>Proof of English language proficiency</td></tr>
            <tr><td>TB Test Report</td><td>Required for students from specific countries</td></tr>
            <tr><td>Parental Consent Letter</td><td>For students under 18</td></tr>
            <tr><td>Visa Application Form</td><td>Completed online</td></tr>
            <tr><td>Visa Fee & IHS Payment</td><td>Immigration Health Surcharge covers NHS services</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Intakes in the UK</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Intake</th>
                <th>Start Time</th>
                <th>Availability</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>September (Fall)</td><td>September</td><td>Widest range of courses & scholarships. Most competitive.</td></tr>
            <tr><td>January (Winter)</td><td>January</td><td>Second most popular. Great for late applicants.</td></tr>
            <tr><td>May (Summer)</td><td>April/May</td><td>Limited courses, mostly business, IT, and foundation programs.</td></tr>
            <tr><td>June/July (Occasional)</td><td>June or July</td><td>Rare, only a few colleges offer short diplomas or pre-sessional English.</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Post-Study Work Opportunities (Graduate Route)</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Qualification</th>
                <th>Post-Study Work Duration</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Bachelor's Degree</td><td>Up to 2 Years</td></tr>
            <tr><td>Master’s Degree</td><td>Up to 2 Years</td></tr>
            <tr><td>PhD / Doctoral Degree</td><td>Up to 3 Years</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Scholarships in the UK</h3>
        <p>The UK offers a wide range of scholarships, bursaries, and financial aid. BSAT assists students in identifying and applying for scholarships that align with their qualifications and career goals.</p>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Merit-Based Scholarships</td><td>Based on academic excellence or entrance exam scores</td></tr>
            <tr><td>Need-Based Grants/Bursaries</td><td>For students with documented financial need</td></tr>
            <tr><td>Country-Specific Awards</td><td>Targeted at students from specific regions or backgrounds</td></tr>
            <tr><td>University-Specific Scholarships</td><td>Offered by UK institutions upon admission</td></tr>
            <tr><td>Government Scholarships</td><td>Fully funded programs from UK government or partnerships</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Top Courses to Study in the UK</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Subject Area</th>
                <th>Career Pathways</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Business & Management</td><td>Marketing Manager, Analyst, HR Manager, Entrepreneur</td></tr>
            <tr><td>Computer Science & IT</td><td>Software Developer, Cybersecurity Analyst, Data Scientist</td></tr>
            <tr><td>Engineering (All Fields)</td><td>Civil Engineer, Mechanical Engineer, Electrical Design Expert</td></tr>
            <tr><td>Health & Medicine</td><td>Doctor, Nurse, Public Health Officer, Pharmacologist</td></tr>
            <tr><td>Law & Criminology</td><td>Solicitor, Barrister, Legal Advisor, Policy Analyst</td></tr>
            <tr><td>Media & Communications</td><td>Journalist, PR Specialist, Digital Marketer</td></tr>
            <tr><td>Economics & Finance</td><td>Financial Analyst, Economist, Investment Banker</td></tr>
            <tr><td>Psychology & Social Sciences</td><td>Psychologist, Counselor, Researcher</td></tr>
            <tr><td>Architecture & Design</td><td>Architect, Urban Planner, Interior Designer</td></tr>
            <tr><td>Hospitality & Tourism</td><td>Hotel Manager, Travel Consultant, Event Planner</td></tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>Top Universities to Study in the UK</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>University Name</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>1</td><td>University of Bedfordshire</td></tr>
            <tr><td>2</td><td>University of Cumbria</td></tr>
            <tr><td>3</td><td>University of Chester</td></tr>
            <tr><td>4</td><td>University of West London</td></tr>
            <tr><td>5</td><td>University of Sunderland</td></tr>
            <tr><td>6</td><td>University of East London</td></tr>
            <tr><td>7</td><td>University of Salford</td></tr>
            <tr><td>8</td><td>University of Huddersfield</td></tr>
            <tr><td>9</td><td>University of Portsmouth</td></tr>
            <tr><td>10</td><td>University of Lincoln</td></tr>
            <tr><td>11</td><td>University of Leicester</td></tr>
            <tr><td>12</td><td>University of Kent</td></tr>
            <tr><td>13</td><td>University of Reading</td></tr>
            <tr><td>14</td><td>University of Essex</td></tr>
            <tr><td>15</td><td>University of Surrey</td></tr>
            <tr><td>16</td><td>University of Sussex</td></tr>
            <tr><td>17</td><td>University of Exeter</td></tr>
            <tr><td>18</td><td>University of York</td></tr>
            <tr><td>19</td><td>University of Birmingham</td></tr>
            <tr><td>20</td><td>University of Leeds</td></tr>
            <tr><td>21</td><td>University of Manchester</td></tr>
            <tr><td>22</td><td>University of Bristol</td></tr>
            <tr><td>23</td><td>King’s College London</td></tr>
            <tr><td>24</td><td>University of Edinburgh</td></tr>
            <tr><td>25</td><td>University College London (UCL)</td></tr>
            <tr><td>26</td><td>University of Cambridge</td></tr>
            <tr><td>27</td><td>University of Oxford</td></tr>
            <tr><td>28</td><td>Imperial College London</td></tr>
            <tr><td>29</td><td>London School of Economics and Political Science (LSE)</td></tr>
            <tr><td>30</td><td>University of Warwick</td></tr>
            </tbody>
        </table>
    </article>





    <!-- Article Content End -->
   




    <!-- Journey today Start -->
    <div class="container-fluid f team py-5">
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
            If you’re ready to begin your academic journey in the USA, BSAT is here to help.

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