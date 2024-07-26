<?php
include('includes/header.php');
include('includes/nav.php');

?>
 <main>
        <div class="container-fluid">

            <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
            <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
            <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>



            <div class="full-width-div wave-bg section-spacing">
                <div class="container">
                    <div class="vertical-flex spacing-8">
                        <div class="flex-item">
                            <h1 class="typography sub-heading center light">Student Login</h1>
                        </div>
                        <div class="flex-item">
                            <div class="vertical-flex spacing-4">
                                <div class="flex-item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-0">
                                        <form action="/en-bh/account/login" class="form-horizontal" method="post" role="form"><input data-grecaptcha-action="post/login" name="grecaptcha" type="hidden"></input><input name="__RequestVerificationToken" type="hidden" value="QLKANEBFh6pVnJFU8qsgPIWjK-2GYcAby10MgIfUNGzyBR04EN5rmaX-HQnQTueQ_vJHWFVb904RXPjR8h_H4W6u0Z7j0xNZImg802ujcTA1"
                                            />
                                            <div class="input-container">
                                                <label>Phone Number</label>
                                                <div class="vertical-flex" style="flex-direction:row;">
                                                    <div class="flex-item" style="padding-right:8px;">
                                                        <select name="Code" class="form-control input-field typography h6 center" style="height: 48px;">
                                                <option value="973">+973</option>
                                                <option value="966">+966</option>
                                            </select>

                                                    </div>
                                                    <div class="flex-item grow">
                                                        <input class="form-control input-field typography body text-box single-line" data-val="true" data-val-required="The Mobile number field is required." id="Username" name="Username" type="text" value="" />
                                                    </div>
                                                </div>
                                                <span class="field-validation-valid validation-message" data-valmsg-for="Username" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="input-container">
                                                <label>Password</label>
                                                <input class="form-control input-field typography body" data-val="true" data-val-required="The Password field is required." id="Password" name="Password" type="password" />
                                                <span class="field-validation-valid validation-message" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="input-container text-center" style="padding-top: 16px; margin: 0;">
                                                <button type="submit" value="Log in" class="cta-btn secondary-filled" style="margin: 0; line-height: 1; padding: 10px; border-radius: 50%;">
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29">
                                            <path fill="#000036" d="m2.00001,13c-0.82843,0 -1.5,0.6716 -1.5,1.5c0,0.8284 0.67157,1.5 1.5,1.5l0,-3zm26.0607,2.5607c0.5857,-0.5858 0.5857,-1.5356 0,-2.1214l-9.546,-9.5459c-0.5858,-0.58579 -1.5355,-0.58579 -2.1213,0c-0.5858,0.58579 -0.5858,1.53553 0,2.12132l8.4853,8.48528l-8.4853,8.4853c-0.5858,0.5858 -0.5858,1.5355 0,2.1213c0.5858,0.5858 1.5355,0.5858 2.1213,0l9.546,-9.5459zm-26.0607,0.4393l25,0l0,-3l-25,0l0,3z" />
                                        </svg>
                                    </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="flex-item">
                                    <p class="typography body1 light center">Don’t have an account? <a href="profile.php" style="color: white; text-decoration: underline;">Create one now</a></p>
                                    <p class="typography body1 light center pt2">Forgot password? <a href="profile.php" style="color: white; text-decoration: underline;">Click here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>


    <?php
include('includes/footer.php');
?>