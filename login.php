<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admins 
              WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Admin Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</div>