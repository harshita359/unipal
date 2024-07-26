<nav>
    <div class="navbar navbar-default navbar-fixed-top" style="background-color: white; padding: 8px 16px;">
        <div class="horizontal-flex spacing-2 wrap">
            <div class="flex-item nav-logo">
                <a href="index.php">
                    <img src="image/i/110223/full-logo.svg" class="header-logo" alt="Unipal" />
                </a>
            </div>
            <div class="flex-item nav-menu hidden-xs">
                <ul class="nav navbar-nav" style="padding: 0;display: flex;width: 100%;justify-content: center;">
                    <li><a href="index.php"><span class="navbar-option active-home">Home</span></a></li>
                    <li><a href="student-discounts.php"><span class="navbar-option active-discounts">Student Discounts</span></a></li>
                    <li><a href="blog.php"><span class="navbar-option active-blog">Blog</span></a></li>
                    <li><a href="membership.php"><span class="navbar-option active-membership">Membership</span></a></li>
                </ul>
            </div>

            <div class="flex-item hidden-xs" style="order: 0; display:flex;">
                <a href="login.php" class="cta-btn primary-filled">Students</a>
            </div>
            <div class="flex-item hidden-xs" style="order: 0; display:flex;">
                <a href="business.php" class="cta-btn primary-outlined">Businesses</a>
            </div>

            <div class="flex-item hidden-xs" style="order: 0; display:flex;">
                <button onclick="showLocaleSelection();" style="border: none; background: transparent; padding: 0;">
                    <div class="horizontal-flex spacing-1">
                        <div class="flex-item">
                            <svg width="24" height="14" viewBox="0 0 40 24" fill="none" xmlns="http://www.w3.org/2000/sv" style="display: flex;">
                                <g clip-path="url(#clip0_13019_15125)">
                                    <path d="M0 0H40V24H0V0Z" fill="white" />
                                    <path d="M10 0H40V24H10L16 21.6L10 19.2L16 16.8L10 14.4L16 12L10 9.6L16 7.2L10 4.8L16 2.4" fill="#CE1126" />
                                </g>
                                <rect x="0.5" y="0.5" width="39" height="23" stroke="#121212" />
                                <defs>
                                    <clipPath id="clip0_13019_15125">
                                        <rect width="40" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="flex-item">
                            <h6 class="typography body1">English</h6>
                        </div>
                    </div>
                </button>

            </div>

            <div class="flex-item hidden visible-xs">
                <button onclick="toggleSideNav();" style="background-color: transparent; border: none;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/sv" style="display: flex;">
                        <path d="M3 12H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 6H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 18H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>