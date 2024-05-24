<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include ('../includes/mysqli_connect.php');
    $user = $_POST['user'];
    $password = sha1(trim($_POST['password']));

    $query = "SELECT * FROM users WHERE user = '$user' OR email = '$user'";
    if ($r = mysqli_query($dbc, $query)) {
        if (mysqli_num_rows($r) == 1) {
            $row = mysqli_fetch_array($r);
            if ($row['password'] == $password) {
                $_SESSION['user'] = $row;
                echo json_encode(200);
            } else
                echo json_encode($user);
        } else
            echo json_encode(400);
    } else
        echo json_encode(400);
}

?>