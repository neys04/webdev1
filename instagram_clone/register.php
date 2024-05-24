<?php include ('includes/header.php') ?>

<link rel="stylesheet" href="css/register/styles.css">
</head>

<body>
    <main>
        <div class="page">
            <div class="header">
                <h1 class="logo">
                    <img src="assets/instagram.png" alt="instagram" style="width: 175px;">
                </h1>
                <p>Sign up to see photos and videos from your friends.</p>
                <button>
                    <div class="fb">
                        <img src="assets/fb_reg.png" alt="facebook">
                        <p>Log in with Facebook</p>
                    </div>
                </button>
                <div>
                    <hr>
                    <p>OR</p>
                    <hr>
                </div>
            </div>
            <div class="container">
                <form id="registerForm">
                    <input type="text" placeholder="Mobile Number or Email" id="email" required />
                    <input type="text" placeholder="Full Name" id="name" required />
                    <input type="text" placeholder="Username" id="username" required />
                    <input type="password" placeholder="Password" id="password" required />
                    <ul>
                        <p>People who use our service may have uploaded your contact information to Instagram. <a
                                href="">Learn More</a></p>
                        <p>By signing up, you agree to our <a href="">Terms, Privacy,</a> <a href="">Policy</a> and
                            <a href="">Cookies Policy</a> .
                        </p>
                    </ul>
                    <div style="color: green; text-align: center; padding: 1rem; display: none;" id="displayMessage">
                        Account successfully created.</div>
                    <button>Sign up</button>
                </form>
            </div>
        </div>
        <div class="option">
            <p>Have an account? <a href="login.php">Log in</a></p>
        </div>
        <div class="otherapps">
            <p>Get the app.</p>
            <div class="icons">
                <a href="#"><img src="assets/appstore.png" alt="appstore"></a>
                <a href="#"><img src="assets/googleplay.png" alt="googleplay"></a>
            </div>
        </div>
        <div class="footer">
            <div class="footer-1">
                <a href="https://about.meta.com/" target="_blank">
                    <p>Meta</p>
                </a>
                <a href="https://about.instagram.com/" target="_blank">
                    <p>About</p>
                </a>
                <a href="https://about.instagram.com/blog" target="_blank">
                    <p>Blog</p>
                </a>
                <a href="https://about.instagram.com/about-us/careers" style="text-decoration: none;">
                    <p>Jobs</p>
                </a>
                <a href="https://help.instagram.com/" target="_blank">
                    <p>Help</p>
                </a>
                <a href="https://developers.facebook.com/docs/instagram" target="_blank">
                    <p>API</p>
                </a>
                <a href="https://privacycenter.instagram.com/policy/?entry_point=ig_help_center_data_policy_redirect"
                    style="text-decoration: none;">
                    <p>Privacy</p>
                </a>
                <a href="https://help.instagram.com/581066165581870/" style="text-decoration: none;">
                    <p>Terms</p>
                </a>
                <a href="https://www.instagram.com/explore/locations/" style="text-decoration: none;">
                    <p>Locations</p>
                </a>
                <a href="https://www.instagram.com/web/lite/" style="text-decoration: none;">
                    <p>Instagram Lite</p>
                </a>
                <a href="https://www.threads.net/" target="_blank">
                    <p>Threads</p>
                </a>
                <a href="https://www.facebook.com/help/instagram/261704639352628" style="text-decoration: none;">
                    <p>Contact Uploading & Non-Users</p>
                </a>
                <a href="https://about.meta.com/technologies/meta-verified/" target="_blank">
                    <p>Meta Verified</p>
                </a>
            </div>
            <div class="footer-2">
                <p>English</p>
                <p>© 2024 Instagram from Meta</p>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/register/index.js"></script>

    <?php include ('includes/footer.php'); ?>