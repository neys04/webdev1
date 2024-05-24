<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include ('includes/mysqli_connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($dbc, $query))
        echo "Account successfully registered!";

    mysqli_close($dbc);
}
?>