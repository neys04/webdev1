<?php
include ('includes/header.php');
if(!isset($_SESSION['user'])) header("Location: login.php");
?>

<link rel="stylesheet" href="css/home/styles.css">
</head>

<body>
    <div class="sidebar">
        <div class="top-section">
            <img class="logo" src="./assets/insta-written.png" />
            <img class="logo2" src="./assets/insta-logo.png" />
            <div class="link">
                <img src="./assets/home.png" style="height: 1rem; margin-right: 0.5rem" />
                <a href="#">Home</a>
            </div>
            <div class="link">
                <i class="fas fa-search"></i>
                <a href="#">Search</a>
            </div>
            <div class="link">
                <img src="./assets/explore.png" style="height: 1rem; margin-right: 0.5rem" />
                <a href="#">Explore</a>
            </div>
            <div class="link">
                <img src="./assets/reels.png" style="height: 1rem; margin-right: 0.5rem" />
                <a href="#">Reels</a>
            </div>
            <div class="link">
                <img src="./assets/messenger.png" style="height: 1rem; margin-right: 0.5rem" />
                <a href="#">Messages</a>
            </div>
            <div class="link">
                <i data-feather="heart" style="width: 1rem !important; margin-right: 0.5rem"></i>
                <a href="#">Notifications</a>
            </div>
            <div class="link">
                <img src="./assets/create.png" style="height: 1rem; margin-right: 0.5rem" />
                <a href="#">Create</a>
            </div>
            <div class="link">
                <?php echo "<img src=\"./assets/" . $_SESSION['user']['img_url'] . "\" style=\"height: 1rem; margin-right: 0.5rem\" />"; ?>
                <a href="profile.php">Profile</a>
            </div>
        </div>
        <div class="bottom-section">
            <div class="link">
                <img src="./assets/threads.png" alt="create button" style="height: 1rem; margin-right: 0.5rem;" />
                <a href="#">Threads</a>
            </div>
            <div class="link">
                <img src="./assets/power.png" alt="create button" style="height: 1rem; margin-right: 0.5rem;" />
                <a href="login.php">Log out</a>
            </div>
        </div>
    </div>
    <div class="bottom-navbar">
        <div class="bottom-link">
            <img src="./assets/home.png" style="height: 1rem; margin-right: 0.5rem" />
        </div>

        <div class="bottom-link">
            <img src="./assets/explore.png" style="height: 1rem; margin-right: 0.5rem" />
        </div>
        <div class="bottom-link">
            <img src="./assets/reels.png" style="height: 1rem; margin-right: 0.5rem" />
        </div>

        <div class="bottom-link">
            <img src="./assets/create.png" style="height: 1rem; margin-right: 0.5rem" />
        </div>
        <div class="bottom-link">
            <img src="./assets/profile.jpg" style="height: 1rem; margin-right: 0.5rem" />
        </div>
    </div>
    <div class="main-container">
        <div class="comments-container" id="commentsContainer" style="visibility: hidden;">
            <div class="comments-grid">
                <div class="comments-image" id="commentsImage">
                </div>
                <div class="comments-comments">
                    <div class="comments-header">
                        <div class="header-info">
                            <img alt="Profile Picture" id="commentsAuthorImage">
                            <span id="commentsAuthor"></span>
                            <span>•</span>
                            <span style="color: #0095F6">Follow</span>
                        </div>
                        <div class="header-cancel" id="commentsClose">
                            <svg width="24" height="24" fill="none" stroke="#ffffff" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="comments-section">
                        <div class="comment">
                            <img alt="Profile Picture" id="commentsCaptionImage">
                            <div class="comment-content">
                                <b id="commentsCaptionAuthor">viviennewestwood</b>
                                <span id="commentsCaption">viviennewestwood Zendaya wears a custom Vivienne Westwood
                                    Couture corseted dress,
                                    with a sculpted bodice in pale blue duchess satin</span>
                            </div>
                        </div>
                    </div>
                    <div class="comments-footer">
                        <svg width="20" height="20" fill="#ffffff" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Zm0-2a8 8 0 1 0 0-16.001A8 8 0 0 0 12 20Zm-5-7h2a3 3 0 0 0 6 0h2a5 5 0 1 1-10 0Zm1-2a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm8 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z">
                            </path>
                        </svg>
                        <input type="text" name="addComment" id="addComment" placeholder="Add a comment..." />
                        <span>Post</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="stories-container">
            <div class="story" id="story1">
                <div class="gradient-border">
                    <img src="./assets/profile.jpg" alt="Profile Picture" />
                </div>
                <p>haen00</p>
            </div>
            <div class="story" id="story2">
                <div class="gradient-border">
                    <img src="./assets/mitski.jpg" alt="Profile Picture" />
                </div>
                <p>mitskileaks</p>
            </div>
            <div class="story" id="story3">
                <div class="gradient-border">
                    <img src="./assets/clairo.jpg" alt="Profile Picture" />
                </div>
                <p>clairo</p>
            </div>
            <div class="story" id="story4">
                <div class="gradient-border">
                    <img src="./assets/gz.png" alt="Profile Picture" />
                </div>
                <p>garbo.zhu</p>
            </div>
            <div class="story" id="story5">
                <div class="gradient-border">
                    <img src="./assets/madsmk.jpg" alt="Profile Picture" />
                </div>
                <p>theofficialmads</p>
            </div>
            <div class="story" id="story6">
                <div class="gradient-border">
                    <img src="./assets/melanie.jpg" alt="Profile Picture" />
                </div>
                <p>littlebodybigheart</p>
            </div>

        </div>

        <div class="post-container">
            <div class="post">
                <div class="post-header">
                    <div class="post-info-flex">
                        <img src="./assets/flowerknowspfp.jpg" alt="Profile Picture" class="profile-pic" />
                        <p>flowerknows_global</p>
                        <ul>
                            <li class="list-time">8 hrs</li>
                        </ul>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <img src="./assets/fk.jpg" alt="Post Image" class="post-img" id="post_0" liked="false" />
                <div class="post-icons">
                    <div class="post-icons-left">
                        <div class="heart" id="heart_0" style="margin-top: 0.17rem;">
                            <svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
                                </path>
                            </svg>
                        </div>
                        <!-- <i data-feather="heart" class="heart"></i> -->
                        <i data-feather="message-circle"></i>
                        <i data-feather="send"></i>
                    </div>
                    <i data-feather="bookmark"></i>
                </div>
                <p class="likes">Liked by _sontai_18 and others</p>
                <p class="caption"><b>flowerknows_global</b> Unveil your inner radiance with pink magic! 🌸💕</p>
                <span class="comments" id="comments1">View all comments</span>
            </div>
            <div class="post">
                <div class="post-header">
                    <div class="post-info-flex">
                        <img src="./assets/vw.jpg" alt="Profile Picture" class="profile-pic" />
                        <p>viviennewestwood</p>
                        <ul>
                            <li class="list-time">5 hrs</li>
                        </ul>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <img src="./assets/vwp.jpg" alt="Post Image" class="post-img" id="post_1" liked="false" />
                <div class="post-icons">
                    <div class="post-icons-left">
                        <div class="heart" id="heart_1" style="margin-top: 0.17rem;">
                            <svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
                                </path>
                            </svg>
                        </div>
                        <!-- <i data-feather="heart" class="heart"></i> -->
                        <i data-feather="message-circle"></i>
                        <i data-feather="send"></i>
                    </div>
                    <i data-feather="bookmark"></i>
                </div>
                <p class="likes">Liked by liannnn.na and others</p>
                <p class="caption"> <b>viviennewestwood</b> Zendaya wears a custom Vivienne Westwood Couture corseted
                    dress,
                    with a sculpted bodice in pale blue duchess satin</p>
                <span class="comments" id="comments2">View all comments</span>
            </div>
            <div class="post">
                <div class="post-header">
                    <div class="post-info-flex">
                        <img src="./assets/tattoo.png" alt="Profile Picture" class="profile-pic" />
                        <p>icdwycd</p>
                        <ul>
                            <li class="list-time">3 hrs</li>
                        </ul>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <img src="./assets/butterfly.jpg" alt="Post Image" class="post-img" id="post_2" liked="false" />
                <div class="post-icons">
                    <div class="post-icons-left">
                        <div class="heart" id="heart_2" style="margin-top: 0.17rem;">
                            <svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
                                </path>
                            </svg>
                        </div>
                        <!-- <i data-feather="heart" class="heart"></i> -->
                        <i data-feather="message-circle"></i>
                        <i data-feather="send"></i>
                    </div>
                    <i data-feather="bookmark"></i>
                </div>
                <p class="likes">Liked by catann.e and others</p>
                <p class="caption"><b>icdwycd</b></p>
                <span class="comments" id="comments3">View all comments</span>
            </div>

        </div>
    </div>
    <div class="suggested-for-you">
        <div class="profile-container">
            <div class="profile">
            <?php echo "<img src=\"./assets/" . $_SESSION['user']['img_url'] . "\" alt=\"Profile Picture\" />"; ?>
                <div class="profile-info">
                    <?php echo "<strong>" . $_SESSION['user']['user'] . "</strong>" ?>
                    <?php echo "<span class=\"profile-info-name\">" . $_SESSION['user']['full_name'] . "</span>"; ?>
                </div>
            </div>
            <div class="switch">Switch</div>
        </div>
        <div class="profile-div">
            <p style="font-size: 0.8rem; color: var(--light-grey)">
                Suggested For You
            </p>
            <div class="profile">
                <img src="./assets/tm.jpg" alt="Profile Picture" />
                <div class="profile-info">
                    <strong>themarias</strong>
                    <span class="profile-info-name">Suggested for you</span>
                </div>
            </div>
            <div class="profile">
                <img src="./assets/ptv.jpg" alt="Profile Picture" />
                <div class="profile-info">
                    <strong>piercetheveil</strong>
                    <span class="profile-info-name">Suggested for you</span>
                </div>
            </div>
            <ul class="profile-list">
                <li> About </li>
                <li> Help </li>
                <li> Press </li>
                <li> API </li>
                <li> Jobs </li>
                <li> Privacy </li>
                <li> Terms </li>
                <li> Locations </li>
                <li> Language </li>
                <li> English </li>
            </ul>
            <p style="margin: 0; font-size: 0.7rem; color: var(--light-grey)">
                2024 INSTAGRAM FROM META
            </p>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/home/index.js"></script>

    <?php include ('includes/footer.php'); ?>