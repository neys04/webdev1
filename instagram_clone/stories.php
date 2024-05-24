<?php
include ('includes/header.php');
if(!isset($_SESSION['user'])) header("Location: login.php");
?>

<link rel="stylesheet" href="css/stories/styles.css">
</head>

<?php

if($_SERVER['REQUEST_METHOD'] == "GET") {
    $user = "";
    $pfp = "";
    $img = "";
    $time = "";

    switch ($_GET['id']) {
        case 0: {
            $user = "haen00";
            $pfp = "profile.jpg";
            $img = "haen.jpg";
            $time = "1h";
            break;
        }
        case 1: {
            $user = "mitskileaks";
            $pfp = "mitski.jpg";
            $img = "mits.jpg";
            $time = "30m";
            break;
        }
        case 2: {
            $user = "clairo";
            $pfp = "clairo.jpg";
            $img = "sapphic.jpg";
            $time = "5h";
            break;
        }
        case 3: {
            $user = "garbo.zhu";
            $pfp = "gz.png";
            $img = "pot.jpg";
            $time = "3h";
            break;
        }
        case 4: {
            $user = "theofficialmads";
            $pfp = "madsmk.jpg";
            $img = "mads.jpg";
            $time = "46m";
            break;
        }
        case 5: {
            $user = "littlebodybigheart";
            $pfp = "melanie.jpg";
            $img = "mel.jpg";
            $time = "12h";
            break;
        }
        default: {
            $user = "null";
            $pfp = "null";
            $img = "null";
            $img = "0";
            break;
        }
    }
}

?>

<body>
    <div class="main-story-container">
        <div class="story-container-header">
            <img src="assets/insta-written.png"> 
            <div id="cancelStory">
                <svg width="36" height="36" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </div>
        </div>
        <div class="story-container">
            <?php echo "<div class=\"story-active\" style=\"background-image: url('assets/" . $img . "'); \">"; ?>
                <div class="story-info">
                    <div class="story-header">
                        <?php echo "<img src=\"assets/" . $pfp . "\" alt=\"Profile picture\">"; ?>
                        <?php echo "<span>" . $user . "</span>"; ?>
                        <?php echo "<span id=\"time\">" . $time . "</span>"; ?>
                    </div>
                    <div class="story-footer">
                        <?php echo "<input type=\"text\" name=\"storyComment\" id=\"storyComment\" placeholder=\"Reply to " . $user . "...\" />"; ?>
                        <div id="heart" liked="false">
                            <svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/stories/index.js"></script>

    <?php include ('includes/footer.php'); ?>