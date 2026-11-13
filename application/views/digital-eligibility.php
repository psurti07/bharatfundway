<?php
$this->load->view('includes/header-offer.php');
?>

<main class="main d-flex flex-column">
    <section class="section section-theme-1 packages-block pt-80 pb-80 bg-light eligible-section">
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
                                        <span class="progress-segment active"></span>
                                        <span class="progress-segment"></span>
                                        <span class="progress-segment"></span>
                                    </div>

                                    <p class="mobile-current-step mb-0">
                                        Step 4 of 6 <span class="text-orange">· Personal Details</span>
                                    </p>

                                </div>


                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 p-0">
                            <div class="block-holder form-condidates bg-white shadow rounded-0">
                                <div class="d-flex">
                                    <div class="subhead">
                                        <h5 class="mb-5 text-blue"><?php echo $userdetails['loanname']; ?></h5>
                                        <p class="mb-0">For Our Experts To Analyze Your Loan Requirements.</p>
                                    </div>
                                </div>
                                <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                <div class="row">
                                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                        class="form-control" required>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">CIBIL Score</label>
                                        <select class="form-select bg-light-sky" id="cibilscore" name="cibilscore"
                                            required>
                                            <option value="">CIBIL Score *</option>
                                            <option value="Below 650">Below 650</option>
                                            <option value="650 - 700">650 - 700</option>
                                            <option value="700 - 750">700 - 750</option>
                                            <option value="750 - 800">750 - 800</option>
                                            <option value="800 - 850">800 - 850</option>
                                            <option value="850 - 900">850 - 900</option>
                                        </select>
                                        <div class="help-block font-small-3"></div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">Monthly Income (₹)</label>
                                        <input class="form-control bg-light-sky" type="text" id="monincome"
                                            name="monincome" placeholder="Monthly Income *" required
                                            inputmode="numeric">
                                        <div class="help-block font-small-3"></div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">Current Monthly EMI
                                            (₹)</label>
                                        <input class="form-control bg-light-sky" type="text" id="monemi" name="monemi"
                                            placeholder="Current Monthly EMI *" required inputmode="numeric">
                                        <div class="help-block font-small-3"></div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">Loan Purpose</label>
                                        <select class="form-select bg-light-sky" id="loanpurpose" name="loanpurpose"
                                            required>
                                            <option value="">Select Loan Purpose *</option>
                                            <?php if ($userdetails['loantype'] == 12) { ?>
                                            <option value="Business Expansion">Business Expansion</option>
                                            <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                            <option value="Supplier Payments">Supplier Payments</option>
                                            <option value="Setup Manufacturing Unit">Setup Manufacturing Unit
                                            </option>
                                            <option value="Hiring Budget">Hiring Budget</option>
                                            <option value="Other">Other</option>
                                            <?php } else { ?>
                                            <option value="Personal Use">Personal Use</option>
                                            <option value="Property Renovation">Property Renovation</option>
                                            <option value="Marriage Purpose">Marriage Purpose</option>
                                            <option value="Education Purpose">Education Purpose</option>
                                            <option value="Medical Emergency">Medical Emergency</option>
                                            <option value="Other">Other</option>
                                            <?php } ?>
                                        </select>
                                        <div class="help-block font-small-3"></div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">Pincode</label>
                                        <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                            inputmode="numeric" class="form-control mb-2 bg-light-sky"
                                            placeholder="Pincode*" required>
                                        <div class="help-block font-small-3"></div>
                                        <span class="pincode error text-danger text-start"></span>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">City</label>
                                        <input type="text" name="city" id="city" class="form-control mb-2 bg-light-sky"
                                            placeholder="City*" required>
                                        <div class="help-block font-small-3"></div>
                                    </div>

                                    <div class="form-group col-12 col-lg-6 mb-15">
                                        <label class="text-uppercase h6 mb-10 text-blue">State</label>
                                        <input type="text" name="state" id="state"
                                            class="form-control mb-2 bg-light-sky" placeholder="State*" required>
                                        <div class="help-block font-small-3"></div>
                                    </div>
                                    <div class="form-group col-12 col-lg-12">
                                        <button type="submit" class="btn btn-orange btn-sm w-100" id="formsubmit1"><span
                                                class="btn-text">Check Your Eligibility <i
                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm1').on('submit', function(e) {
        $('#formsubmit1').attr('disabled', true);
        $('#formsubmit1').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>

<script>
$('#pincode').on('input', function() {

    var pincode = $(this).val();

    if (pincode.length === 6) {

        $.ajax({
            url: "<?= base_url('onlineprocess/geoLocation') ?>",
            type: "POST",
            data: {
                pincode: pincode
            },
            dataType: "json",

            success: function(response) {

                if (response.status === 'success') {
                    $('#city').val(response.city);
                    $('#state').val(response.state);
                    $('.pincode').text('');
                } else {
                    $('#city').val('');
                    $('#state').val('');
                    $('.pincode').text('Enter valid pincode.');
                }
            },

            error: function() {
                $('.pincode').text('Enter valid pincode.');
            }
        });

    } else {
        $('#city').val('');
        $('#state').val('');
    }
});
</script>

<?php
$this->load->view('includes/footer-apply');
?>