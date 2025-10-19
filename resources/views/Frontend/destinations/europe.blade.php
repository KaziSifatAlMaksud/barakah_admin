@extends('Frontend.layouts.master')

@section('title', 'Europe Destinations - BSAT')

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

    <!-- Article Content Start -->
     <article class="container article my-5">
        <a href="javascript:void(0);" onclick="window.history.back()" class="btn btn-transparent d-flex align-items-center mb-4">
            <strong><i class="bi bi-arrow-left me-2"></i> Back</strong>
        </a>

        <h2 class="title mb-4">Study in Europe – Barakah Study Abroad & Tours (BSAT)</h2>

          <img
            src="{{ asset('assets/img/img_pic/3.4 Europe/Whisk_84896960b3.jpg') }}"
            alt="Pre and Post Arrival Support"
            class="img-fluid"
          />

        <h3>1. Why Study in Europe?</h3>
        <p>Europe is one of the most attractive destinations for international students seeking high-quality, affordable education. With over 4,000 universities across 40+ countries, students can choose from a vast range of English-taught programs in fields like Engineering, Medicine, Business, Arts, and more.</p>
        <p>European degrees are globally recognized, and many countries offer low or even no tuition fees, especially at public universities. Students benefit from multicultural campuses, strong student support systems, and research-driven academic environments.</p>
        <p>One of the greatest advantages of studying in Europe is access to the Schengen visa, allowing students to travel across 25+ countries during their studies. After graduation, many European countries offer post-study work visas and clear pathways to permanent residency (PR).</p>

        <hr class="my-4">

        <h3>2. 7 Reasons to Study in Europe</h3>
        <ul>
            <li><b>Globally Recognized Degrees:</b> Academic excellence, innovation, and centuries-old traditions.</li>
            <li><b>Affordable or Free Tuition:</b> Low tuition fees, with some countries (Germany, Norway) offering tuition-free education.</li>
            <li><b>Wide Range of English-Taught Programs:</b> Over 20,000 programs covering Engineering, Medicine, Business, Arts, etc.</li>
            <li><b>Post-Study Work Opportunities:</b> 1–2 year work visas in countries like Germany, Netherlands, Sweden, Ireland.</li>
            <li><b>Easy Travel Across Europe:</b> Schengen Visa allows travel across 25+ countries.</li>
            <li><b>High Quality of Life:</b> Clean, safe, modern cities with excellent healthcare and public transport.</li>
            <li><b>Diverse & Inclusive Campuses:</b> Study alongside students from all over the world.</li>
        </ul>

        <hr class="my-4">

        <h3>3. Popular Study Destinations in Europe</h3>
        <ul>
            <li><b>Germany:</b> Tuition-free public universities, strong in Engineering, IT, Business, research-focused.</li>
            <li><b>Netherlands:</b> English-taught programs, Business, Social Sciences, STEM degrees.</li>
            <li><b>Sweden:</b> Sustainability, innovation, student-friendly policies, high living standards.</li>
            <li><b>France:</b> Fashion, Arts, Hospitality, Business; affordable public tuition & government scholarships.</li>
            <li><b>Italy:</b> Architecture, Design, Humanities; low tuition, scholarships available.</li>
            <li><b>Finland:</b> Top-quality education, creativity-focused; scholarships covering tuition.</li>
            <li><b>Hungary, Poland & Lithuania:</b> Budget-friendly, Medicine, Engineering, IT programs in English.</li>
        </ul>

        <hr class="my-4">

        <h3>4. Cost of Studying in Europe</h3>

        <h5>Tuition Fees (Per Year)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>University Type</th>
                <th>Estimated Tuition (EUR/year)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Public Universities</td><td>€0 – €8,000</td></tr>
            <tr><td>Private Universities</td><td>€5,000 – €20,000</td></tr>
            <tr><td>Medical Programs (Specialized)</td><td>€10,000 – €25,000</td></tr>
            </tbody>
        </table>

        <h5 class="mt-3">Living Expenses (Per Month)</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Region/Country</th>
                <th>Estimated Cost (EUR/month)</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Western Europe (Netherlands, France, Germany)</td><td>€900 – €1,200</td></tr>
            <tr><td>Northern Europe (Sweden, Finland)</td><td>€1,000 – €1,300</td></tr>
            <tr><td>Eastern Europe (Hungary, Poland, Lithuania)</td><td>€500 – €850</td></tr>
            </tbody>
        </table>

        <hr class="my-4">

        <h3>5. Admission & Language Requirements</h3>

        <h5>General Admission Requirements</h5>
        <ul>
            <li><b>Bachelor’s Programs:</b> Completed HSC or equivalent, minimum GPA, valid passport, SOP/Motivation Letter, letters of recommendation (optional).</li>
            <li><b>Master’s Programs:</b> Recognized undergraduate degree, transcripts, CV/Resume, SOP & reference letters, relevant work experience for some programs.</li>
        </ul>

        <h5>Language Requirements</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Test</th>
                <th>Typical Minimum Score</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>IELTS</td><td>6.0 – 6.5 overall (no band &lt;5.5)</td></tr>
            <tr><td>TOEFL iBT</td><td>72 – 90+</td></tr>
            <tr><td>PTE Academic</td><td>55 – 65</td></tr>
            <tr><td>Duolingo</td><td>95 – 110+</td></tr>
            </tbody>
        </table>

        <hr class="my-4">

        <h3>6. Student Visa Process</h3>
        <ul>
            <li>Secure admission and obtain offer letter</li>
            <li>Provide financial proof (bank statements/sponsor letters)</li>
            <li>Arrange accommodation</li>
            <li>Purchase health insurance</li>
            <li>Book visa appointment</li>
            <li>Submit documents & attend interview</li>
            <li>Receive visa decision (3–12 weeks depending on country)</li>
        </ul>

        <h5>Visa Processing Times by Country</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Country</th>
                <th>Processing Time</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Germany</td><td>6–12 weeks</td></tr>
            <tr><td>Netherlands</td><td>3–6 weeks</td></tr>
            <tr><td>France</td><td>3–5 weeks</td></tr>
            <tr><td>Sweden</td><td>4–8 weeks</td></tr>
            <tr><td>Italy</td><td>4–10 weeks</td></tr>
            <tr><td>Hungary/Poland</td><td>3–6 weeks</td></tr>
            </tbody>
        </table>

        <hr class="my-4">

        <h3>7. Scholarships in Europe</h3>
        <ul>
            <li>Government Scholarships – National/EU funding for international students</li>
            <li>University Scholarships – Merit-based, need-based, or program-specific</li>
            <li>Erasmus+ Program – Fully funded Master’s degrees & exchanges</li>
            <li>Research Grants – For PhD/postgraduate research students</li>
            <li>Country-Specific Awards – Scholarships for selected countries</li>
        </ul>

        <h5>Popular Scholarships</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Scholarship</th>
                <th>Offered By</th>
                <th>Benefits</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Erasmus+</td><td>European Union</td><td>Tuition + living expenses (Master’s)</td></tr>
            <tr><td>DAAD</td><td>Germany</td><td>Fully/partially funded PG & PhD programs</td></tr>
            <tr><td>Swedish Institute Scholarships</td><td>Sweden</td><td>Tuition + monthly stipend</td></tr>
            <tr><td>Holland Scholarship</td><td>Netherlands</td><td>€5,000 one-time payment</td></tr>
            <tr><td>Eiffel Excellence Scholarship</td><td>France</td><td>Tuition, stipend, travel allowance</td></tr>
            <tr><td>Poland Government Scholarships</td><td>Poland</td><td>Tuition + monthly living cost</td></tr>
            </tbody>
        </table>

        <hr class="my-4">

        <h3>8. Post-Study Work & PR Opportunities</h3>
        <p>Europe offers excellent post-study work options and pathways to permanent residency (PR) for international students who graduate from recognized institutions.</p>

        <h5>Post-Study Work Visa Duration</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
            <tr>
                <th>Country</th>
                <th>Post-Study Work Duration</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Germany</td><td>18 months job-seeking visa</td></tr>
            <tr><td>Netherlands</td><td>12 months Orientation Year (zoekjaar)</td></tr>
            <tr><td>Sweden</td><td>12 months job search visa</td></tr>
            <tr><td>France</td><td>12–24 months residence permit</td></tr>
            <tr><td>Italy</td><td>6–12 months job search extension</td></tr>
            <tr><td>Ireland</td><td>24 months for Master’s; 12 months for Bachelor’s</td></tr>
            <tr><td>Finland</td><td>Up to 2 years post-study residence permit</td></tr>
            <tr><td>Poland</td><td>9–12 months after studies</td></tr>
            </tbody>
        </table>

        <hr class="my-4">

        <h3>9. Top Universities in Europe</h3>
        <ul>
            <li><b>Germany:</b> LMU Munich, TUM, Heidelberg, RWTH Aachen, Humboldt Berlin</li>
            <li><b>Netherlands:</b> University of Amsterdam, TU Delft, Erasmus Rotterdam, Leiden, Utrecht</li>
            <li><b>France:</b> Sorbonne, École Polytechnique, Paris-Saclay, Sciences Po, Grenoble Alpes</li>
            <li><b>Sweden:</b> Lund, KTH, Uppsala, Stockholm, Chalmers</li>
            <li><b>Italy:</b> Bologna, Sapienza Rome, Politecnico Milano, Padua, Milan</li>
            <li><b>Finland:</b> Helsinki, Aalto, Turku, Tampere, LUT</li>
            <li><b>Spain:</b> Barcelona, Autonomous Madrid, Pompeu Fabra, Valencia, Polytechnic Catalonia</li>
            <li><b>Poland:</b> Warsaw, Jagiellonian, Warsaw Tech, AGH, Adam Mickiewicz</li>
            <li><b>Hungary:</b> ELTE, Szeged, Semmelweis, Budapest Tech, Debrecen</li>
            <li><b>Ireland:</b> Trinity College Dublin, UCD, Galway, DCU, UCC</li>
            <li><b>Austria:</b> Vienna, TU Wien, Graz Tech, Innsbruck, Johannes Kepler Linz</li>
            <li><b>Belgium:</b> KU Leuven, Ghent, UCLouvain, VUB, Liège</li>
            <li><b>Lithuania:</b> Vilnius, Kaunas Tech, Mykolas Romeris, Vytautas Magnus</li>
            <li><b>Norway:</b> Oslo, NTNU, Bergen, BI Business School</li>
            <li><b>Czech Republic:</b> Charles Univ, Czech Tech Prague, Masaryk, Univ of Economics Prague</li>
            <li><b>Denmark:</b> Copenhagen, Aarhus, DTU, Copenhagen Business School</li>
            <li><b>Estonia:</b> Tartu, TalTech</li>
            <li><b>Latvia:</b> University of Latvia, Riga Tech</li>
            <li><b>Slovakia:</b> Comenius Bratislava, Slovak Tech</li>
            <li><b>Romania:</b> Bucharest, Babeș-Bolyai, Polytechnic Bucharest</li>
            <li><b>Bulgaria:</b> Sofia, Sofia Tech, Varna Medical</li>
        </ul>
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
                    Q: Can I study in Europe without knowing the local language?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Yes, many European universities offer English-taught programs at both undergraduate and postgraduate levels. However, learning basic local language can be helpful for daily life and part-time jobs.
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q: Is it expensive to study in Europe for international students?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Not necessarily. Many countries such as Germany, Italy, and Norway offer low or no tuition fees at public universities. Living costs vary but are generally affordable compared to the UK or USA.
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q: Can I work while studying in Europe?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Yes, most European countries allow international students to work part-time (10–20 hours/week) during studies and full-time during vacations, helping to manage living expenses.
                </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Q: What are the post-study work opportunities in Europe?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: Countries like Germany, the Netherlands, Sweden, and Ireland offer post-study work visas ranging from 1 to 2 years, which can often lead to permanent residency.
                </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Q: How does BSAT support students aiming to study in Europe?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A: BSAT provides complete, personalized guidance — from choosing the right country and university to preparing documents, applying for scholarships, and ensuring a smooth visa process. We also assist with pre-departure briefings and offer support even after you arrive in Europe.
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
    <div class="container-fluid team py-5 ">
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
          <a href="{{ route('apply_with_us') }}" class="learn-more btn btn-primary px-5 py-3 mt-5 h6">
            Get a Free Profile Assessment <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- End of container -->
    </div>
    <!--  Journey today End -->

@endsection