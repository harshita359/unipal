<?php
include('includes/header.php');
include('includes/nav.php');

?>
<main>
    <div class="container-fluid">

        <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
        <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
        <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>




        <form action="/en-bh/contact-us" id="contact-form" method="post"><input data-grecaptcha-action="post/general_communication" name="grecaptcha" type="hidden"></input><input name="__RequestVerificationToken" type="hidden" value="UEzBOAgmv3QeLz5QgzWsyA1Ghy-0SJgPrjYW63breixtbziBAJfkylLvCu_BdUNA1Q7POeHto9Vz_3fXzKM7dUK07msy_bOS8OU0FJ8wmy01" />
            <div class="container" id="form" style="margin: 50px auto;">
                <div class="row" style="margin-bottom: 30px;">
                    <h1 class="typography sub-heading center">Contact Unipal</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 float-right">
                        <div class="form-group">
                            <label>Name: <span style="color: red">*</span></label>
                            <input class="form-control input-field text-box single-line" data-val="true" data-val-required="Please enter your name." id="From" name="From" type="text" value="" />
                            <span class="field-validation-valid validation-message" data-valmsg-for="From" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label>Email: <span style="color: red">*</span></label>
                            <input class="form-control input-field text-box single-line" data-val="true" data-val-email="Please enter valid email." data-val-required="Please enter your email." id="Email" name="Email" type="email" value="" />
                            <span class="field-validation-valid validation-message" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label>Subject: <span style="color: red">*</span></label>
                            <input class="form-control input-field text-box single-line" data-val="true" data-val-required="Please enter message subject." id="Subject" name="Subject" type="text" value="" />
                            <span class="field-validation-valid validation-message" data-valmsg-for="Subject" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 float-right">
                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input class="form-control input-field text-box single-line" data-val="true" data-val-phone="Please enter valid phone number" id="Phone" name="Phone" type="tel" value="" />
                            <span class="field-validation-valid validation-message" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label>Message: <span style="color: red">*</span></label>
                            <textarea class="form-control input-field" cols="20" data-val="true" data-val-required="Please enter your message." id="Message" name="Message" placeholder="Speak your heart out..." rows="2" style="min-width: 100%;min-height: 128px;">
</textarea>
                            <span class="field-validation-valid validation-message" data-valmsg-for="Message" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="recaptcha-element" style="text-align: center; text-align: -webkit-center;">
                        <div style="width: 304px; height: 78px;">
                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-ynj3w845k7f" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lffo1AlAAAAAMrUsltlttP4qDIrotkt1v8KYemu&amp;co=aHR0cHM6Ly91bmlwYWwubWU6NDQz&amp;hl=en&amp;v=rKbTvxTxwcw5VqzrtN-ICwWt&amp;size=normal&amp;cb=vtsxfh47mmdx"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-body card-view" style="height:auto;background-color:#F5F5F5;padding: 0px;border-radius: 25px;">
                    <div style="padding: 30px;">
                        <div class="row">
                            <h3 class="primary-color" style="margin-bottom: 20px;padding: 0 10px;text-align:center;margin-top: 0;font-weight:700;">
                                Thank you!
                            </h3>
                        </div>
                        <p class="SPColor" style="text-align: center; margin-bottom: 20px; ">We got your message! Your thoughts matter to us and we will reply within 24 hours!</p>
                        <button type="button" class="btn btn-primary btn-block action-btn primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>

<?php
include('includes/footer.php');
?>