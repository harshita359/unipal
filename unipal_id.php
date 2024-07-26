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
                                    <form action="" class="form-horizontal" method="post" role="form">
                                        <input data-grecaptcha-action="post/login" name="grecaptcha" type="hidden" value="03AFcWeA6JhjRle1KxxGpGxKGrS28EWw89dpS2oKpw-8tzpx8k7axZD8TfX7lF9FXyy3aLU5K7feUo-YzMFitj7ESu9zVCsZwW-ZcQFmMMKrLPtsKUZ7e0LXVwM1lnOhCgi6mxJcH7a6FcpHpHkfXfo70Sx92pUaN2QUSPf9nZnplhlq2MqeqcsRYgOZ2C83fpkHeUk-ycGf_F9vGrioEEOVWxek3I0PbFm1LIe7QdVEMP667h4_bun2NYOzi3mhVSNbFUt31UBTkKu38Nr1bk_wtwic8CoOZMqeKaYLWc2jIDFdM-HAGKid8DGFk-WBGsFWSCEN1mnuwI8_pJNeraK1N6IR5sMkevepIW_FpmKWi8_xfPev1ETnJmcvCe1p-2GqLpSywJp7Xvudx6pTDumPQPRMAVloSTYLHsWvrs_qIva8-dc3oUKiP14y2JnzpDcV2JRJBnxPhqNsBXRCIYgTHWnJRBnsXZTWjU6ZaMHLFdNyaS0SE7rI3xM6xkZJcj44fRuytOVfxyhmIZ-SLrM30bJv_zWim3nnac9fAcQWfooDfm376uz2b9SzaAT0YTh8li0ClOLIwlWrWClcoq2Pu21NWcPyyczv3EZ6TdQZtUke1IBJOCuHtdhO4k-z5MUIIGBbFCzgF2PZbm6bLX5S687HQ6biEKw3xhiMIvPxGxyKYnj8lGKQNd4A59IdklWXgJoDytXYP30iAdq4O1t8EAgktzB5XyaA"><input name="__RequestVerificationToken" type="hidden" value="Hvk2MGsgyYTSi3rHdOBlKDuqfSJS4efeS-RDLjXwHktaF3qnQ7EUkMNC8tdv-6K8JJU0EPTpNGJvWT2evPDhfhlQmkHEKkn9g4jM-6FhWas1">
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
                                                    <input class="form-control input-field typography body text-box single-line" data-val="true" data-val-required="The Mobile number field is required." id="Username" name="Username" type="text" value="">
                                                </div>
                                            </div>
                                            <span class="field-validation-valid validation-message" data-valmsg-for="Username" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="input-container">
                                            <label>Password</label>
                                            <div class="input-group"><input class="form-control input-field typography body" data-val="true" data-val-required="The Password field is required." id="Password" name="Password" type="password" data-password-id="0">
                                                <div class="input-group-addon" style="border: 1px solid #3d3d3d; border-left: none; background-color: white;"><svg data-password-id="0" class="svg-inline--fa fa-eye fa-w-18 fa-fw field_icon toggle-password" onclick="showHidePassword(0)" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
                                                    </svg><!-- <span data-password-id="0" class="fa fa-fw fa-eye field_icon toggle-password" onclick="showHidePassword(0)"></span> --></div>
                                            </div>
                                            <span class="field-validation-valid validation-message" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="input-container text-center" style="padding-top: 16px; margin: 0;">
                                            <button type="submit" value="Log in" class="cta-btn secondary-filled" style="margin: 0; line-height: 1; padding: 10px; border-radius: 50%;">
                                                <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29">
                                                    <path fill="#000036" d="m2.00001,13c-0.82843,0 -1.5,0.6716 -1.5,1.5c0,0.8284 0.67157,1.5 1.5,1.5l0,-3zm26.0607,2.5607c0.5857,-0.5858 0.5857,-1.5356 0,-2.1214l-9.546,-9.5459c-0.5858,-0.58579 -1.5355,-0.58579 -2.1213,0c-0.5858,0.58579 -0.5858,1.53553 0,2.12132l8.4853,8.48528l-8.4853,8.4853c-0.5858,0.5858 -0.5858,1.5355 0,2.1213c0.5858,0.5858 1.5355,0.5858 2.1213,0l9.546,-9.5459zm-26.0607,0.4393l25,0l0,-3l-25,0l0,3z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex-item">
                                <p class="typography body1 light center">Don’t have an account? <a href="/en-bh/profile" style="color: white; text-decoration: underline;">Create one now</a></p>
                                <p class="typography body1 light center pt2">Forgot password? <a href="/en-bh/profile" style="color: white; text-decoration: underline;">Click here</a></p>
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