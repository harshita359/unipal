<?php
include('includes/header.php');
include('includes/nav.php');

?>
<main>
    <div class="container-fluid">

        <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
        <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
        <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>


        <div class="full-width-div">
            <div class="vertical-flex shop-details">
                <div class="flex-item shop-details">
                    <div class="sticky">
                        <div class="shop-img-container">
                            <img src="image/u/s/01HZ9BET86BBCP193B804PMPHA.jpeg" alt="20% OFF offer at Cue inn Club &amp; Cafe">
                        </div>
                    </div>
                </div>
                <div class="flex-item shop-details" style="flex: 1 1 0;">
                    <div class="details-container">
                        <div class="vertical-flex spacing-1">
                            <div class="flex-item">
                                <h1 class="typography h5">Cue inn Club &amp; Cafe</h1>
                            </div>
                            <div class="flex-item">
                                <hr>
                            </div>
                            <div class="flex-item">
                                <div class="vertical-flex spacing-3">
                                    <div class="flex-item">
                                        <p class="typography h6">Offers</p>
                                    </div>
                                    <div class="flex-item">
                                        <div class="collapsible-container collapsed" data-toggle="collapse" data-target="#ecdaef01-03f9-449b-84e5-a636675421af" aria-expanded="false" aria-controls="ecdaef01-03f9-449b-84e5-a636675421af" style="border: 2px solid #000000; border-radius: 8px; padding: 16px;">
                                            <div class="horizontal-flex">
                                                <div class="flex-item grow">
                                                    <p class="typography body1" style="font-weight: 600;">20% OFF</p>
                                                </div>
                                                <div class="flex-item">
                                                    <div class="arrow r180">
                                                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 1L9 9L17 1" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ecdaef01-03f9-449b-84e5-a636675421af" class="collapse" aria-labelledby="ecdaef01-03f9-449b-84e5-a636675421af" style="padding-top: 24px; height: 24px;" aria-expanded="false">
                                                <div class="vertical-flex spacing-1">
                                                    <div class="flex-item">
                                                        <p class="typography body1" style="font-weight: 600;">Conditions</p>
                                                    </div>
                                                    <div class="flex-item">
                                                        <h1 class="typography body1 wrap">* CODE TO BE PROVIDED UP ON BILLING TO AVAIL DISCOUNT.
                                                            * DISCOUNT NOT APPLICABLE WITH ANY PROMOTIONS.
                                                            * SHEESHA IS NOT INCLUDED IN THE DISCOUNT</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-item">
                                <hr>
                            </div>
                            <div class="flex-item">
                                <div class="vertical-flex spacing-2">
                                    <div class="flex-item">
                                        <p class="typography h6">About</p>
                                    </div>
                                    <div class="flex-item">
                                        <p class="typography body1 text-secondary wrap">Cue Inn Cafe offers you All day dinning healthy food with various options. We are opened from 7 am till 3am. Cafe located in salmaniya, serves Breakfast , Lunch and Dinner.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sticky" style="padding: 24px; padding-bottom: 32px;">
                        <a class="cta-btn primary-filled medium stretch" href="/account/login?returnUrl=%2Fen-bh%2Fstudent-discounts%2Fcueinn">Show Unipal ID</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .vertical-flex.shop-details {
                flex-direction: row;
            }

            .flex-item.shop-details:nth-child(1) {
                padding: 0;
                width: 50vw;
            }

            .shop-img-container {
                height: 100vmin;
            }

            .shop-img-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .details-container {
                padding: 32px;
            }

            @media(max-width: 1200px) {
                .vertical-flex.shop-details {
                    flex-direction: column;
                }

                .flex-item.shop-details:nth-child(1) {
                    padding: 0;
                    width: 100%;
                    height: auto;
                }

                .shop-img-container {
                    position: relative;
                    width: 100%;
                    padding-top: 56.25%;
                    height: auto;
                }

                .shop-img-container img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                }
            }

            @media(max-width: 600px) {
                .shop-img-container {
                    padding-top: 100%;
                }

                .shop-img-container img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                }

                .details-container {
                    padding: 32px 16px;
                }
            }
        </style>

    </div>
</main>

<?php
include('includes/footer.php');
?>