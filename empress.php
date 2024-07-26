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
                            <img src="image/u/s/01HZCR1HWVGDW1YDN6405PTCM2.jpeg" alt="Opening Offer - Free Artisan Gelato! offer at Bateel El'an">
                        </div>
                    </div>
                </div>
                <div class="flex-item shop-details" style="flex: 1 1 0;">
                    <div class="details-container">
                        <div class="vertical-flex spacing-1">
                            <div class="flex-item">
                                <h1 class="typography h5">Empress Sweets & Bakery</h1>
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
                                        <div class="collapsed collapsible-container" data-toggle="collapse" data-target="#bd92c256-f4a4-4a0c-b1e8-3d0eb743375d" aria-expanded="false" aria-controls="bd92c256-f4a4-4a0c-b1e8-3d0eb743375d" style="border: 2px solid #000000; border-radius: 8px; padding: 16px;">
                                            <div class="horizontal-flex">
                                                <div class="flex-item grow">
                                                    <p class="typography body1" style="font-weight: 600;">20% Off!</p>
                                                </div>
                                                <div class="flex-item">
                                                    <div class="arrow r180">
                                                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 1L9 9L17 1" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="bd92c256-f4a4-4a0c-b1e8-3d0eb743375d" class="collapse" aria-labelledby="bd92c256-f4a4-4a0c-b1e8-3d0eb743375d" style="padding-top:24px;">
                                                <div class="vertical-flex spacing-1">
                                                    <div class="flex-item">
                                                        <p class="typography body1" style="font-weight: 600;">Conditions</p>
                                                    </div>
                                                    <div class="flex-item">
                                                        <h1 class="typography body1 wrap">Get a 20% discount on any purchase!

                                                            Offer cannot be availed with any other discounts</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="collapsed collapsible-container" data-toggle="collapse" data-target="#f8b130b1-58f8-46dc-80df-6f55542358e9" aria-expanded="false" aria-controls="f8b130b1-58f8-46dc-80df-6f55542358e9" style="border: 2px solid #000000; border-radius: 8px; padding: 16px;">
                                            <div class="horizontal-flex">
                                                <div class="flex-item grow">
                                                    <p class="typography body1" style="font-weight: 600;">Opening Offer - Free Artisan Gelato!</p>
                                                </div>
                                                <div class="flex-item">
                                                    <div class="arrow r180">
                                                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 1L9 9L17 1" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="f8b130b1-58f8-46dc-80df-6f55542358e9" class="collapse" aria-labelledby="f8b130b1-58f8-46dc-80df-6f55542358e9" style="padding-top:24px;">
                                                <div class="vertical-flex spacing-1">
                                                    <div class="flex-item">
                                                        <p class="typography body1" style="font-weight: 600;">Conditions</p>
                                                    </div>
                                                    <div class="flex-item">
                                                        <h1 class="typography body1 wrap">Opening Offer!

                                                            All students get complimentary artisan gelatos made with Bateel's finest ingredients!

                                                            Offer cannot be availed with any other discounts</h1>
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
                                        <p class="typography body1 text-secondary wrap">Discover the art of fine coffee at Bateel El’an</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sticky" style="padding: 24px; padding-bottom: 32px;">
                        <a class="cta-btn primary-filled medium stretch" href="/account/login?returnUrl=%2Fen-bh%2Fstudent-discounts%2Fbateel-e%27lan">Show Unipal ID</a>
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