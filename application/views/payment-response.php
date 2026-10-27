<?php $this->load->view('includes/header-apply'); ?>

<main class="main">
    <section
        class="section section-theme-1 packages-block pt-130 d-flex align-items-center bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-8 mb-15 mb-md-30">
                    <div class="account-box">
                        <div class="account-box-frame text-dark bg-white shadow">
                            <div class="subhead text-center mb-0">
                                <?php if($responsedata == "true") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-check fs-1 text-success"></i>

                                </div>
                                <h2 class="text-blue">Congratulations! <span class="text-orange">xyz!</span></h2>
                                <p>A dedicated loan expert will reach out to complete <br> documentation and bank
                                    verification.</p>


                                <div class="row gx-15 gy-0">
                                    <div class="col-12 col-sm-12 col-md-4 col-xxl-4 mb-15">
                                        <div class="pricing-plan p-0 mb-0 h-100 bg-light-gray">
                                            <div class="card-head mb-0 border-bottom-0">

                                                <div class="text-center">
                                                    <span class="mb-0 fw-normal lh-sm text-uppercase">Sanctioned</span>
                                                    <h5 class="mb-0 fw-bold text-dark">₹1,95,000</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-xxl-4 mb-15">
                                        <div class="pricing-plan p-0 mb-0 h-100 bg-light-gray">
                                            <div class="card-head mb-0 border-bottom-0">

                                                <div class="text-center">
                                                    <span class="mb-0 fw-normal lh-sm text-uppercase">Tenure</span>
                                                    <h5 class="mb-0 fw-bold text-dark">Up to 60 mo</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-xxl-4 mb-15">
                                        <div class="pricing-plan p-0 mb-0 h-100 bg-light-gray">
                                            <div class="card-head mb-0 border-bottom-0">
                                                <div class="text-center">
                                                    <span class="mb-0 fw-normal lh-sm text-uppercase">Disbursal</span>
                                                    <h5 class="mb-0 fw-bold text-dark">Within 48 hrs</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-20">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-orange btn-sm mb-md-0 mb-5">Goto
                                        Home Page</a>
                                    <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline-dark btn-lg border">Customer Login</a>

                                </div>
                                <div>

                                    <a href="<?php echo site_url('support/request'); ?>" class="text-dark">Start a new
                                        application<i class="fa-solid fa-arrow-right ms-5"></i></a>
                                </div>
                                <?php } 
              else if($responsedata == "false") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-xmark text-danger fs-1"></i>

                                </div>
                                <h2 class="text-blue">Payment <br> <span class="text-danger">Unsuccessful</span></h2>
                                <p>
                                    We're sorry, but your payment could not be processed. <br> Please try again or
                                    contact our support team for assistance.
                                </p>
                                <p>हमें खेद है, लेकिन आपका भुगतान प्रोसेस नहीं हो सका। कृपया पुनः प्रयास करें <br> या
                                    सहायता के लिए हमारी सपोर्ट टीम से संपर्क करें।</p>
                                <hr>
                                <p>Common Reasons for Payment Failure:</p>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-orange card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Card Issue</h6>
                                            <p class="mb-0 text-dark fw-bold">Your service is active. Log in to the
                                                portal.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-orange card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Network</h6>
                                            <p class="mb-0 text-dark fw-bold">Invoice is available for download in
                                                portal.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-orange card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Cancelled</h6>
                                            <p class="mb-0 text-dark fw-bold">Our team will contact you within 24 hrs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="mt-20">
                                <p
                                    class="text-blue border-blue py-5 rounded-pill border px-15  d-inline-block">
                                    Don't worry! No
                                    amount has been deducted from your account.
                                </p>
                            </div>
                             <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline-dark btn-lg border mb-md-0 mb-5">having an issues ?</a>

                                <a href="<?php echo site_url('cardpay'); ?>" class="btn btn-orange btn-sm">Try Another
                                    Payment Method</a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply');   ?>