<?php
include('includes/header.php');
include('includes/nav.php');

?>
<main>
    <div class="container-fluid">

        <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
        <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
        <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>




        <div style="padding-top: 40px; padding-bottom:80px;">
            <div class="container discounts-container">

                <div class="row filtration-container" style="padding: 40px 0;">
                    <div class="col-lg-6 title-container">
                        <h1 class="typography sub-heading" style="line-height:0.9;">Student Discounts</h1>
                    </div>
                    <div class="col-lg-4 col-sm-8 offer-search-div">
                        <div class="form-group" style="margin:0;">
                            <div class="input-group">
                                <form action="/en-bh/student-discounts" id="offersForm" method="get"><input class="rounded-inputs offer-search-input" id="search" name="Term" placeholder="Where would you like to shop?" style="border-radius: 20px 0 0 20px;" type="search" value="" /></form> <span id="searchButton" class="input-group-addon rounded-inputs" style="cursor: pointer; border-radius: 0 20px 20px 0;"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4" style="padding: 0px;">
                        <select class="rounded-inputs offer-categories-dropdown" id="category" name="CategoryId" style="padding-right: 30px;">
                            <option value="">Categories ✨</option>
                            <option value="cafes-coffee-shops-offers">Cafes</option>
                            <option value="restaurants-offers">Restaurants</option>
                            <option value="padel-offers">Fitness</option>
                            <option value="beauty-salon-spa-offers">Self Care</option>
                            <option value="health-fitness-offers">Healthcare</option>
                            <option value="entertainment-offers">Entertainment</option>
                            <option value="fashion-retail-offers">Shopping</option>
                            <option value="education-offers">Study Hub</option>
                            <option value="everyday-services-offers">Services</option>
                        </select>
                        <div class="fa fa-chevron-down" style="color: white; position: absolute;top: 15px; right: 10px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="row" style="margin: 0px -20px;text-align:center;">

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/0af8e3ab-68b1-4724-a300-1b18be916ee0.jpg" class="lozad" alt="BD 2 per meal only! discount at Jasmi&#39;s" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Jasmi&#39;s</h4>
                                            <h3 class="offer-name">BD 2 per meal only!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/37595c09-9df2-471a-97c2-b96b6b52db49.jpg" class="lozad" alt="BUY ONE GET ONE FREE DRINK! discount at The Coffee Bean &amp; Tea Leaf" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">The Coffee Bean &amp; Tea Leaf</h4>
                                            <h3 class="offer-name">BUY ONE GET ONE FREE DRINK!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/u5bc3d31c-bbc2-40b6-b2e8-fc395467377a.jpeg" class="lozad" alt="20% Off! discount at Dose Cafe" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Dose Cafe</h4>
                                            <h3 class="offer-name">20% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/eb3bdaf2-2e77-4b68-b5f5-22469e67e805.webp" class="lozad" alt="Free Upgrade! discount at Caribou Coffee" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Caribou Coffee</h4>
                                            <h3 class="offer-name">Free Upgrade!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/50b87c08-a8e5-4717-aedc-cb983336c25f.jpg" class="lozad" alt="50% Off! discount at Jasmi&#39;s Coffee" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Jasmi&#39;s Coffee</h4>
                                            <h3 class="offer-name">50% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/01HSDWGCHCTAPB1THHGZHDSZ08.jpeg" class="lozad" alt="10% Off! discount at Derby Cafe" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Derby Cafe</h4>
                                            <h3 class="offer-name">10% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/6b462a40-a23a-47ba-a4e4-6a38be699d6d.jpg" class="lozad" alt="40% Off! discount at Milkd" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Milkd</h4>
                                            <h3 class="offer-name">40% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/a3191b67-19de-4762-9a5d-6a4e3afde52e.jpeg" class="lozad" alt="Free Truffle or Cookie! discount at Guji Specialty Coffee " />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Guji Specialty Coffee </h4>
                                            <h3 class="offer-name">Free Truffle or Cookie!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/f60e668f-3cf1-45c0-8608-fb6f86680f94.jpeg" class="lozad" alt="15% Off! discount at Wingman" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Wingman</h4>
                                            <h3 class="offer-name">15% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/4abbc3cb-eb7f-448f-85d3-d22ad06bcebe.jpeg" class="lozad" alt="15% Off! discount at Mug Coffee &amp; Roastery" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Mug Coffee &amp; Roastery</h4>
                                            <h3 class="offer-name">15% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>



                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/114a7e99-dc97-46ea-a1f2-4ba7a4bfe3c3.jpeg" class="lozad" alt="15% Off! discount at Bait Al Manaeesh" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">Bait Al Manaeesh</h4>
                                            <h3 class="offer-name">15% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="reef-club-house.php">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-right" style="padding:10px;">
                                    <div class="card-view offer-card">
                                        <div class="ratio-container r16-9">
                                            <img data-src="image/u/40623aa5-956a-4e57-80dd-1524af058222.jpg" class="lozad" alt="5% Off! discount at New York Coffee" />
                                        </div>
                                        <div style="padding:8px 12px;">
                                            <h4 class="offer-shop-name">New York Coffee</h4>
                                            <h3 class="offer-name">5% Off!</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <style>
            @media(min-width:1200px) {
                .filtration-container {
                    display: flex;
                }

                .offer-search-div {
                    padding-left: 15px;
                }
            }

            @media(max-width:1200px) {
                .title-container {
                    padding-bottom: 56px;
                }

                .title-container>h1 {
                    text-align: center;
                }
            }

            .active-discounts {
                color: #FF8B00;
            }
        </style>
    </div>
</main>

<?php
include('includes/footer.php');
?>