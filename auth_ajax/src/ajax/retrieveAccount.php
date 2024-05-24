<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    include ('includes/mysqli_connect.php');

    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
    if ($r = mysqli_query($dbc, $query)) {
        if(mysqli_num_rows($r) == 1) {
            while($row = mysqli_fetch_array($r)) $data = $row;
            echo json_encode($data);
        } else
            echo (-1);
    }

    mysqli_close($dbc);
}
?>