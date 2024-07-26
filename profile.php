<?php
include('includes/header.php');
include('includes/nav.php');

?>
   <main>
        <div class="container-fluid">

            <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
            <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
            <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>




            <div class="full-width-div wave-bg">
                <div class="container">
                    <div class="flex-container">
                        <div class="flex-items">
                            <img class="animate-v app-screen" src="image/u/4814fc08-a56d-419f-8094-754680825ef4.png" />
                        </div>
                        <div class="flex-items">
                            <h1 class="profile-heading">Access your profile &amp; more through the app!</h1>

                            <div style="order: 0; flex: 0 1 auto; align-self: auto; padding-top:56px;">
                                <div class="app-store-badge-container">
                                    <div class="top-banner-badge">
                                        <a href="https://apps.apple.com/bh/app/unipal/id1561570512"><img src="https://s3.me-south-1.amazonaws.com/s3.unipal.me/i/appstore-badge.svg" class="app-store-badge banner" alt="app store badge" /></a>
                                    </div>
                                    <div class="top-banner-badge">
                                        <a href="https://play.google.com/store/apps/details?id=me.unipal.students"><img src="https://s3.me-south-1.amazonaws.com/s3.unipal.me/i/google-play-badge.svg" class="app-store-badge banner" alt="google play badge" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .active-profile {
                    color: #FF8B00;
                }

                .profile-heading {
                    margin: 0;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 60px;
                    line-height: 82px;
                    align-items: center;
                    text-align: start;
                    color: #FFFFFF;
                }

                img.app-screen {
                    max-height: 550px;
                    max-width: 100%;
                }

                .top-banner-badge {
                    padding: 4px;
                    width: 220px;
                }

                .flex-container {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    justify-content: center;
                    align-items: stretch;
                    align-content: stretch;
                    padding: 80px 0;
                }

                .flex-items {
                    width: 50%;
                    padding: 0 8px;
                    display: block;
                    flex-grow: 0;
                    flex-shrink: 1;
                    flex-basis: auto;
                    order: 0;
                    text-align: center;
                    align-self: center;
                }

                .flex-items:nth-child(2) {
                    padding: 16px;
                }

                .app-store-badge-container {
                    display: flex;
                    flex-wrap: nowrap;
                    justify-content: flex-start;
                }

                @media(max-width: 992px) {
                    .profile-heading {
                        padding-top: 40px;
                        margin: auto;
                        max-width: 500px;
                        font-size: 40px;
                        line-height: 60px;
                        text-align: center;
                    }
                    img.app-screen {
                        max-height: 450px;
                    }
                    .app-store-badge-container {
                        justify-content: center;
                    }
                    .top-banner-badge {
                        width: 220px;
                    }
                    .flex-container {
                        flex-wrap: wrap;
                    }
                    .flex-items {
                        width: 100%;
                    }
                    .flex-items:nth-child(2) {
                        padding: 0;
                    }
                }
            </style>

        </div>
    </main>

    <?php
include('includes/footer.php');
?>