<?php
include ('includes/header.php');
if(!isset($_SESSION['user'])) header("Location: login.php");
?>

<link rel="stylesheet" href="css/profile/styles.css">
</head>

<body>

    <div class="container">
        <div class="left-panel">
            <div class="header">
                <div class="side-nav">
                    <a href="#" class="logo">
                        <img src="assets/insta-written.png" alt="instagram" class="logo-img">
                        <img src="assets/insta-logo.png" class="logo-icon" alt="logo">
                    </a>
                    <ul class="nav-links">
                        <li><a href="index.php"><img src="assets/home.png" class="nav-img" alt="home">
                                <p>Home</p>
                            </a></li>
                        <li><a href="#"><img src="assets/search.png" class="nav-img" alt="search">
                                <p>Search</p>
                            </a></li>
                        <li><a href="#"><img src="assets/explore.png" class="nav-img" alt="explore">
                                <p>Explore</p>
                            </a></li>
                        <li><a href="#"><img src="assets/reels.png" class="nav-img" alt="reels">
                                <p> Reels</p>
                            </a></li>
                        <li><a href="#"> <img src="assets/messenger.png" class="nav-img" alt="message">
                                <p>Message</p>
                            </a></li>
                        <li><a href="#"> <img src="assets/heart.png" class="nav-img" alt="notification">
                                <p>Notifications</p>
                            </a></li>
                        <li><a href="#"><img src="assets/create.png" class="nav-img" alt="create">
                                <p>Create</p>
                            </a></li>
                        <li><a href="profile.php">
                            <?php echo "<img src=\"assets/" . $_SESSION['user']['img_url'] . "\" class=\"nav-img\" alt=\"profile\" />"; ?>
                                <p>Profile</p>
                        <li><a href="#"> <img src="assets/threads.png" class="nav-img" alt="notification">
                                <p>Threads</p>
                            </a></li>
                        <li><a href="login.php"> <img src="assets/power.png" class="nav-img" alt="notification">
                                <p>Log out</p>
                            </a></li>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="main">
                <div class="myprofile">
                    <?php echo "<img src=\"assets/" . $_SESSION['user']['img_url'] . "\" class=\"profile-img\" alt=\"profile\" />"; ?>
                    <div class="all">
                        <div class="idnamesection">
                            <?php echo "<h2>" . $_SESSION['user']['user'] . "</h2>"; ?>
                            <button class="editbtn">Edit Profile</button><img src="assets/settings.png"
                                alt="settings" class="settingsicon">

                        </div>
                        <div class="followsection">
                            <ul>
                                <li><b>1</b> Post</li>
                                <li><b>1,110</b> Followers</li>
                                <li><b>400</b> Following</li>
                            </ul>
                        </div>
                        <div class="nameandbio">
                            <?php echo "<h4>" . $_SESSION['user']['full_name'] . "</h4>"; ?>
                            <?php echo "<p>" . $_SESSION['user']['bio'] . "</p>"; ?>
                        </div>
                    </div>

                </div>
                <div class="postnav">
                    <ul>
                        <li>
                            <p> <img src="assets/feed.png" class="postnav_img" alt="post"> POST</p>
                        </li>
                        <li>
                            <p> <img src="assets/bookmark.png" class="postnav_img" alt="post"> SAVED</p>
                        </li>
                        <li>
                            <p> <img src="assets/tagged.png" class="postnav_img" alt="post"> TAGGED</p>
                        </li>
                    </ul>
                </div>
                <div class="posts">
                    <div class="grid-container">
                        <div class="grid-item">
                            <div class="img_container">
                                <img src="assets/post.jpg" class="mypost_img" alt="post">
                                <div class="after">
                                    <div class="likes">
                                        <p> <img src="assets/chat1.png" class="like-img" alt="chat"> <span
                                                class="liketext"><b>13</b></span></p>
                                        <p> <img src="assets/heart1.png" class="like-img" alt="like"> <span
                                                class="liketext"><b>180</b></span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                <div class="footer">
                    <ul>
                        <li> Meta</li>
                        <li> About</li>
                        <li> Blog</li>
                        <li> Jobs</li>
                        <li> Help</li>
                        <li> API</li>
                        <li> Privacy</li>
                        <li> Terms</li>
                        <li> Top Accounts</li>
                        <li> Locations</li>
                        <li> Instagram Lite</li>
                        <li> Contact Uploading & Non-Users</li>
                        <li> Meta Verified</li>
                    </ul>
                    <p>© 2024 Instagram from Meta</p>
                </div>
            </div>
        </div>
    </div>

    <?php include ('includes/footer.php'); ?>