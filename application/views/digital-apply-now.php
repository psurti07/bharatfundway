<?php
$this->load->view('includes/header-apply.php');
?>

<section class="visual-block visual-theme-5 bg-dark hero-section text-black pt-60 pb-60 pt-md-60 pt-xl-60 pb-xl-60">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 order-2">
                <div class="text-hold">
                    <div class="tag-list mb-25">
                        <span class="tag-wrap">Your Credit & Loan Assistance Partner</span>
                    </div>
                </div>

                <div class="visual-textbox pt-0 mb-25">
                    <h2 class="text-light">Meet <span class="text-orange">BhartFundWay</span>. Your Partner in Smarter Financial Decisions. </h2>
                </div>
                <p class="text-white mb-0">
                    BharatFundWay helps you explore suitable loan options with professional guidance and application support based on your eligibility.
                </p>

            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xl-5 order-md-2 order-1">
                <div class="account-box">
                    <?php if ($processstep == 'step1') { ?>
                    <div class="account-box-frame text-dark bg-white shadow">
                        <div class="section-header text-center mb-0">

                            <h5 class="text-blue mb-1">Explore Loan Options Up to<div class="range" style="display: inline-block;">

                                    <span class="text-orange fs-4">₹10 Lakhs</span>

                                </div>
                            </h5>
                            <p class="mb-10"><span>Your Loan Journey Starts Here</span></p>

                        </div>
                        <?php echo form_open('onlineprocess/sendotpCode', array('id' => 'submitForm1', 'class' => 'contac-form mb-0', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <div class="col-12 mb-15">
                                <div class="form-group">
                                    <div class="range">
                                        <div class="d-flex align-items-center  justify-content-center">
                                            <label class="d-flex justify-content-center">
                                                <h5 class="text-blue">Loan Amount :</h5>
                                            </label>
                                            <div class="range d-flex justify-content-center">
                                                <div class="range__value pt-0">
                                                    <h5><span class="text-orange"></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between required-amount">
                                            <h6 class="text-uppercase mb-0">Choose your required loan amount *</h6>
                                            <h6 class="text-uppercase mb-0">₹1L – ₹10L</h6>
                                        </div>
                                        <div class="range__slider">
                                            <input type="range" name="loanamount" step="10000">
                                        </div>
                                        <div class="d-flex justify-content-between required-price mb-10">
                                            <h6 class="text-uppercase mb-0">₹1,00,000</h6>
                                            <h6 class="text-uppercase mb-0">₹10,00,000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group error">
                                    <label class="text-uppercase h6 mb-10 text-gray-alt">Mobile number</label>
                                    <div class="input-group mb-15">
                                        <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-15"
                                            id="basic-addon1">+91</span>
                                        <input class="form-control" type="text" placeholder="Bank-registered number"
                                            id="mobile" name="mobile" required minlength="10" maxlength="10"
                                            inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                            data-validation-regex-message="Enter valid mobile number">
                                    </div>
                                    <div class="help-block"></div>

                                </div>
                            </div>

                            <div class="col-12 mb-15">
                                <button type="submit" id="formsubmit1"
                                    class="btn btn-orange btn-sm text-uppercase"><span class="btn-text">Start
                                        Process <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-10 ps-0">
                                    <div class="d-flex align-items-start"> <input type="checkbox" name="tandc"
                                            id="tandc" class="custom-control-input mb-0 mt-5" value="1" checked
                                            required>
                                        <label class="custom-control-label" for="tandc"><small
                                                class="ms-10 d-block h6 fw-normal">By
                                                submitting the
                                                form and proceeding, you agree to the <a
                                                    href="<?= base_url('terms-conditions') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Terms of
                                                    Use</a>
                                                and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Privacy
                                                    Policy</a>
                                                of
                                                bharatfundaway.</small></label>

                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-15 ps-0">
                                    <div class="d-flex align-items-start ">
                                        <input type="checkbox" name="promotion" id="promotion"
                                            class="custom-control-input mb-0 mt-5" value="1" checked required>
                                        <label class="custom-control-label" for="promotion"><small
                                                class="ms-10 d-block h6 fw-normal">
                                                I
                                                agree to receive
                                                promotional & informational communications from Bharatfundaway
                                                through
                                                Emails, calls or SMS
                                                Services.
                                            </small></label>
                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <div class="text-danger mt-3 mb-3" id="mobilenoError1"></div>

                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>
                <?php } else if ($processstep == 'step2') { ?>
                   <div
                    class="card border-0  mt-md-0 mt-5 rounded-0 card-left-content h-100 position-relative bg-transparent d-md-none">
                    <p class="text-uppercase fw-bold text-light-sky d-none">YOUR APPLICATION</p>
                    <div class="application-timeline mb-60 d-md-none">
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="timeline-title">Details</span>
                        </div>
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                            <span class="timeline-title">Verify OTP</span>
                        </div>
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                            <span class="timeline-title">Loan Details</span>
                        </div>
                        <div class="timeline-step active">
                            <div class="timeline-circle bg-orange">4</div>
                            <span class="timeline-title">Personal Details</span>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-circle">5</div>
                            <span class="timeline-title">Unlock Offers</span>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-circle">6</div>
                            <span class="timeline-title">Purchase Plan</span>
                        </div>
                    </div>

                    <span
                        class="text-success limited-offer-main py-10 px-15 rounded-pill mb-15 d-inline-block fa-xs d-md-none d-none"><i
                            class="fa-solid fa-lock me-10 text-success"></i>256-bit secure</span>



                    <div class="mobile-application-progress">

                        <div class="mobile-progress-header d-flex justify-content-between">
                            <span class="mobile-progress-title">YOUR APPLICATION</span>

                            <span class="mobile-secure">
                                <i class="fas fa-lock"></i> 100% Secure
                            </span>
                        </div>

                        <div class="mobile-progress-bars">
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment active"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                        </div>

                        <p class="mobile-current-step mb-0">
                            Step 2 of 6 <span class="text-orange">· Verify OTP</span>
                        </p>

                    </div>


                </div>
                <div class="account-box-frame text-dark bg-white card shadow-sm border">
                    <div
                        class="d-flex align-items-center justify-content-center categories-image-wrap bg-light-orange mb-20">

                        <i class="fas fa-mobile-alt text-orange fs-5"></i>
                    </div>
                    <div class="mb-20">
                        <h5 class="mb-10 text-start fw-bold text-blue">Verify your mobile</h5>
                        <h6 class="fw-normal">We've sent a 4-digit OTP to
                            <strong class="text-blue"><?php echo $userdetails['mobile']; ?></strong>
                        </h6>

                    </div>
                    <?php echo form_open('onlineprocess/checkotpCode', array('id' => 'submitForm2', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row">
                        <input type="hidden" name="otpmobile" id="otpmobile"
                            value="<?php echo $userdetails['mobile']; ?>">
                        <input type="hidden" name="loanamount" id="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <div class="col-12 mb-15 mb-md-20">
                            <div class="form-group error">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Enter OTP</label>
                                <div class="input-field text-center">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="p-countdown" data-delay="30">
                                    <div class="p-countdown-count" id="counttime">
                                        <code>New OTP in <span id="timer">30</span> Sec</code>
                                    </div>
                                    <div id="resendBtn" class="d-none">
                                        <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                    </div>
                                    <code id="resend-message"></code>
                                    <div class="custom-error" id="otpcodeError"></div>
                                </div>
                                <div class="custom-error" id="otpcodeError"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="title-text d-flex justify-content-md-end justify-content-start">

                                <h6 class="fw-light mb-0 ms-5"><i class="fa-solid fa-lock me-10 text-coal"></i>Encrypted
                                </h6>
                            </div>
                        </div>

                        <div class="col-12 mt-20">
                            <button type="submit" id="formsubmit2" class="btn btn-orange btn-sm"><span
                                    class="btn-text">Verify
                                    OTP <i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                        <div class="col-12">
                            <div class="card otp-velidation-text shadow-none bg-light border mt-15">
                                <div class="card-body p-10 ">
                                    <div class="d-flex align-items-center">

                                        <i class="fa-solid fa-shield text-orange"></i>

                                        <div class="ms-10">
                                            <p class="mb-0 fw-light h6 lh-2">BharatFundWay will never call you for your
                                                OTP. Treat your OTP like a password — do not share it with anyone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
                <?php } else if ($processstep == 'step3') { ?>
                <div
                    class="card border-0  mt-md-0 mt-5 rounded-0 card-left-content h-100 position-relative bg-transparent d-md-none">
                    <p class="text-uppercase fw-bold text-light-sky d-none">YOUR APPLICATION</p>
                    <div class="application-timeline mb-60 d-md-none">
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="timeline-title">Details</span>
                        </div>
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                            <span class="timeline-title">Verify OTP</span>
                        </div>
                        <div class="timeline-step completed">
                            <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                            <span class="timeline-title">Loan Details</span>
                        </div>
                        <div class="timeline-step active">
                            <div class="timeline-circle bg-orange">4</div>
                            <span class="timeline-title">Personal Details</span>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-circle">5</div>
                            <span class="timeline-title">Unlock Offers</span>
                        </div>
                        <div class="timeline-step">
                            <div class="timeline-circle">6</div>
                            <span class="timeline-title">Purchase Plan</span>
                        </div>
                    </div>

                    <span
                        class="text-success limited-offer-main py-10 px-15 rounded-pill mb-15 d-inline-block fa-xs d-md-none d-none"><i
                            class="fa-solid fa-lock me-10 text-success"></i>256-bit secure</span>



                    <div class="mobile-application-progress">

                        <div class="mobile-progress-header d-flex justify-content-between">
                            <span class="mobile-progress-title">YOUR APPLICATION</span>

                            <span class="mobile-secure">
                                <i class="fas fa-lock"></i> 100% Secure
                            </span>
                        </div>

                        <div class="mobile-progress-bars">
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment active"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                        </div>

                        <p class="mobile-current-step mb-0">
                            Step 3 of 6 <span class="text-orange">·  Loan Details</span>
                        </p>

                    </div>


                </div>
                <div class="account-box-frame text-dark card shadow bg-white">

                    <div class="text-start section-header ms-0">

                        <h5 class="mb-10 text-start fw-bold text-blue">Enter Following Details</h5>
                        <p>Kindly enter your details for personalized offers.</p>
                        <!-- <p class="mb-0" style="font-size:14px"> <strong>Loan Amount. :
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></p>
                                <p style="font-size:14px"> <strong> Mobile No. :
                                        <?php echo $userdetails['mobile']; ?></strong></p> -->
                    </div>
                    <?php echo form_open('onlineprocess/registeredUser', array('id' => 'submitForm3', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row gx-10 mb-15">
                        <input type="hidden" id="loanamount" name="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <input type="hidden" id="referralcode" name="referralcode"
                            value="<?php echo $userdetails['referralcode']; ?>">
                        <input type="hidden" id="usermobile" name="usermobile"
                            value="<?php echo $userdetails['mobile']; ?>">

                        <!-- <div class="size-details">
                                    <ul class="nav form-tabs mb-15 mb-md-20" id="mylist">
                                        <li data-value="1">
                                            <button class="nav-link active-size active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Salaried</button>
                                        </li>
                                        <li data-value="2">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Self-Employed</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" id="usertype" name="usertype" value="1">
                                </div>   -->

                        <label class="text-uppercase h6 mb-10 text-gray-alt">Employment type</label>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-md-0 mb-10">
                            <fieldset class="picker1">
                                <label for="personalloan" class="w-100">
                                    <input type="radio" name="usertype" id="personalloan" value="1" class="radio"
                                        checked>
                                    <span class="plan-details p-15 bg-light-sky">
                                        <div class="d-flex mb-0 align-items-center">
                                            <div>
                                                <div class="salaried-img">
                                                    <img src="<?php echo base_url('assets/images/icons/Salarised.png'); ?>"
                                                        alt="image" class="">
                                                </div>
                                            </div>
                                            <div class="ms-10 employment-content">
                                                <h6 class="employment-title mb-0">Salaried</h6>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                            <fieldset class="picker1">
                                <label for="businessloan" class="w-100">
                                    <input type="radio" name="usertype" id="businessloan" value="2" class="radio">
                                    <span class="plan-details p-15 bg-light-sky">
                                        <div class="d-flex mb-0 align-items-center">
                                            <div>
                                                <div class="salaried-img bg-orange">
                                                    <img src="<?php echo base_url('assets/images/icons/self-employed.png'); ?>"
                                                        alt="image" class="">
                                                </div>
                                            </div>
                                            <div class="ms-10 employment-content">
                                                <h6 class="employment-title mb-0">Self-Employed
                                                </h6>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-12 mb-15 mb-md-20 mt-20">
                            <div class="form-group">
                                <label class="text-uppercase h6 mb-10 text-blue">Full name</label>
                                <div class="input-group mb-3">
                                    <!-- <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-20"
                                        id="basic-addon1"> <i class="fa-regular fa-user"></i></span> -->
                                    <input class="form-control bg-light-sky" type="text" id="username" name="username"
                                        placeholder="Bank Registered Name" required
                                        data-validation-regex-regex="^[a-zA-Z ]*$">
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-15 mb-md-20">
                            <div class="form-group">
                                <label class="text-uppercase h6 mb-10 text-blue">EMAIL ID</label>
                                <div class="input-group mb-3">
                                    <!-- <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-20"
                                        id="basic-addon1"> <i class="fa-regular fa-envelope"></i></span> -->
                                    <input class="form-control bg-light-sky" type="email" id="useremail"
                                        name="useremail" placeholder="Email Id" required>
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="formsubmit3" class="btn btn-orange btn-sm"><span
                                    class="btn-text">Process <i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="section section-theme-5 pt-60 pt-md-60 pt-xl-70 pb-60 pb-xl-70 pb-md-60 partner-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-12 m-auto">
                <header class="section-header d-flex flex-column text-center mb-40">
                    <h3 class="mb-10 text-blue">Meet Our NBFC Partners</h3>
                    <p>Partnering with leading NBFCs to bring you reliable loan options.</p>
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


<section class="section section-theme-2 how-we-help-block pt-60 pt-md-60 pt-xl-70 pb-60 pb-xl-70 pb-md-60 bg-light-sky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <header class="section-header mb-25 text-center">
                    <p class="text-orange mb-10 mb-lg-15 title-text text-color-blue text-uppercase fw-bold">The
                        Difference
                        We Bring</p>
                    <h3 class="mb-0 text-blue">Why Choose BharatFundWay?</h3>
                    <p>Discover the Benefits of Our Services</p>
                </header>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 img-col">
            <div class="row g-15">
                <div class="col-md-4">
                    <div class="commmon-box h-100">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-handshake fs-6 text-white"></i>
                                </div>
                                <span class="title-number"><i class="fas fa-external-link-alt"></i></span>
                            </div>
                        </div>
                        <div class="text-start">
                            <h6 class="text-blue">Multiple Lending Partners</h6>
                            <p class="mt-10 mb-0">Explore loan options from participating NBFCs and lending partners based on eligibility.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commmon-box h-100">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-laptop fs-6 text-white"></i>
                                </div>
                                <span class="title-number"><i class="fas fa-external-link-alt"></i></span>
                            </div>
                        </div>
                        <div class="text-start">
                            <h6 class="text-blue">Convenient Online Process</h6>
                            <p class="mt-10 mb-0">Begin your loan application online with simple steps and clear guidance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commmon-box h-100">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-hand-point-up fs-6 text-white"></i>
                                </div>
                                <span class="title-number"><i class="fas fa-external-link-alt"></i></span>
                            </div>
                        </div>
                        <div class="text-start">
                            <h6 class="text-blue">Flexible Application Support</h6>
                            <p class="mt-10 mb-0">Explore loan options independently or choose assistance during the application process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section
    class="section section-theme-2 featured_Jobs_Block pt-60 pt-md-60 pt-xl-70 pb-60 pb-xl-70 pb-md-60 how-we-help-block"
    id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <header class="section-header mb-25 text-center">
                    <p class="text-orange mb-10 mb-lg-15 title-text text-color-blue text-uppercase fw-bold">
                        TESTIMONIALS</p>
                    <h3 class="mb-0 text-blue">Our Customers, Our Pride</h3>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <div class="client_testimonials">
                    <div class="client_testimonials_slider">
                        <div>
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinpro made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>

                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonil-1.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinpro made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>
                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinproo made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>
                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonial-3.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinpro made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>
                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonial-4.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinpro made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>
                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonil-1.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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
                            <div class="bg-white p-0 testimonial-card text-center">

                                <div class="card-comment text-blue">
                                    <p>indiafinpro made the application process easier to understand. The guidance
                                        on documents and next steps was helpful.”</p>
                                </div>
                                <div class="mb-10">
                                    <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                        alt="image" class="img-fluid process-border-img m-auto">
                                </div>
                                <p class="card-position mb-0 lh-sm text-blue">Rohan Bedi</p>
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

<section class="top_companies_block section-theme-7 pt-60 pt-md-60 pt-xl-70 pb-60 pb-xl-70 pb-md-60 bg-light-sky">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-12 m-auto">
                <header class="section-header d-flex flex-column text-center mb-40">
                    <h3 class="mb-10 text-blue">Your Financial Journey, Simplified</h3>
                    <p>Discover available loan options for salaried and self-employed individuals.</p>
                </header>
            </div>
        </div>

        <div class="top_talent_holder mb-0">
            <div class="left_align">
                <div class="detail_box candidate bg-white detail-block">
                    <div class="p-0">
                        <div class="d-flex align-items-center mb-20">
                            <div
                                class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-light-green rounded-pill">
                                <i class="fas fa-briefcase text-orange fs-5"></i>
                            </div>
                            <h5 class="text-dark mb-0 position-relative pt-15 ms-15">Salaried Employees</h5>
                        </div>

                        <ul class="list-unstyled list text-dark m-0 steps-list d-block">
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Minimum Age: 21 Years
                            </li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Monthly Salary: ₹15,000 onwards</li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Employment Stability: 1 Year</li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Loan Tenure: 6–72 Months</li>
                            <li class="ps-0 py-0 pe-0 mb-0"><i class="icon-check bg-orange"></i>Interest Rates: As per Lender Policy
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="right_align mb-0">
                <div class="detail_box candidate bg-white detail-block">
                    <div class="p-0">
                        <div class="d-flex align-items-center mb-20">
                            <div
                                class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-light-green rounded-pill">
                                <i class="fas fa-chart-line text-orange fs-5"></i>
                            </div>
                            <h5 class="text-dark mb-0 position-relative pt-15 ms-15">Self-employed Individuals</h5>
                        </div>
                        <ul class="list-unstyled list text-dark m-0 steps-list d-block">
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Minimum Age: 21 Years</li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Business Stability: 1 Year</li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Income Tax Return: 1 Year
                            </li>
                            <li class="ps-0 py-0 pe-0"><i class="icon-check bg-orange"></i>Income Proof: As per Lender Criteria</li>
                            <li class="ps-0 py-0 pe-0 mb-0"><i class="icon-check bg-orange"></i>Interest Rates: As per Lender Policy
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section section-contact section-theme-1 bg-light-gray disclaimer-section">
    <div class="container">
        <p class="mb-5 text-white"><strong class="text-white">Disclaimer: </strong><span><?php echo base_url() ?> is not a lender or financial institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or specific loan terms. The amount paid is only for the service charge. We are not lenders and do not guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</span></p>

        <p class="mb-5 text-white"><strong class="text-white">Important Note: </strong><span>We ask our customers to make payments ONLY on our website <a
                class="text-white" href="<?php echo COMPANY_SITE; ?>">bharatfundway.com</a>  and NOT through any other source, directly or indirectly.</span></p>

        <p class="mb-5 text-white"><strong class="text-white">Pre-application NOTE: </strong><span>Users are advised to read our terms and conditions and policies before proceeding/applying/registration.</span>
        </p>
        <p class="mb-5 text-white"><strong class="text-white">Disclosure:</strong> <span>Loan tenure minimum 6 months & maximum 60 months; Maximum APR: 34%
            p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000
            processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR 14.41%.</span></p>

        <p class="mb-5 text-white"><strong class="text-white"><span>Registered Office Address : </span></strong><span><?php echo COMPANY_ADDRESS; ?></span></p>

        <p class="mb-0 text-white"><strong class="text-white">Mobile : </strong><span><?php echo COMPANY_MOBILE; ?></span> | <strong class="text-white">Email :
            </strong><span><?php echo COMPANY_EMAIL; ?></span></p>

    </div>
</section>

<?php $this->load->view('includes/footer-apply'); ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
$('#mylist li').click(function() {
    $('#usertype').val($(this).data('value'));
});

function resendotp() {
    loanamount = document.getElementById('loanamount').value;
    mobile = document.getElementById('otpmobile').value;

    $.ajax({
        url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
        type: "POST",
        data: 'mobile=' + mobile + '&loanamount=' + loanamount,
        dataType: "JSON",
        cache: false,
        processData: false,
        success: function(response) {
            if (response['success'] == true) {
                $('#resend-message2').html(response['message']);
                toastr.success(response['message']);
            } else {
                toastr.error(response['message']);
            }
        },
        error: function(jXHR, textStatus, errorThrown) {
            toastr.error(errorThrown, 'ERROR');
        }
    });
}

$(function() {
    $('#submitForm1').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit1').html(
                    'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit1').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    if (response['redirect_url'] != "") {
                        window.location.href = response['redirect_url'];
                    } else {
                        window.location = "./applynow/s2/" + response['mobile'];
                    }
                } else {
                    $('#mobilenoError1').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            }
        });
    });

    $('#submitForm2').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit2').html(
                    'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit2').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location = "../../applynow/s3/" + response['mobile'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            }
        });
    });


    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit3').html(
                    'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit3').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location.href = response['redirect_url'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            }
        });
    });
});
const color = $(".size-details li");

color.on("click", function() {
    $(".size-details ul li").removeClass("active-size");
    $(this).addClass("active-size");
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {

    let resendBtn = document.getElementById('resendBtn');
    let counttime = document.getElementById('counttime');
    let timerDisplay = document.getElementById('timer');
    let countdown = 30;

    let interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(interval);
            resendBtn.classList.remove('d-none');
            counttime.classList.add('d-none');
            timerDisplay.textContent = '';
        }
    }, 1000);

    resendBtn.addEventListener('click', function() {
        resendBtn.classList.add('d-none');
        counttime.classList.remove('d-none');
        countdown = 30;
        timerDisplay.textContent = countdown;

        interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);
    });
});

$('.otp-input').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length === 1) {
        $(this).next('.otp-input').focus();
    }
});
$('.otp-input').on('keydown', function(e) {
    if (e.key === "Backspace" && this.value === '') {
        $(this).prev('.otp-input').focus();
    }
});
</script>