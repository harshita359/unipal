<?php
include('includes/header.php');
include('includes/nav.php');

?>
   <main>
        <div class="container-fluid">

            <div style="height:100px" class="hidden-lg visible-md visible-sm hidden-xs"></div>
            <div style="height:65px" class="visible-lg hidden-md hidden-sm hidden-xs"></div>
            <div style="height:50px" class="visible-xs hidden-lg hidden-md hidden-sm"></div>




            <div class="full-width-div section-spacing">
                <div class="container">
                    <div class="vertical-flex spacing-6">
                        <div class="flex-item">
                            <h1 class="typography sub-heading center">Choose Your Plan</h1>
                        </div>
                        <div class="flex-item">
                            <div class="plans-container">
                                <div class="plan-item">
                                    <div class="card-view">
                                        <div class="vertical-flex" style="height:100%;">
                                            <div class="flex-item">
                                                <h2 class="typography sub-heading1">Balaash</h2>
                                                <p class="typography sub-heading2" style="padding-top: 8px;">Free</p>
                                            </div>
                                            <div class="flex-item grow">
                                                <ul class="benefits typography body1">
                                                    <li>Free access to exclusive student discounts on the Unipal App</li>
                                                    <li>Digital Student ID</li>
                                                </ul>
                                            </div>
                                            <div class="flex-item">
                                                <a href="profile.php" class="cta-btn primary-outlined medium full-width">Create Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="plan-item">
                                    <div class="card-view">
                                        <div class="vertical-flex" style="height:100%;">
                                            <div class="flex-item">
                                                <h2 class="typography sub-heading1 light">Haiba</h2>
                                                <p class="typography sub-heading2 light" style="padding-top: 8px;">19 BD/Year</p>
                                            </div>
                                            <div class="flex-item grow">
                                                <ul class="benefits typography body1 light">
                                                    <li>Access all Standard & Haiba offers on the Unipal App</li>
                                                    <li>Monthly giveaways & prizes</li>
                                                    <li>Premium Support Features</li>
                                                    <li>Personalized Savings Tracker</li>
                                                </ul>
                                            </div>
                                            <div class="flex-item">
                                                <a href="profile.php" class="cta-btn light-filled medium full-width">Become Haiba</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="plan-item">
                                    <div class="card-view">
                                        <div class="vertical-flex" style="height:100%;">
                                            <div class="flex-item">
                                                <h2 class="typography sub-heading1 light">Zain Youth</h2>
                                                <p class="typography sub-heading2 light" style="padding-top: 8px;">Free Haiba</p>
                                            </div>
                                            <div class="flex-item grow">
                                                <ul class="benefits typography body1 light">
                                                    <li>All Haiba privileges but for FREE!</li>
                                                    <li>Subscribe to any Zain Youth package to be eligible</li>
                                                </ul>
                                            </div>
                                            <div class="flex-item">
                                                <a href="https://eshop.bh.zain.com/product/plans?service_type=13&service_plan_type=143&contract_type=9" target="_blank" class="cta-btn light-filled medium full-width">Become Haiba</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .active-membership {
                    color: #FF8B00;
                }

                .benefits {
                    list-style: disc outside;
                    margin-left: 20px;
                    padding-left: 0;
                    padding-top: 32px;
                    padding-bottom: 48px;
                }

                .benefits>li {
                    margin-bottom: 24px;
                }

                .plans-container {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                    align-content: stretch;
                    align-items: stretch;
                    margin-right: -8px;
                    margin-left: -8px;
                }

                .plan-item {
                    flex: 1 1 0;
                    min-width: 300px;
                    padding: 8px;
                }

                .plan-item>div {
                    padding: 24px;
                    height: 100%;
                }

                .plan-item:nth-child(1)>div {
                    border: 2px solid #001A9C;
                }

                .plan-item:nth-child(2)>div {
                    background-color: #000036;
                }

                .plan-item:nth-child(3)>div {
                    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTIiIGhlaWdodD0iMTM0IiB2aWV3Qm94PSIwIDAgOTIgMTM0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNS4xNzU1NiA3My4zNzZWODMuODcyNUwxMy44OTg0IDg5LjEyMDhMMTguODQxNCA5OC4wMzI2TDE4Ljk1NzcgOTguMjUwN0gyOS4wOTA3TDM4LjAxNzEgMTAzLjYxNUw0Ni45NDM1IDk4LjI1MDdINTYuODg3Nkw2MS44NTk2IDg5LjI4MDdMNzAuODczMiA4My44NzI1VjczLjAyNzFMNzUuODU5OCA2NC4wMjhMNzAuODczMiA1NS4wMjg5VjQ0LjM1OEw2MS45OTA0IDM5LjAyMjVMNTcuMDAzOSAzMC4wMzc5TDU2LjkwMjEgMjkuODM0NEg0Ni42OTY0TDM4LjAzMTcgMjQuNjE1MkwyOS4zNTI0IDI5LjgzNDRIMTguOTU3N0wxMy43Njc2IDM5LjE5NjlMNS4xNzU1NiA0NC4zNThWNTQuNjk0NkwwIDY0LjAyOEw1LjE3NTU2IDczLjM3NlpNMzguMDMxNyAxMDIuNjEyTDMwLjc2MjYgOTguMjM2MUg0NS4zMTUyTDM4LjAzMTcgMTAyLjYxMlpNNzAuMDU5MSA4My4zNjM3TDYyLjcwMjggODcuNzgzM0w3MC4wNTkxIDc0LjUyNDVWODMuMzYzN1pNNzAuMDU5MSA0NC44NjY4VjUzLjU0Nkw2Mi44MzM2IDQwLjUxOTlMNzAuMDU5MSA0NC44NjY4Wk0zOC4wMzE3IDI1LjYxODRMNDUuMDUzNiAyOS44MzQ0SDMxLjAwOThMMzguMDMxNyAyNS42MTg0Wk02LjAwNDIzIDQ0Ljg2NjhMMTIuOTM4OSA0MC42OTQ0TDYuMDA0MjMgNTMuMjExN1Y0NC44NjY4Wk02LjAwNDIzIDU0LjkyNzJMMTQuMzc4MiAzOS44MjIxTDI5LjU3MDUgMzAuNjkyMkg0Ni40NzgzTDYxLjM5NDQgMzkuNjYyMkw3MC4wNTkxIDU1LjI3NjFWNzIuODA5TDYxLjI3ODEgODguNjU1NUw0Ni43NTQ1IDk3LjM5MjlIMjkuMzA4OEwxNC40OTQ1IDg4LjQ5NTZMNS45ODk3IDczLjE1NzlWNTQuOTI3Mkg2LjAwNDIzWk02LjAwNDIzIDc0Ljg1ODlMMTMuMDY5NyA4Ny42MDg4TDYuMDA0MjMgODMuMzYzN1Y3NC44NTg5WiIgZmlsbD0id2hpdGUiIGZpbGwtb3BhY2l0eT0iMC41Ii8+CjxwYXRoIGQ9Ik02Ny4yMjE1IDcuMDY3OTRMNjguNTI0IDAuNTM1OTQ1TDc0LjIzMzcgNC40Nzg2Nkw3Mi45MDk0IDEwLjk0MjZMNjcuMjIxNSA3LjA2Nzk0Wk03OS41NjQxIDE2Ljk1NEw3My44MDkyIDEzLjAxMDdMNzIuNTA2NyAxOS41NDI3TDc4LjIxNzUgMjMuMzk1MUw3OS41NjQxIDE2Ljk1NFpNNzQuNDM4MiAxMS41MDYyTDgwLjg4MDggMTIuODYxN0w4NC44MTU1IDcuMTU3MjVMNzguMjgyIDUuODQ1NjZMNzQuNDM4MiAxMS41MDYyWk02OC4zNjg3IDE4LjEyOTNMNzIuMzAzNCAxMi40MjQ4TDY1Ljc2OTggMTEuMTEzMkw2MS45MDMxIDE2Ljc5Nkw2OC4zNjg3IDE4LjEyOTNaIiBmaWxsPSIjNEVDMUI2IiBmaWxsLW9wYWNpdHk9IjAuNSIvPgo8cGF0aCBkPSJNNjUuMTM1MyAxMjIuMzAzTDU5LjU5MTcgMTE2Ljg4OEw2Ny4wNTk4IDExMy44MjJMNzIuNTIzMiAxMTkuMjE1TDY1LjEzNTMgMTIyLjMwM1pNODIuNjA4NSAxMTYuNTRMNzUuMTExMSAxMTkuNjVMODAuNjU0NyAxMjUuMDY1TDg4LjAzNTUgMTIxLjk0TDgyLjYwODUgMTE2LjU0Wk03NC4wNDMgMTE4LjA4Mkw3OS40NTMxIDExMi42NTlMNzYuMzg2OCAxMDUuMjAyTDcwLjk2MTggMTEwLjc0MUw3NC4wNDMgMTE4LjA4MlpNNzYuNjUwNSAxMjguMjA0TDczLjU4NDIgMTIwLjc0N0w2OC4xNTkyIDEyNi4yODZMNzEuMjQ3NSAxMzMuNjYzTDc2LjY1MDUgMTI4LjIwNFoiIGZpbGw9IiM0RUMxQjYiIGZpbGwtb3BhY2l0eT0iMC41Ii8+CjxwYXRoIGQ9Ik03Ni40NTA5IDkyLjgwMjZDNzkuNzQ4NCA5Mi43NDI2IDgyLjQ1OCA5NC4xNTE3IDgyLjUwNzEgOTYuMjQ0QzgyLjU1NjIgOTguMzM2MyA3OS45MjYxIDEwMC4zMTkgNzYuNjI4NiAxMDAuMzhDNzYuNTAzOSAxMDAuMzg0IDc2LjI1OTMgMTAwLjM3NSA3Ni4yNTkzIDEwMC4zNzVMNzYuMjU2MyAxMDAuMTc2Qzc2LjI1NjMgMTAwLjE3NiA3Ni41NzI5IDEwMC4xNDggNzYuNzI2NiAxMDAuMTIxQzc5LjAyOTQgOTkuNzA2NSA4MC45MDUxIDk3LjkzNyA4MC44NjggOTYuMzUzOEM4MC44Mzk4IDk1LjE1MDkgNzkuNDMxNyA5My4xMzUyIDc2LjE0MTEgOTMuMTk2Nkw3Ni4xMzIzIDkyLjgxOTRDNzYuMjM3OSA5Mi44MTQ0IDc2LjM0MzUgOTIuODA2MiA3Ni40NTA5IDkyLjgwMjZaTTg1LjU5NTYgOTYuNjU4NEM4NS42NDQ2IDk4Ljc1MDcgODguMzU0MyAxMDAuMTYxIDkxLjY1MTcgMTAwLjFDOTEuNzU3NCAxMDAuMDk4IDkxLjg2NDcgMTAwLjA5IDkxLjk3MDMgMTAwLjA4M0w5MS45NjE1IDk5LjcwODlDODguNjcxIDk5Ljc3MDMgODcuMjYyOSA5Ny43NTYyIDg3LjIzMyA5Ni41NTE4Qzg3LjE5NTggOTQuOTY4NiA4OS4wNzE2IDkzLjE5NzUgOTEuMzc2MSA5Mi43ODVDOTEuNTMxNSA5Mi43NTcyIDkxLjg0NDUgOTIuNzI2NSA5MS44NDQ1IDkyLjcyNjVMOTEuODQzNCA5Mi41MzA5QzkxLjg0MzQgOTIuNTMwOSA5MS41OTg3IDkyLjUxOTkgOTEuNDc0IDkyLjUyMjNDODguMTczMSA5Mi41ODM5IDg1LjU0NjUgOTQuNTY3NyA4NS41OTU2IDk2LjY1ODRaTTgzLjc1ODQgOTguMTUzOUM4MS40MjQ0IDk4LjE5NzUgNzkuODUwMSAxMDAuNjI0IDc5LjkxOTQgMTAzLjU3OEM3OS45MjE2IDEwMy42NzQgNzkuOTMwOCAxMDMuNzY5IDc5LjkzODIgMTAzLjg2M0w4MC4zNTc1IDEwMy44NTZDODAuMjg4NCAxMDAuOTA4IDgyLjUzODQgOTkuNjQ3MiA4My44ODEzIDk5LjYyMjFDODUuNjQ4NyA5OS41ODkxIDg3LjYyNjIgMTAxLjI2OCA4OC4wODcyIDEwMy4zMzNDODguMTE4MiAxMDMuNDcyIDg4LjE0OTEgMTAzLjc1NCA4OC4xNDkxIDEwMy43NTRMODguMzcwOSAxMDMuNzUxQzg4LjM3MDkgMTAzLjc1MSA4OC4zODE0IDEwMy41MzIgODguMzc4NyAxMDMuNDJDODguMzA5NCAxMDAuNDY3IDg2LjA5NDIgOTguMTEwMyA4My43NTg0IDk4LjE1MzlaTTc5Ljg4MiA4OS42NDY5Qzc5Ljg1MSA4OS41MDc4IDc5LjgxODQgODkuMjI1NyA3OS44MTg0IDg5LjIyNTdMNzkuNTk4MyA4OS4yMjY4Qzc5LjU5ODMgODkuMjI2OCA3OS41ODYxIDg5LjQ0NzUgNzkuNTg4NyA4OS41NTc3Qzc5LjY1ODEgOTIuNTE0NSA4MS44NzMzIDk0Ljg2NzYgODQuMjA3MyA5NC44MjQxQzg2LjU0MzEgOTQuNzgwNSA4OC4xMTc0IDkyLjM1NTEgODguMDQ4MSA4OS4zOTk4Qzg4LjA0NTkgODkuMzA2NyA4OC4wMzY3IDg5LjIxMDYgODguMDMyOCA4OS4xMTc1TDg3LjYxMTcgODkuMTI1M0M4Ny42ODA4IDkyLjA2OTggODUuNDMyNiA5My4zMzM4IDg0LjA4OTcgOTMuMzU4OEM4Mi4zMjA1IDkzLjM5MDMgODAuMzQ2NSA5MS43MDk3IDc5Ljg4MiA4OS42NDY5WiIgZmlsbD0id2hpdGUiIGZpbGwtb3BhY2l0eT0iMC41Ii8+Cjwvc3ZnPgo=);
                    background-color: #000036;
                    background-repeat: no-repeat;
                    background-position: 97% 8px;
                    background-size: 90px;
                }
            </style>
        </div>
    </main>


    <?php
include('includes/footer.php');
?>