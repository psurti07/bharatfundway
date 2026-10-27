<?php
$this->load->view('includes/header-offer.php');
//$today = date("Y-m-d", strtotime($userdetails['rec_date']));
//$last30 = date('Y-m-d', strtotime('-30 days'));
//if ($today <= $last30) {
  //$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
//} else {
  $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
//}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-80 pb-80 bg-light section-theme-12 eligible-section">
        <div class="container">
            <div class="row justify-content-center align-items-center mx-5">
                <div class="col-12 col-md-10 col-lg-10 mb-15 mb-md-30 section-block-wrap m-auto">

                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 p-0">
                            <div
                                class="card border-0  mt-md-0 mt-5 rounded-0 card-left-content h-100 position-relative bg-transparent">
                                <p class="text-uppercase fw-bold text-light-sky d-md-block d-none">YOUR APPLICATION</p>
                                <div class="application-timeline mb-60">
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
                                    <div class="timeline-step completed">
                                        <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                                        <span class="timeline-title">Personal Details</span>
                                    </div>
                                    <div class="timeline-step completed">
                                        <div class="timeline-circle bg-green"><i class="fas fa-check"></i></div>
                                        <span class="timeline-title">Unlock Offers</span>
                                    </div>
                                    <div class="timeline-step active">
                                        <div class="timeline-circle bg-orange">6</div>
                                        <span class="timeline-title">Purchase Plan</span>
                                    </div>
                                </div>

                                <span
                                    class="text-success limited-offer-main py-10 px-15 rounded-pill mb-15 d-inline-block fa-xs d-md-block d-none"><i
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
                                        <span class="progress-segment completed"></span>
                                        <span class="progress-segment completed"></span>
                                        <span class="progress-segment completed"></span>
                                        <span class="progress-segment active"></span>
                                    </div>

                                    <p class="mobile-current-step mb-0">
                                        Step 6 of 6 <span class="text-orange">· Purchase Plan</span>
                                    </p>

                                </div>


                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 p-0">
                            <div class="block-holder form-condidates bg-white shadow border-0 rounded-0">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="subhead mb-0">

                                            <h5 class="mb-10 text-blue">Premium Subscription Offer</h5>
                                            <p class="mb-0">Your <strong class="text-orange">Rs.
                                                    <?php echo $eligibilityamtindia; ?> </strong> pre-approved loan is
                                                waiting.
                                                Purchase
                                                a subscription to proceed - <span class="text-danger">Offer Valid till
                                                    12 am only!</span></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-12 col-md-12 col-lg-6">


                                        <div class="subscription-card bg-transparent">
                                            <?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                            <input type="hidden" name="loantype" id="loantype"
                                                value="<?php echo $userdetails['loantype']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="applyid"
                                                value="<?php echo $userdetails['applyid']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="userid"
                                                value="<?php echo $userdetails['userid']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="fullname" id="fullname"
                                                value="<?php echo $userdetails['fullname']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="mobile" id="mobile"
                                                value="<?php echo $userdetails['mobile']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="email" id="email"
                                                value="<?php echo $userdetails['email']; ?>" class="form-control"
                                                required>
                                            <input type="hidden" name="cardtype"
                                                value="<?php echo $userdetails['cardtype']; ?>" class="form-control"
                                                required>


                                            <div
                                                class="box-inner border bg-light-sky border-dark subacription-card h-100 overflow-hidden">
                                                <p
                                                    class="mb-0 text-center fs-12 fw-bold bg-blue px-2 py-0 mt-0 text-white">
                                                    77%
                                                    OFF
                                                </p>
                                                <div class="p-25">
                                                    <div class="d-flex align-items-start justify-content-between mb-20">
                                                        <div class="plan-details border-0 p-0">

                                                            <h5 class="mb-0 fw-bold text-dark">Limited-time offer</h5>
                                                        </div>
                                                        <div>

                                                            <?php if ($productdata['inOffer'] == 1) { ?>
                                                            <!-- <p
                                                            class="mb-0 bg-success text-white px-10 py-5 h6 rounded-pill pb-0">
                                                            <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                            OFF</p> -->
                                                            <?php } ?>

                                                        </div>
                                                    </div>

                                                    <?php
                        if ($productdata['inOffer'] == 1) {
                          echo '<div class="d-flex align-items-end justify-content-start"><h6><del class="text-coal pe-10">&#8377; ' . formatePrice($productdata['amount']) . '</del></h6>';
                          echo '<h4><span class="text-dark"><strong> ₹ ' . formatePrice($productdata['offeramount']) . '/-</strong> </span></h4> </div>';
                          $subtotal = $productdata['offeramount'];
                        } else {
                          echo '<h5 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '</h5>';
                          $subtotal = $productdata['amount'];
                        }
                        ?>

                                                    <ul class="list-unstyled features-list pt-20">
                                                        <li
                                                            class="d-flex justify-content-between mb-15 pb-20 border-bottom border-dark">
                                                            <span class="fw-bold fa-xs">ITEMS
                                                            </span><span class="fw-bold fa-xs">PRICE</span>
                                                        </li>
                                                        <li class="d-flex justify-content-between mb-10"><span>Amount
                                                            </span><span
                                                                class="fw-bold"><?php echo formatePriceIndia($subtotal); ?></span>
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-between mb-10 border-bottom border-dark pb-10">
                                                            <span>GST (18%) :</span> <span class="fw-bold"><?php $gst = $subtotal * 0.18;
                          echo formatePriceIndia($gst); ?></span>
                                                        </li>
                                                        <li class="d-flex justify-content-between mb-10"><span
                                                                class="fw-bold">
                                                                Total </span><span class="fw-bold"><?php $grandtotal = $subtotal + $gst;
                          echo formatePriceIndia($grandtotal); ?></span></li>
                                                    </ul>
                                                    <button type="submit" class="btn btn-orange btn-sm w-100"
                                                        id="formsubmit3"><span class="btn-text">Buy Now <i
                                                                class="fa-solid fa-arrow-right"></i></span></button>

                                                </div>
                                            </div>

                                            <?php echo form_close(); ?>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 mt-lg-0 mt-20">
                                        <div
                                            class="box-inner p-25 border bg-light-sky border-dark subacription-card h-100">
                                            <h6 class="fs-6 mb-20 text-dark"> Subscription Benefits</h6>
                                            <ul class="list-unstyled features-list mb-0 border-bottom border-dark">
                                                <li class="ps-0 d-flex mb-10 align-items-center">
                                                    <div>
                                                        <div class="feature-img bg-orange"> <i
                                                                class="fa-solid fa-check text-dark fa-xs"></i>
                                                        </div>
                                                    </div><span class="ms-10 text-dark">Loan Process in
                                                        Multiple NBFCs</span>

                                                </li>
                                                <li class="ps-0 d-flex mb-10 align-items-center">
                                                   <div>
                                                     <div class="feature-img bg-orange"> <i
                                                            class="fa-solid fa-check text-dark fa-xs"></i>
                                                    </div>
                                                   </div><span class="ms-10 text-dark">100% Online Financial
                                                        Consultation</span>
                                                </li>
                                                <li class="ps-0 d-flex mb-10 align-items-center">
                                                  <div>
                                                      <div class="feature-img bg-orange"> <i
                                                            class="fa-solid fa-check text-dark fa-xs"></i>
                                                    </div>
                                                  </div><span class="ms-10 text-dark">Access Personalized
                                                        Tracking Portal</span>
                                                </li>
                                                <li class="ps-0 d-flex mb-10 align-items-center">
                                                   <div>
                                                     <div class="feature-img bg-orange"> <i
                                                            class="fa-solid fa-check text-dark fa-xs"></i>
                                                    </div>
                                                   </div><span class="ms-10 text-dark">Dedicated Loan Expert
                                                        Assigned</span>
                                                </li>
                                                <li class="ps-0 d-flex mb-10 align-items-center">
                                                  <div>
                                                      <div class="feature-img bg-orange"> <i
                                                            class="fa-solid fa-check text-dark fa-xs"></i>
                                                    </div>
                                                  </div><span class="ms-10 text-dark">Subscription Validity:
                                                        9
                                                        Months</span>
                                                </li>
                                                <li class="ps-0 d-flex mb-30 align-items-center">
                                                   <div>
                                                     <div class="feature-img bg-orange"> <i
                                                            class="fa-solid fa-check text-dark fa-xs"></i>
                                                    </div>
                                                   </div><span class="ms-10 text-dark">Loan Processing Time:
                                                        48
                                                        Hours</span>
                                                </li>
                                            </ul>

                                            <div class="reveiew-section text-center mt-30">
                                                <div>
                                                    <div class="salaried-img mb-10">
                                                        <img src="<?php echo base_url('assets/images/img/google.png'); ?>"
                                                            alt="image" class="">
                                                    </div>
                                                </div>
                                                <div class="employment-content d-flex justify-content-center">


                                                    <div class="rates-review mb-0 me-10">
                                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                    </div>
                                                    <span class="card-position mb-0 lh-sm text-coal">4.95/5</span>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- <section class="pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-4 d-block d-sm-none d-md-none d-lg-none">
                    <?php $testimoniallists = array('offer1.png', 'offer2.png', 'offer5.png', 'offer6.png', 'offer7.png', 'offer9.png') ?>
                    <div class="companies-slider" data-slick='{"dots": false}'>
                        <?php foreach ($testimoniallists as $row) { ?>
                        <div class="slick-slide">
                            <article>
                                <div class="wrap">
                                    <div class="">
                                        <img src="<?php echo base_url() ?>assets/images/lending_img/<?php echo $row ?>"
                                            alt="">
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--<section class="section section-theme-10 latest-candidates-block bg-light-sky pt-30 pt-md-40 pt-lg-50 pt-xxl-50 pb-30 pb-md-50 pb-lg-60 pb-xxl-60">
    <div class="container">
      <div class="row mb-30 mb-md-40">
        <div class="col-12">
          <h4 class="text-center">Our Customers Testimonials</h4>
          <p class="text-center">Here Is What Our Clients Have To Say About Us</p>
        </div>
      </div>

      <div class="top_companies_holder">
        <?php $testimoniallist = array('1.png', '2.png', '3.png', '4.png', '5.png', '6.png') ?>
        <div class="companies-slider">
          <?php foreach ($testimoniallist as $row) { ?>
            <div class="slick-slide">
              <article>
                <div class="wrap">
                  <div class="">
                    <img src="<?php echo base_url() ?>assets/images/testimonial/<?php echo $row ?>" alt="customer img">
                  </div>
                </div>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>-->
</main>

<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm3').on('submit', function(e) {
        $('#form-submit3').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>

<?php
$this->load->view('includes/footer-apply');
?>