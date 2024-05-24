<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include ('../includes/mysqli_connect.php');
    $email = $_POST['email'];
    $name = $_POST['name'];
    $user = $_POST['user'];
    $password = sha1(trim($_POST['pass']));
    ;

    $query = "SELECT * FROM users WHERE user = '$user'";
    if ($r = mysqli_query($dbc, $query)) {
        if (mysqli_num_rows($r) <= 0) { // username not yet taken
            $email_query = "SELECT * FROM users WHERE email = '$email'";
            if ($e_r = mysqli_query($dbc, $email_query)) {
                if (mysqli_num_rows($e_r) <= 0) { // email not yet taken
                    $regQuery = "INSERT INTO users (full_name, user, email, password) VALUES ('$name', '$user', '$email', '$password');";
                    if ($reg = mysqli_query($dbc, $regQuery)) {
                        echo json_encode(200);
                    }
                } else
                    echo json_encode(402);
            }
        } else
            echo json_encode(401);
    } else
        echo json_encode(400);
}

?>