<?php
$this->load->view('includes/header');
?>

<div
    class="visual-block visual-theme-5 bg-dark hero-section text-black pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg- col-xl-6 position-relative">
                <div class="me-25">
                    
                    <div class="visual-textbox pt-0">
                        <h1 class="text-light" style="line-height: 1.5;">Meet <span style="color:rgba(255, 103, 31, 1)">BhartFundWay.</span><br> Every Indian's own<br> relationship manager
                        </h1>
                        <p class="text-light">BharatFundWay experienced professionals help you reach your financial goals.</p>
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-between mb-5">
                            
                            <div>
                                <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                    class="btn btn-white btn-sm"><span class="btn-text">Apply Now <img
                                            src="<?php echo base_url('assets/images/icons/arrow-right.png'); ?>"
                                            alt="Video Image"></span></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="<?php echo base_url('assets/images/img/hero-right.png'); ?>" alt="image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<main class="main">
    
 <section
        class="section section-theme-2 featured-joblix-block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60 about-section"
        id="aboutus">
        <div class="container">
            
            <div class="row align-items-center">
                 <div class="col-12 col-lg-5 mt-10 mb-15 mb-md-30 mb-lg-0 aboutus-cnt">
                    <img src="<?php echo base_url('assets/images/img/about.png'); ?>" alt="image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 mt-10 mb-15 mb-md-30 mb-lg-0">
                    <header class="section-header">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Who We Are</span>
                        <h2 class="mb-10">Helping You Choose the Right Financial Path</h2>
                        <p class="">BharatFundWay is a trusted financial consultation platform that connects customers with leading NBFC partners across India. We believe every financial journey is unique, which is why we offer customized support and solutions designed around individual needs.</p>
                    </header>
                </div>
               
            </div>
        </div>
    </section>

    <section class="section section-theme-5 pt-60 pt-md-60 pt-xl-100 partner-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header d-flex flex-column text-center mb-40">
                        <h2>Meet Our NBFC Partners</h2>
                        <p>We partner with the best to serve you better.
                        <p>
                    </header>
                </div>
            </div>

            <div class="trending-categories-slider">
                <?php foreach ($banklist as $row) { ?>
                <div class="wrap text-center">
                    <div class="justify-content-center categories-image">
                        <img src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>"
                            alt="<?= $row->bank_name ?>" class="m-auto img-fluid">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

 <section
        class="section section-theme-2 how-work-block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block text-color-blue">Our
                            Process</span>
                        <h2 class="display-6 fw-bold mb-0">How It <span class="text-color-blue">Works !</span></h2>
                    </header>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="categories-list bg-transparent p-0">
                        <div class="row g-10">
                            <div class="col-md-6 col-sm-6">

                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0 text-white">
                                                01
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Check Your Eligibility</h6>
                                        <p class="mb-0">Start by entering your mobile number and bank-registered name.
                                        </p>
                                        
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">

                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0 text-white">
                                                02
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Instant Verification & Approval</h6>
                                        <p class="mb-0">Fill in the required information to let our automated system
                                            assess
                                            your eligibility and show your pre-approved loan offer(s). This is not the
                                            final
                                            offer.</p>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 mb-0">

                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0 text-white">
                                                03
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Fill Out the Online Application</h6>
                                        <p class="mb-0">Subscribe to unlock access to your displayed pre-approved loan
                                            offer(s).</p>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">

                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0 text-white">
                                                04
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Accept Loan Offer</h6>
                                        <p class="mb-0">Within 24-48 hours, our login team will reach out for
                                            verification
                                            and guide you through the document submission process.</p>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0 text-white">
                                                05
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Upload Required Documents</h6>
                                        <p class="mb-0">Your documents and profile will be verified by the NBFC in
                                            accordance with its terms and conditions.</p>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">

                                <div class="categories-item loan-process">
                                    <div class="process-number">
                                        <div class="categories-image">
                                            <h6 class="icon mb-0">
                                                06
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="text-start ms-20 content-text process-content" style="padding-left: 32px;">
                                        <h6>Quick Loan Disbursal</h6>
                                        <p class="mb-0">The NBFC will determine loan sanction, approval, and
                                            disbursement in
                                            accordance with its rules and regulations.</p>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section
        class="section section-theme-9 featured_Jobs_Block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60"
        id="">
        <div class="container">
           
            <div class="row" style="background:rgba(6, 3, 141, 1); border-radius: 24px;">
                <div class="col-xl-3 col-12 m-auto" style="padding:25px;">
                    <div class="col-xl-12 col-12 m-auto" style="background: rgba(255, 103, 31, 1);padding: 17px; border-radius: 24px;">
                        <header class="section-header ms-5 mb-0">   
                            <h2 class="text-light">4.9</h2>
                            <h6 class="text-light">Client Rating</h6>
                        <p class="text-light">Rated by business owners who funded their growth with us.</p>
                        </header>
                    </div>
                </div>
                <div class="col-xl-9 col-12 m-auto">
                    <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-light">₹500 Cr+</h2>
                                <p class="text-light small">Business loans facilitated for growing businesses</p>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-light">5,000+</h2>
                                <p class="text-light small">Businesses funded across India</p>
                            </div>
                            <div class="col-md-4">
                               <h2 class="text-light">48 hrs</h2>
                                <p class="text-light small">Average time to get your loan approved</p>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    
    <section class="section section-theme-2 how-we-help-block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header mb-25">
                        <p class="text-success mb-10 mb-lg-15 title-text text-color-blue text-uppercase">The Difference We Bring</p>
                        <h2 class="display-6 fw-bold mb-0">Why BharatFundWay — The Difference We Bring</h2>
                    </header>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 img-col">
                <div class="row g-15">
                    <div class="col-md-4">
                        <div class="commmon-box h-100">
                            <div class="text-start mb-10">

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fas fa-handshake fs-4"></i>
                                    </div>
                                    <span class="title-number">01</span>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6>Enriching Collaboration</h6>
                                <p class="mt-10 mb-0">Explore multiple financial services backed by our leading NBFC
                                    network.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                   <div class="commmon-box h-100">
                            <div class="text-start mb-10">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fas fa-laptop fs-4"></i>
                                    </div>
                                    <span class="title-number">02</span>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6>100% Online Process</h6>
                                <p class="mt-10 mb-0">Enjoy a smooth and hassle-free loan experience without stepping
                                    out
                                    of
                                    your home.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="commmon-box h-100">
                            <div class="text-start mb-10">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="fas fa-hand-point-up fs-4"></i>
                                    </div>
                                    <span class="title-number">03</span>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6>Self-Apply Feature</h6>
                                <p class="mt-10 mb-0">Enjoy the freedom to make smarter financial decisions with
                                    expert
                                    support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
  
    <section
        class="section section-theme-2 featured_Jobs_Block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60    "
        id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header">
                        <span
                            class="text-color-blue text-uppercase text-outlined text-top mb-0 d-block">TESTIMONIALS</span>
                        <h2 class="display-6 fw-bold mb-0">Our Customers, Our Pride</h2>
                        
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <div class="client_testimonials">
                        <div class="client_testimonials_slider">
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                    
                                    <div class="card-comment">
                                        <p>indiafinpro made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                  
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                    
                                    <div class="card-comment">
                                        <p>indiafinpro made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                   
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                   
                                    <div class="card-comment">
                                        <p>indiafinproo made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                  
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                    
                                    <div class="card-comment">
                                        <p>indiafinpro made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                   
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                        
                                    <div class="card-comment mb-0">
                                        <p>indiafinpro made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                   
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-25 testimonial-card text-center">
                                    <div class="mb-25">

                                        <i class="fas fa-quote-left text-color-blue mb-3 d-block"></i>
                                    </div>
                                    <div class="card-comment">
                                        <p>indiafinpro made the application process easier to understand. The guidance
                                            on documents and next steps was helpful.”</p>
                                    </div>
                                    
                                    <p class="card-position mb-0 lh-sm">Rohan Bedi</p>
                                    <div class="rates-review mb-0">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section
        class="section section-theme-5 how-work-block pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">

                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">EMI CALCULATOR</span>
                        <h2>Plan your monthly repayment</h2>
                        <p class="text-center">Use this indicative calculator to understand how amount, rate and tenure affect EMI.</p>
                    </header>



                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="row">
                         
                    <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript">
                    </script>
                    <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                        <div id="ecww-widget"
                            style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section section-theme-1 bg-light-sky section-faqs pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-125 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-125 ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
                    <p class="mb-10 mb-lg-15 title-text text-success text-uppercase">FAQ</p>
                    <h2 class="mb-15">Frequently Asked Questions</h2>
                    <p>Got questions? We’ve got answers. Here’s everything you need to know about applying for a loan with Flexicread.</p>
                   
        </div>
        <div class="col-md-8">
          <div class="accordion" id="faq-accordion-2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="bullet"></span>
                  <span class="title">What purposes can a personal loan be used for?</span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faq-accordion-1">
                <div class="accordion-body">
                  <p>A personal loan can be used for any personal expenses, including paying-off unexpected bills, debt consolidation, wedding expenses, higher education, home renovation, travel, shopping, covering a business cost, etc.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="bullet"></span>
                  <span class="title">Do I have to pledge any assets to avail a personal loan?</span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion-1">
                <div class="accordion-body">
                  <p>A personal loan is an unsecured type of credit, which means you do not have to pledge any assets as collateral.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span class="bullet"></span>
                  <span class="title">How do I know if I am eligible for a personal loan?</span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion-1">
                <div class="accordion-body">
                  <p>
                    Here are the common eligibility criteria for a personal loan:<br>
                    <strong>Salaried Professionals</strong><br>
                    <ul>
                      <li>Minimum Age: 21 years</li>
                      <li>Minimum Monthly Income: Rs. 15,000 (should reflect in the bank)s</li>
                      <li>Minimum Job Stability: 1 Year</li>
                    </ul>
                    <strong>Self-employed Individuals</strong><br>
                    <ul>
                      <li>Minimum Age: 21 years</li>
                      <li>Minimum ITR: 1 Year</li>
                      <li>Minimum Business Stability: 1 Year</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <span class="bullet"></span>
                  <span class="title">What are the documents required for applying for a personal loan?</span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion-1">
                <div class="accordion-body">
                  <p>
                  When applying for a personal loan, the following general documents are needed: <br>
                    <strong>For Salaried:</strong> <br>
                    <ul>
                      <li>Aadhaar Card</li>
                      <li>PAN Card</li>
                      <li>Residence Proof</li>
                      <li>Bank Statement</li>
                      <li>Income Proof</li>
                    </ul>
                    <strong>For Self-Employed:</strong> <br>
                    <ul>
                      <li>Aadhaar Card</li>
                      <li>PAN Card</li>
                      <li>Residence Proof</li>
                      <li>Bank Statement</li>
                      <li>Income Computation</li>
                      <li>Profit & Loss Account Statement</li>
                      <li>Balance Sheet</li>
                      <li>Service Tax Registration, License, Registration Certificate</li>
                      <li>Clearance Certificate/IT Assessment</li>
                      <li>Income Tax Returns</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <span class="bullet"></span>
                  <span class="title">Can I get tax benefits on personal loans?</span>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion-1">
                <div class="accordion-body">
                  <p>Personal loans do not have any direct tax benefits. However, if you use the funds to renovate your house or to incur business expenses, you may get tax benefits under the Income Tax Act of India.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <span class="bullet"></span>
                  <span class="title">Why is having a good credit score so important?</span>
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq-accordion-2">
                <div class="accordion-body">
                  <p>Your credit score represents your creditworthiness and repayment ability. Your chances of obtaining a loan with favourable terms and a low interest rate are very high if your credit score is high.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section
        class="section section-contact section-theme-1 pt-60 pt-md-60 pt-xl-100 pb-60 pb-xl-100 pb-md-600 contact-section"
        id="contactus">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block">Drop Us a
                            Message</span>
                        <h2>We'd Love To Help You</h2>
                        <p class="text-center">Fill in your details and our team will get back to you shortly.</p>
                    </header>
                </div>
            </div>
            <div class="contact-form">

                <div class="row justify-content-between">
                    
                    <div class="col-12 col-md-6 col-xl-6">

                        <ul class="contact-support text-light">
                            <div class="mb-20">
                                <h6 class="mb-0">Get in touch</h6>
                                <p class="text-light">Our team responds within 24 hours.</p>
                            </div>
                            <li>
                                <div class="contact-box">
                                    <div class="text-start mb-10">
                                        <div class="icon">
                                            <img src="<?php echo base_url('assets/images/icons/journey.png'); ?>"
                                                alt="icon">
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Location</h3>
                                        <address class="text-light"><?php echo COMPANY_ADDRESS; ?></address>
                                        </address>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-box">
                                    <div class="text-start mb-10">
                                        <div class="icon">
                                            <img src="<?php echo base_url('assets/images/icons/call.png'); ?>"
                                                alt="icon">
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Call Us</h3>
                                        <p>
                                            <a href="tel:<?php echo COMPANY_MOBILE; ?>" class="text-light"><?php echo COMPANY_MOBILE; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-box mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon">
                                            <img src="<?php echo base_url('assets/images/icons/envelope.png'); ?>"
                                                alt="icon">
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Email</h3>
                                        <p>
                                            <a
                                                href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-light"><?php echo COMPANY_EMAIL; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6 m-auto mb-40 mb-md-0">
                        <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                                <input class="form-control" type="text" name="fullname" placeholder="Your Name" required
                                    data-validation-regex-regex="^[a-zA-Z ]*$">
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                                <input class="form-control" type="text" name="mobile" placeholder="Your Mobile" required
                                    minlength="10" maxlength="10" inputmode="numeric"
                                    data-validation-regex-regex="^[6789]\d{9}$"
                                    data-validation-regex-message="Enter valid mobile number">
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                                <input class="form-control" type="email" name="email" placeholder="Your Email Id"
                                    required>
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                                <input class="form-control" type="text" name="subject" placeholder="Your Subject"
                                    required>
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="form-group col-12 mb-15 mb-md-20 mb-lg-25">
                                <textarea class="form-control" name="message" cols="30" rows="10"
                                    placeholder="Your Message" required></textarea>
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-green btn-sm w-100 text-uppercase"><span
                                        class="btn-text">Submit</span></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
    <div class="modal fade" id="welcomemsg" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $msg[1]->option_value; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</main>

<?php
$this->load->view('includes/footer');
?>

<script type="text/javascript">
$(function() {
    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        var pageid = $('#getapage').find(":selected").val();

        if (pageid == 1 || pageid == 2) {
            window.location = "onlineprocess/applynow";
        }
    });
});
</script>

<script type="text/javascript">
$(window).on('load', function() {
    $('#welcomemsg').modal('show');
});
</script>